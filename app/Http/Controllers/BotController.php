<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function chat(Request $request)
    {
        $query = $request->input('message');
        
        if (!$query) {
            return response()->json(['response' => 'Please ask a question.']);
        }

        $query = strtolower($query);

        // Check for specific keywords
        if (str_contains($query, 'warranty')) {
            return response()->json(['response' => 'All our products come with a 1-year standard warranty per manufacturer terms.']);
        }

        if (str_contains($query, 'contact') || str_contains($query, 'support')) {
            return response()->json(['response' => 'You can reach us at support@shopai.com for any assistance.']);
        }

        if (str_contains($query, 'shipping') || str_contains($query, 'delivery')) {
            return response()->json(['response' => 'We usually ship within 24 hours. Expected delivery is 3-5 business days.']);
        }

        // Search for products
        $product = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->first();

        if ($product) {
            $response = "I found " . $product->name . ". It is priced at $" . number_format($product->price, 2) . ". ";
            
            if ($product->features) {
                 // Take first line of features
                 $features = explode("\n", $product->features);
                 $response .= "Key features include: " . $features[0];
            } else {
                $response .= $product->description;
            }
            
            return response()->json(['response' => $response, 'product_id' => $product->id]);
        }
        
        // Try searching for partial words if exact match failed
        $words = explode(' ', $query);
        foreach($words as $word) {
            if (strlen($word) > 3) {
                 $product = Product::where('name', 'like', '%' . $word . '%')->first();
                 if ($product) {
                     return response()->json(['response' => "Did you mean " . $product->name . "? It costs $" . number_format($product->price, 2) . "."]);
                 }
            }
        }

        return response()->json(['response' => "I'm sorry, I couldn't find any products matching your query. Can you try asking with the product name?"]);
    }
}
