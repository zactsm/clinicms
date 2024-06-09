# Clinic Management System Project

## ER Diagram
![Entity Relationship Diagram of Clinic Management System](/assets/erdfinal.png)

## Sequence Diagram
![Sequence Diagram of Clinic Management System](/assets/sequence.png)

## Project system captured screen and explanation
Pictures here

## What is the challenge/difficulties to develop the application
1. It is difficult to handle many files
2. File or variable names sometimes mismatch

####For group members!

For first time pull:
1. Open VS Code
2. Click 'Source Control' at the left bar
3. Clone Repository
4. Then select your _C:\xampp\htdocs_ directory as target folder
5. Open **clinicms** in File Explorer
6. Click the address bar once, type `CMD` and click Enter
7. Make sure the path is _C:\xampp\htdocs\clinicms>_ in the CMD
8. Run `composer install`
9. Run `copy .env.example .env`
10. Run `php artisan key:generate`

Configuring XAMPP:
1. Make sure the DocumentRoot is as following:
_DocumentRoot "C:/xampp/htdocs/clinicms/public"_
_<Directory "C:/xampp/htdocs/clinicms/public">_
2. Now the _localhost_ URL will bring you to the homepage

To create database and insert the data:
1. Open **clinicms** in File Explorer
2. Click the address bar once, type `CMD` and click Enter
3. Make sure the path is _C:\xampp\htdocs\clinicms>_ in the CMD
4. Run `php artisan migrate` or `php artisan migrate:fresh` to clear the data inside the database
5. Run `php artisan db:seed`

Run this last (needs to run every single time):
1. Run `npm run dev` and do NOT exit CMD to ensure Make Payment runs smoothly.
