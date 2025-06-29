# MVC Framework from Scratch (PHP)

This project is a simple Model-View-Controller (MVC) framework built from scratch in PHP. It demonstrates the core concepts of MVC architecture, routing, controllers, models, and views, providing a foundation for building PHP web applications.

## Features

- Custom routing system ([lib/Route.php](lib/Route.php))
- MVC structure with controllers, models, and views
- Simple autoloader for class files ([autoloader.php](autoloader.php))
- **Mini ORM:** Models define their table schema and name; tables are auto-created on startup
- Basic database connection and querying ([app/Models/Model.php](app/Models/Model.php))
- Example controllers and views
- **Dockerized:** Easily run the app and database with Docker Compose

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
migrate.php
.gitignore
README.md
```

## Getting Started

### 1. **Clone the repository**  
Clone this project to your local machine.

### 2. **Configure the database**  
No manual setup needed! The database and tables are created automatically using Docker and the mini ORM.

### 3. **Define your Models (Mini ORM)**  
Each model that extends `Model` can define:
- `public static $tableName` — the table name in the database
- `public static $schema` — an array describing the columns and their types

Example:
```php
class User extends Model {
    public static $tableName = "users";
    public static $schema = [
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'name' => 'VARCHAR(255) NOT NULL',
        'email' => 'VARCHAR(255) NOT NULL'
    ];
}
```
On startup, the `migrate.php` script will automatically create the `users` table with these columns if it does not exist.

### 4. **Run with Docker Compose**  
Make sure you have Docker and Docker Compose installed.

Build and start the containers:
```sh
docker-compose up --build
```
- This will start both the PHP/Apache app and a MySQL database.
- The app will wait for the database, run migrations (auto-create tables), and then start serving requests.

### 5. **Access the application**  
Open your browser and go to [http://localhost:8080](http://localhost:8080)

- `/` - Home page  
- `/about` - About page  
- `/users` - List all users (JSON)  
- `/users/first` - Show first user (JSON)  
- `/group/{groupName}` - Dynamic group page

### 6. **Connect to MySQL from your host**  
You can connect with any MySQL client:
- **Host:** `localhost`
- **Port:** `3306`
- **User:** `root`
- **Password:** `secret`
- **Database:** `mvc_db`

## How It Works

- **Routing:**  
  Routes are defined in [`routes/web.php`](routes/web.php) using the custom `Route` class.

- **Controllers:**  
  Controllers handle requests and return responses.  
  Example: [`app/Controllers/HomeController.php`](app/Controllers/HomeController.php)

- **Models (Mini ORM):**  
  Models define their schema and table name.  
  On startup, `migrate.php` scans all models and creates tables as needed.

- **Views:**  
  Views are PHP files in [`resources/views/`](resources/views/) rendered by controllers.
