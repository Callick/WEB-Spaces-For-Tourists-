# Tourismo Porto 🖥️
The application provides historic sites, restaurants, and “things to do” around Porto. Visitors land on a dynamic home page fed by the database, can drill into detailed pages with live weather for the location, search across all places, or filter by category. The platform features a responsive frontend for tourists to explore destinations and a secure admin panel powered by OpenAdmin for content management.

# Highlights
  1. 🗺️ Destination discovery with detailed place information <br>
  2. 🔐 Role-based access control <br>
  3. 📱 Fully responsive design for all devices <br>
  4. 🖥️ Admin dashboard for managing destinations, users, and content <br>
  5. 🌦️ Real-time weather integration for locations <br>
  6. 🧭 Interactive maps for destination navigation

# Key Features
  - User Facing <br>
      1. Browse destinations by category <br>
      2. View detailed place information with descriptions and images <br>
      3. See real-time weather information for destinations <br>
      4. Interactive maps for location navigation <br>
      5. Responsive design for mobile and desktop <br>
  - Admin <br>
      1. Secure authentication with role-based access <br>
      2. Manage destinations (CRUD operations) <br>
      3. Manage user accounts <br>
      4. Upload and manage destination images <br>

# Technology
  - Backend
      - PHP 8.2
      - Laravel 10 (MVC framework)
      - MySQL (Database)
      - OpenAdmin (Admin Panel)
  - Frontend
      - Bootstrap 5 (Responsive design)
      - Font Awesome (Icons)
      - iFrame via Google Maps
      - OpenWeather API (Weather data)
  - Tools
      - Composer (PHP dependency management)
      - Git (Version control)
      - XAMPP (For Server & DB)

# Prerequisite
  - PHP 8.1+ OR HIGHER
  - Composer
  - MySQL 5.7/8.0
  - Git
  - An OpenWeather API key

# Installation
  Follow the steps below to set up the project on your local machine: <br>
  ** 1. Clone the repository **
      ``` 
      git clone https://github.com/Callick/WEB-Spaces-For-Tourists-.git
      cd WEB-Spaces-For-Tourists-/tourismWebsite
      ```
    ** 2. Install PHP dependencies **
      ```
      composer install
      ```
    ** 3. Install JS assets **
    ```
    npm install
    ```
    ** 4. Environment configuration **
    ```
    cp .env.example .env
    php artisan key:generate
    ```
    Open .env and set as instructed below:
    ```
    DB_DATABASE=your_db
    DB_USERNAME=your_user
    DB_PASSWORD=your_pass
    OPENWEATHER_API_KEY=xxxxxxxx
    ADMIN_EMAIL=your_admin@example.com
    ```
    ** 5. Database setup & migration **
    ```
    php artisan migrate
    ```
    
