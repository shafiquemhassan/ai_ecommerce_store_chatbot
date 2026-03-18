<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'NeuralNav AI Robot',
                'slug' => 'neuralnav-ai-robot',
                'description' => 'Advanced home assistant robot with neutral network AI capabilities for managing your smart home.',
                'features' => 'Voice recognition, facial tracking, 4K camera, 24/7 autonomous monitoring',
                'warranty_information' => '2 Years Limited Warranty',
                'price' => 1299.99,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['Extra Battery Pack', 'Charging Dock Pro']),
                'image' => 'products/neuralnav.jpg'
            ],
            [
                'name' => 'Smart Vision Glasses Pro',
                'slug' => 'smart-vision-glasses-pro',
                'description' => 'AR glasses powered by AI for real-time translation, navigation, and seamless notifications.',
                'features' => '1080p micro-OLED, Bluetooth 5.3, AI translation, 12hr battery',
                'warranty_information' => '1 Year Limited Warranty',
                'price' => 499.50,
                'expected_delivery_date' => '2-3 Business Days',
                'add_on_products' => json_encode(['Prescription Lenses', 'Hard Carrying Case']),
                'image' => 'products/visionglasses.jpg'
            ],
            [
                'name' => 'Quantum Core Processor X1',
                'slug' => 'quantum-core-processor-x1',
                'description' => 'Next-gen desktop CPU with dedicated AI neural processing units for machine learning workloads.',
                'features' => '16 Cores, 32 Threads, 5.5GHz Boost, 64MB L3 Cache',
                'warranty_information' => '3 Years Manufacturer Warranty',
                'price' => 699.00,
                'expected_delivery_date' => 'Next Business Day',
                'add_on_products' => json_encode(['Thermal Paste', 'Liquid Cooler 360mm']),
                'image' => 'products/quantumcore.jpg'
            ],
            [
                'name' => 'HoloDeck Display 8K',
                'slug' => 'holodeck-display-8k',
                'description' => '32-inch 8K holographic display monitor that projects 3D images without the need for glasses.',
                'features' => '8K resolution, 120Hz refresh rate, Eye-tracking AI, 100% sRGB',
                'warranty_information' => '3 Years Warranty',
                'price' => 2499.00,
                'expected_delivery_date' => '7-10 Business Days',
                'add_on_products' => json_encode(['Monitor Arm', 'Screen Cleaning Kit']),
                'image' => 'products/holodeck.jpg'
            ],
            [
                'name' => 'AeroDrone Scout AI',
                'slug' => 'aerodrone-scout-ai',
                'description' => 'Compact automated drone with obstacle avoidance and AI subject tracking for cinematic shots.',
                'features' => '4K 60fps video, 45 min flight time, 10km range, AI tracking',
                'warranty_information' => '1 Year Warranty',
                'price' => 899.99,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['ND Filters', 'Propeller Guards']),
                'image' => 'products/aerodrone.jpg'
            ],
            [
                'name' => 'EchoSync Smart Earbuds',
                'slug' => 'echosync-smart-earbuds',
                'description' => 'True wireless earbuds with AI-powered active noise cancellation and spatial audio.',
                'features' => 'Bluetooth 5.4, 30hr total battery, AI ANC, IPX4 water resistance',
                'warranty_information' => '1 Year Limited Warranty',
                'price' => 199.99,
                'expected_delivery_date' => '2-3 Business Days',
                'add_on_products' => json_encode(['Silicone Case Cover', 'Memory Foam Tips']),
                'image' => 'products/echosync.jpg'
            ],
            [
                'name' => 'SecureNet Home Firewall AI',
                'slug' => 'securenet-home-firewall-ai',
                'description' => 'Plug-and-play network security device that uses machine learning to block threats and malware.',
                'features' => 'Gigabit throughput, VPN support, Ad-blocking, AI threat detection',
                'warranty_information' => '2 Years Warranty',
                'price' => 149.00,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['1-Year Premium Threat Intel']),
                'image' => 'products/securenet.jpg'
            ],
            [
                'name' => 'VitalBand Health Tracker',
                'slug' => 'vitalband-health-tracker',
                'description' => 'Fitness smartwatch with continuous ECG, blood oxygen, and AI predictive health insights.',
                'features' => 'AMOLED display, 14-day battery, GPS, ECG monitoring',
                'warranty_information' => '1 Year Limited Warranty',
                'price' => 249.50,
                'expected_delivery_date' => '2-4 Business Days',
                'add_on_products' => json_encode(['Leather Strap', 'Screen Protectors']),
                'image' => 'products/vitalband.jpg'
            ],
            [
                'name' => 'OmniDesk Smart Studio',
                'slug' => 'omnidesk-smart-studio',
                'description' => 'Motorized standing desk with built-in wireless charging, AI posture alerts, and cable management.',
                'features' => 'Dual motors, memory presets, anti-collision, posture AI',
                'warranty_information' => '5 Years Frame Warranty',
                'price' => 799.00,
                'expected_delivery_date' => '5-7 Business Days',
                'add_on_products' => json_encode(['Monitor Mount', 'Anti-fatigue Mat']),
                'image' => 'products/omnidesk.jpg'
            ],
            [
                'name' => 'Lumina AI Web Camera',
                'slug' => 'lumina-ai-web-camera',
                'description' => '4K webcam with AI framing and lighting adjustment for professional video conferencing.',
                'features' => '4K Sony sensor, AI auto-framing, studio lighting software, privacy cover',
                'warranty_information' => '1 Year Warranty',
                'price' => 179.99,
                'expected_delivery_date' => '2-3 Business Days',
                'add_on_products' => json_encode(['Ring Light', 'Mini Tripod']),
                'image' => 'products/luminacam.jpg'
            ],
            [
                'name' => 'AutoChef Smart Oven',
                'slug' => 'autochef-smart-oven',
                'description' => 'Countertop oven with food recognition AI to automatically set cooking time and temperature.',
                'features' => 'WiFi connectivity, HD interior camera, 12 cooking modes, self-cleaning',
                'warranty_information' => '2 Years Warranty',
                'price' => 399.00,
                'expected_delivery_date' => '5-7 Business Days',
                'add_on_products' => json_encode(['Pizza Stone', 'Air Fry Basket']),
                'image' => 'products/autochef.jpg'
            ],
            [
                'name' => 'SleepSense AI Mattress Pad',
                'slug' => 'sleepsense-ai-mattress-pad',
                'description' => 'Under-mattress sensor that tracks sleep stages, heart rate, and controls room temperature via smart home integrations.',
                'features' => 'Dual-zone tracking, non-wearable, sleep coaching app, IFTTT integration',
                'warranty_information' => '1 Year Warranty',
                'price' => 299.99,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['Silk Pillowcase']),
                'image' => 'products/sleepsense.jpg'
            ],
            [
                'name' => 'CodeCompanion Keyboard',
                'slug' => 'codecompanion-keyboard',
                'description' => 'Mechanical keyboard with programmable OLED keys and AI-assisted macro generation.',
                'features' => 'Hot-swappable switches, RGB, OLED keycaps, wireless/wired modes',
                'warranty_information' => '2 Years Limited Warranty',
                'price' => 229.00,
                'expected_delivery_date' => '2-4 Business Days',
                'add_on_products' => json_encode(['Wrist Rest', 'Custom Keycaps']),
                'image' => 'products/codekeyboard.jpg'
            ],
            [
                'name' => 'SonicBeam Soundbar AI',
                'slug' => 'sonicbeam-soundbar-ai',
                'description' => 'Dolby Atmos soundbar that uses AI to analyze room acoustics and optimize audio output.',
                'features' => '7.1.4 channels, wireless subwoofer, eARC, AI room calibration',
                'warranty_information' => '2 Years Warranty',
                'price' => 899.00,
                'expected_delivery_date' => '4-6 Business Days',
                'add_on_products' => json_encode(['Rear Surround Speakers', 'Wall Mount']),
                'image' => 'products/sonicbeam.jpg'
            ],
            [
                'name' => 'PurifyAir AI Purifier',
                'slug' => 'purifyair-ai-purifier',
                'description' => 'Smart air purifier that detects pollutants and adjusts fan speed autonomously, learning your household patterns.',
                'features' => 'HEPA 14 filter, VOC sensor, laser dust detection, 500 sq ft coverage',
                'warranty_information' => '3 Years Warranty',
                'price' => 349.50,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['Replacement Filter (x2)']),
                'image' => 'products/purifyair.jpg'
            ],
            [
                'name' => 'PetPal AI Feeder',
                'slug' => 'petpal-ai-feeder',
                'description' => 'Automated pet feeder with facial recognition to ensure correct dietary portions for multi-pet homes.',
                'features' => '1080p camera, two-way audio, portion control, jam-free mechanism',
                'warranty_information' => '1 Year Warranty',
                'price' => 189.99,
                'expected_delivery_date' => '2-5 Business Days',
                'add_on_products' => json_encode(['Desiccant Bags', 'Stainless Steel Bowl']),
                'image' => 'products/petpal.jpg'
            ],
            [
                'name' => 'WriteAssist Digital Pen',
                'slug' => 'writeassist-digital-pen',
                'description' => 'Smart pen that digitizes handwritten notes in real-time and uses AI to summarize them.',
                'features' => 'Bluetooth, 10hr battery, vector graphics support, cloud sync',
                'warranty_information' => '1 Year Limited Warranty',
                'price' => 129.00,
                'expected_delivery_date' => '2-3 Business Days',
                'add_on_products' => json_encode(['Smart Notebook', 'Extra Ink Cartridges']),
                'image' => 'products/writeassist.jpg'
            ],
            [
                'name' => 'GrowSmart AI Planter',
                'slug' => 'growsmart-ai-planter',
                'description' => 'Automated indoor planter that monitors soil moisture, light, and nutrients to keep plants alive perfectly.',
                'features' => 'Self-watering 2L tank, LED grow light, plant database, mobile app',
                'warranty_information' => '1 Year Warranty',
                'price' => 159.00,
                'expected_delivery_date' => '3-6 Business Days',
                'add_on_products' => json_encode(['Nutrient Pack', 'Seed Kits']),
                'image' => 'products/growsmart.jpg'
            ],
            [
                'name' => 'DriveSafe AI Dashcam',
                'slug' => 'drivesafe-ai-dashcam',
                'description' => 'Dual channel 4K dashcam with AI lane departure and front collision warnings.',
                'features' => '4K front / 1080p rear, GPS, G-sensor, cloud backup',
                'warranty_information' => '2 Years Warranty',
                'price' => 259.99,
                'expected_delivery_date' => '2-4 Business Days',
                'add_on_products' => json_encode(['Hardwire Kit', 'Polarizing Filter']),
                'image' => 'products/drivesafe.jpg'
            ],
            [
                'name' => 'MetaVerse VR Headset Pro',
                'slug' => 'metaverse-vr-headset-pro',
                'description' => 'Standalone VR headset with eye tracking and high-res color passthrough for mixed reality experiences.',
                'features' => 'Pancake lenses, Snapdragon XR2+, Wi-Fi 6E, 256GB storage',
                'warranty_information' => '1 Year Limited Warranty',
                'price' => 999.00,
                'expected_delivery_date' => '3-5 Business Days',
                'add_on_products' => json_encode(['Elite Strap with Battery', 'Link Cable']),
                'image' => 'products/metaverse.jpg'
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
