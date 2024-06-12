# Clinic Management System Project

## Group members
| Name  | Matric No. |
| ------------- | ------------- |
| MUAZZAM HAZMI BIN SUKHAIMI  | 2219361  |
| MIRZA DARWISY BIN MAHAZIR  | 2218867  |
| NOR AISYAH BINTI AMRAN | 2129950  |
| member 4  | XXXXXXX  |
| member 5  | XXXXXXX  |

## Introduction
No matter the size of the clinic, efficient patient data management is essential to the smooth operation of today's fast-paced healthcare environment. Small clinics are looking to technology solutions to improve their operations as a result of the growing need for more efficient procedures and better patient care. Establishing an extensive clinic database system is one such remedy. In this project, we aim to create a system that will accommadate various functions that will smoothen the process of healthcare facilities.

## Objective
The goal of this project is to create a solid clinic database system designed with small clinics in mind. The goal of this system is to maintain inventory, manage staff, schedule appointments, digitize patient data, and consolidate other clinic administration functions. The system aims to enhance the quality of patient care by streamlining workflows, improving data accuracy, and offering a uniform platform for managing essential clinic tasks. Some of the targeted functionalities are patient records, staff information, appointment management, and supplier management.


## Features and Functionalities
1. Patient Management:
- Register, update, and track patient details.
- Maintain a detailed patient history.

2. Appointment Scheduling:
- Schedule, manage, and update appointments.
- Calendar view for easy tracking.
  
3. Medical Records:
- Store and access detailed patient medical histories.
- Secure management of medical records.

4. Staff Management:
- Handle staff roles, schedules, and duties.
- Ensure proper staff allocation.

5. Billing:
- Generate and manage patient bills.
- Track payments and provide detailed billing statements.

6. Inventory Management:
- Track inventory of medical supplies.
- Manage orders, usage, and restocking of supplies.
- Ensure availability of necessary medical equipment.

## ER Diagram
![Entity Relationship Diagram of Clinic Management System](/assets/erdfinal.png)

## Sequence Diagram
![Sequence Diagram of Clinic Management System](/assets/sequence.png)

## Project system captured screen and explanation
Pictures here

## Challenge/difficulties to develop the application
1. It is difficult to handle many files</br>
   It is tough to keep track of where everything is, what each file does, and how they all connect. This complexity makes it hard for me to keep the code clean and organized, which in turn makes finding my way around and debugging a pain.
2. File or variable names sometimes mismatch</br>
   When names are not consistent, it causes confusing and hard-to-find errors. This inconsistency makes the code harder to read and maintain, and fixing these issues without proper tools leave my code in a mess.

<p align="center">
-------------------- **End of Clinic Management System Project Report** --------------------
</p>

> [!IMPORTANT]
> For group members!

### **For first time pull:**
1. Open VS Code
2. Click 'Source Control' at the left bar
3. Clone Repository
4. Then select your _C:\xampp\htdocs_ directory as target folder
5. Open **clinicms** in File Explorer
6. Click the address bar once, type `CMD` and click Enter
7. Make sure the path is _C:\xampp\htdocs\clinicms>_ in the CMD
8. Install composer for `autoload.php`
   ```
   composer install
   ```
10. Configure `.env` file
    ```
    copy .env.example .env
    ```
12. Generate new unique key
    ```
    php artisan key:generate
    ```

### **Create database and insert the data:**
1. Open **clinicms** in File Explorer
2. Click the address bar once, type `CMD` and click Enter
3. Make sure the path is _C:\xampp\htdocs\clinicms>_ in the CMD
4. Run migrate command or fresh migrate command
   ```
   php artisan migrate
   ```
   > If the database 'clinicms' does not exist on the 'mysql' connection, click Enter to create one

   or
   ```
   php artisan migrate:fresh
   ```
6. Seed the database
   ```
   php artisan db:seed
   ```

### **Install Vite Plugin:**
1. Run (once)
   ```
   npm install
   npm install vite laravel-vite-plugin
   ```
2. Run (everytime)
   ```
   npm run dev
   ```

### **Configure XAMPP:**
1. Make sure the Apache DocumentRoot is as following:<br />
   ```
   ...
   DocumentRoot "C:/xampp/htdocs/clinicms/public"
   <Directory "C:/xampp/htdocs/clinicms/public">
   ...
   ```
2. Now the _localhost_ URL will bring you to the homepage
