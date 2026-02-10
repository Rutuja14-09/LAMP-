🚀 LAMP Stack Deployment on AWS EC2

Project Overview: This project demonstrates the deployment of a full LAMP stack (Linux, Apache, MySQL/MariaDB, PHP) on AWS EC2. The stack is fully functional, allowing dynamic, database-driven web applications to run in a secure cloud environment.

🔹 Key Features

Cloud Deployment: EC2 instance deployed in a public subnet with proper Security Group configuration.

Web Server: Installed and configured Apache HTTPD for serving web pages.

Server-Side Scripting: Integrated PHP 8.x with Apache for dynamic content.

Database: Installed and secured MariaDB (MySQL); created databases and users following security best practices.

Advanced PHP Features: Prepared statements for secure queries

Centralized config file for DB credentials

Error handling and logging

Secure file permissions for production-grade deployment

Browser Verification: PHP pages tested via public EC2 IP to confirm database connection and dynamic content delivery.

🛠️ Technology Stack Component Technology Cloud AWS EC2 OS Amazon Linux 2023 Web Server Apache (httpd) Scripting PHP 8.x Database MariaDB (MySQL compatible) Security Security Groups, user-level DB access

🔹 Architecture

Highlights:

Users access EC2 instance via the Internet

Apache serves PHP applications

PHP connects to MariaDB for data operations

Security Group enforces SSH, HTTP, and MySQL access rules

🔹 Steps Implemented

Launch EC2 instance with public IP in a public subnet

Install Apache and verify HTTP access

Install PHP 8.x and test with phpinfo()

Install MariaDB, create database and user

Connect PHP application to database using mysqli with prepared statements

Test database insert and fetch via browser

Apply best practices: separate config file, file permissions, error handling

🔹 How to Test

Access web server in browser:

http://EC2-Public-IP/index.php

Test database insertion:

http://EC2-Public-IP/insert.php

Fetch database records:

http://EC2-Public-IP/fetch.php

🔹 Outcome

A secure and fully functional LAMP stack running on AWS EC2, demonstrating:

Web hosting and server management

Database connectivity and operations

Cloud infrastructure configuration

Security best practices
