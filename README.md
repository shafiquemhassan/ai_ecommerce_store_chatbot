# AI E-commerce Store Chatbot

A modern e-commerce platform built with Laravel featuring a built-in smart chatbot that assists customers with product discovery, FAQs, and support.

## 🚀 Features

- **Product Catalog & Management**: Full suite of e-commerce features including product listings, categories, and detailed product pages.
- **Smart Chatbot Integration**: A responsive, integrated chatbot that helps users find products based on natural language queries, handles FAQs (shipping, warranty, contact info), and provides smart fuzzy matching for product searches.
- **Shopping Cart & Checkout**: Complete user flow for adding items to the cart, managing quantities, and processing checkout.
- **Admin Dashboard**: Powered by Filament PHP, providing a sleek, modern interface for managing products, orders, and users.
- **User Authentication**: Secure user registration, login, and profile management using Laravel Breeze/Fortify.
- **Order Tracking**: Users can view their past orders and track current shipping statuses.

## 🛠️ Tech Stack

- **Framework**: [Laravel 12.x](https://laravel.com/)
- **Admin Panel**: [Filament PHP 3.x](https://filamentphp.com/)
- **Database**: SQLite (default, configurable to MySQL/PostgreSQL)
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Assets**: Vite

## ⚙️ Requirements

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- SQLite (or another supported database)

## 📦 Installation & Setup

1. **Clone the repository** (if applicable):
   ```bash
   git clone <repository-url>
   cd ai_ecommerce_store_chatbot
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Install Node dependencies**:
   ```bash
   npm install
   ```

4. **Environment Configuration**:
   Copy the example `.env` file and configure your database and other settings.
   ```bash
   cp .env.example .env
   ```
   *By default, the project is configured to use SQLite.*

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations (and Seeders)**:
   This will create the necessary tables for products, users, orders, and the chatbot's data.
   ```bash
   php artisan migrate --seed
   ```

7. **Build Frontend Assets**:
   ```bash
   npm run build
   ```
   *(Or run `npm run dev` to watch for changes during development)*

8. **Start the Development Server**:
   ```bash
   php artisan serve
   ```
   You can now access the application at `http://localhost:8000`.

## 🤖 How the Chatbot Works

The chatbot is driven by a custom `BotController` that processes user input and responds dynamically:
- **FAQ Handling**: Instantly provides answers to common questions about shipping, warranty, and support based on keyword matching.
- **Product Search**: Searches the store's database (`products` table) for names and descriptions matching the user's query.
- **Fuzzy Fallback**: If an exact match isn't found, the bot breaks the query down to offer "Did you mean...?" suggestions for similar products.

## 🔒 Admin Access

To access the Filament admin dashboard, navigate to `http://localhost:8000/admin`. 
You may need to create an admin user first using the Filament command:
```bash
php artisan make:filament-user
```

## 📄 License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
