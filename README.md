<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple Web App for User and Task Management

Welcome to the Simple Web App for User and Task Management! This application allows an admin to create users, assign tasks, and export data to Excel. Built using Laravel, this app is designed to simplify user and task management with an intuitive interface.

### Features
- **User Management**: Create and manage users with ease.
- **Task Assignment**: Assign tasks to users and track their status.
- **Data Export**: Export user and task data to Excel for easy sharing and reporting.
- **Pagination**: Efficiently navigate through lists of users and tasks.
- **Validation**: Ensure data integrity with email format validation using jQuery and PHP.

### Technologies Used
- PHP (Laravel)
- jQuery for client-side validation
- MySQL for database management
- PHPExcel for Excel export functionality

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/simple-web-app.git



Navigate to the project directory:
cd simple-web-app



Install dependencies (if using Laravel):
composer install



Set up the database:

Create a MySQL database.
Import the provided SQL file to set up tables and initial data.



Configure the environment:

Rename .env.example to .env.
Update the database credentials in the .env file.



Run the application:

For Laravel:
php artisan serve


For other frameworks, configure your web server to point to the public directory.



Usage
User Management

Add Users: Navigate to the "Add User" form, fill in the user's name, email, and mobile number, and submit the form to create a new user.
View Users: Access the user list to view all added users and use pagination to navigate through the list.

Task Management

Add Tasks: Go to the "Add Task" form, select a user from the dropdown, enter task details, and select the task status (Pending/Done) before submitting the form.
View Tasks: Visit the task list page to see all tasks with user assignments and use pagination to browse through tasks.

Export Data

Click the "Export to Excel" button to download user and task data. The Excel file will contain two sheets: "User" and "Task".

Screenshots

Figure 1: Add User Form
![Screenshot (202)](https://github.com/user-attachments/assets/aecad153-c773-4d7e-b99f-ec60953c8569)

Figure 2: Add Task Form
![Screenshot (201)](https://github.com/user-attachments/assets/d707ba6b-4dd0-4a2e-96cf-4e7a59d03c33)

Figure 3: User List with Pagination
![Screenshot (200)](https://github.com/user-attachments/assets/8e1f424b-391a-4a19-b76d-d09c3e8f25eb)

Figure 4: Task List with User Assignments
![Screenshot (199)](https://github.com/user-attachments/assets/1117f910-97c3-4c86-9a75-efb09e39634a)
Contributing

<h3>Some useful commands</h3>
<h4>In Laravel, you can use the Artisan command-line tool to create various components of your application, such as models, controllers, views, migrations, and more. Here are some important Artisan commands to create files in a Laravel application: </h4>

<h5>You can list all available Artisan commands by running:
php artisan list</h5>

<ol>
    <li> Create a Model
php artisan make:model ModelName</li>
    
<li>Create a Controller
php artisan make:controller ControllerName</li>

<li> Create a Migration
php artisan make:migration create_table_name</li>

<li> Create a Request
php artisan make:request RequestName</li>

<li> Create a Seeder
php artisan make:seeder SeederName</li>

<li> Create a Factory
php artisan make:factory FactoryName</li>

<li> Create a Middleware
php artisan make:middleware MiddlewareName</li>

<li> Create a Policy
php artisan make:policy PolicyName</li>

<li>Create a Command
php artisan make:command CommandName</li>

<li>Create a View
While there is no specific Artisan command to create a view file, you can manually create a view file in the resources/views directory. For example:
touch resources/views/viewName.blade.php</li> 
</ol>
Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.
License
This project is licensed under the MIT License. See the LICENSE file for details.
Thank you for using our Simple Web App for User and Task Management. We hope it meets your needs effectively! If you have any questions or feedback, feel free to reach out.
If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.
