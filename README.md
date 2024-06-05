# Clinic Management System Project

## ER Diagram
![Entity Relationship Diagram of Clinic Management System](/assets/erdfinal.png)

## Sequence Diagram
![Sequence Diagram of Clinic Management System](/assets/sequence.png)

#### For group members!

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

To create database and insert the data

1. Run `php artisan migrate` or `php artisan migrate:fresh` to clear the data inside the database
2. Run `php artisan db:seed`

Run this last

Run `npm run dev` to ensure Make Payment runs smoothly.
