# MVC Framework from Scratch (PHP)

This project is a simple Model-View-Controller (MVC) framework built from scratch in PHP. It demonstrates the core concepts of MVC architecture, routing, controllers, models, and views, providing a foundation for building PHP web applications.

## Features

- Custom routing system ([lib/Route.php](lib/Route.php))
- MVC structure with controllers, models, and views
- Simple autoloader for class files ([autoloader.php](autoloader.php))
- Basic database connection and querying ([app/Models/Model.php](app/Models/Model.php))
- Example controllers and views

## Project Structure

```
app/
  Controllers/
    Controller.php
    HomeController.php
    UserController.php
  Models/
    Model.php
    User.php
config/
  database.php
lib/
  Route.php
public/
  .htaccess
  index.php
resources/
  views/
    home.php
routes/
  web.php
autoloader.php
.gitignore
README.md
```

## Getting Started

1. **Clone the repository**  
   Clone this project to your local machine.

2. **Configure the database**  
   Edit [`config/database.php`](config/database.php) with your database credentials.  
   Make sure you have a `users` table for the example queries.

3. **Set up your web server**  
   Point your web server's document root to the `public/` directory.

4. **Access the application**  
   Open your browser and navigate to your local server (e.g., `http://localhost/`).  
   - `/` - Home page  
   - `/about` - About page  
   - `/users` - List all users (JSON)  
   - `/users/first` - Show first user (JSON)  
   - `/group/{groupName}` - Dynamic group page

## How It Works

- **Routing:**  
  Routes are defined in [`routes/web.php`](routes/web.php) using the custom `Route` class.

- **Controllers:**  
  Controllers handle requests and return responses.  
  Example: [`App\Controllers\HomeController`](app/Controllers/HomeController.php)

- **Models:**  
  Models interact with the database.  
  Example: [`App\Models\User`](app/Models/User.php)

- **Views:**  
  Views are PHP files in [`resources/views/`](resources/views/) rendered by controllers.
