# Laravel Marketplace Application

A functional marketplace prototype built with Laravel, featuring multi-role authentication, product CRUD with image uploads, and Bulma CSS styling.

## 🚀 Features

- **Multi-Role Authentication:** Dedicated flows for **Buyers** and **Sellers**.
- **Product Management (CRUD):** 
  - Sellers can Create, Read, Update, and Delete their own products.
  - Image file upload support for product listings.
- **Modern UI:** Styled entirely with the **Bulma** CSS framework.
- **SQLite Integration:** Uses a lightweight SQLite database for easy portability.
- **About Us Page:** Meet the 3-person development team.

## 🛠️ Tech Stack

- **Framework:** Laravel 10.x
- **Frontend:** Bulma CSS, Font Awesome, Alpine.js (via Breeze)
- **Database:** SQLite
- **Auth:** Laravel Breeze (Blade Stack)

## 📋 Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM

## ⚙️ Setup Instructions

1. **Install Dependencies:**
   ```bash
   composer install
   npm install && npm run build
   ```

2. **Environment Configuration:**
   The project is configured to use SQLite. Ensure your `.env` has:
   ```env
   DB_CONNECTION=sqlite
   ```

3. **Database Setup:**
   ```bash
   # Create the sqlite file if it doesn't exist
   touch database/database.sqlite
   
   # Run migrations
   php artisan migrate
   ```

4. **Storage Link:**
   Ensure product images are accessible:
   ```bash
   php artisan storage:link
   ```

5. **Run the Server:**
   ```bash
   php artisan serve
   ```

## 👥 The Team

- **Alvin Cuenca:** Lead Developer (Backend Architecture & Logic)
- **John Kent Beriton:** UI/UX Specialist (Styling & User Experience)
- **Jomel Gallo:** Database Administrator (Data Integrity & Optimization)

## ✅ Testing

Run the feature and unit tests to ensure everything is working correctly:
```bash
php artisan test
```
