
# Simple Blog Website in Laravel

This feature-rich Laravel blog project demonstrates best practices in web development, including a user-friendly admin panel with customizable templates, robust authentication, and comprehensive CRUD operations for posts and static pages. The frontend integration focuses on creating engaging home and post pages, complemented by SEO-friendly URL structures.

## Technologies Used

- Framework: Laravel
- Languages: Core PHP, HTML, CSS, JavaScript
- Database: MySQL

## Live blog website
https://blog.meridukaan.site/

## Features

- Admin Template Setup
- Admin Login Integration
- Post Management
Post List:
Add, Update, Delete:
Status Management:
- Page Management
Page List:
Add, Update, Delete:
Contact List and Status:
- Frontend Integration
Home Page:
Post Page:
Post Slug Integration:

## Installation

Prerequisites
PHP: Ensure that PHP is installed on your machine. You can download and install it from php.net.

Composer: Install Composer, a dependency manager for PHP, from getcomposer.org.

Database: Set up a MySQL, PostgreSQL, or SQLite database and note down the credentials.

Clone the Repository

```bash
  https://github.com/Sapansathawara/simple_blog_in_laravel.git
```
    
Navigate to the Project Directory

```bash
  cd laravel-blog
```

Install Dependencies

```bash
  composer install
```

Copy the Environment File

```bash
  cp .env.example .env
```

Configure the Environment
Open the .env file in a text editor and update the following configurations:

Set the DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD for your database.
Set the APP_KEY by running php artisan key:generate.

Run Migrations

```bash
  php artisan migrate
```

Seed the Database (Optional)
- If you want to populate the database with sample data:

```bash
  php artisan db:seed
```

Start the Development Server

```bash
  php artisan serve
```
Visit http://localhost:8000 in your browser to access the Laravel blog.

## Lessons Learned

The Laravel blog project offered key lessons in designing a user-friendly admin panel, emphasizing the significance of robust authentication, and implementing CRUD operations for posts and static pages. The focus on frontend integration included creating engaging home and post pages, while incorporating SEO-friendly slugs for URLs. Overall, the experience highlighted the importance of continuous testing, thorough documentation, and collaborative development, providing valuable insights for building feature-rich web applications.

## Contributing

- Contributions are welcome. Fork the repository and create a pull request with proposed changes.

## Screenshots

Home page
- A gateway to stylish men's, women's fashion, and cutting-edge electronics.
![front-home-page.png](https://i.postimg.cc/mr3qSNTx/front-home-page.png)

Backend Admin Panel Page
- Efficiently manage and control the blog platform's operations.
![post-page.png](https://i.postimg.cc/5yQD8c0g/post-page.png)
