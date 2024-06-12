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

### Homepage
![Homepage](/assets/screenshots/home-page.png)

The diagram above shows the homepage of our web application project. The main components include:
- **Make Payment:** The user interface built for patients to make payment through PayPal Sandbox.
- **Login:** Authorized users can login using this button.
- **Register:** New authorized users can register for an account.

### Make Payment
![Make Payment Page](/assets/screenshots/make-payment.png)

The diagram above shows the make payment form for users to enter their Bill ID and payment amount in RM. The submit button will then redirect the users to PayPal Sandbox to complete the payment. Once the payment is completed, the payment information will be stored in the database.

### Registration
![Registration Page](/assets/screenshots/register-page.png)

The diagram above shows the registration page for new authorized users. Users will be prompted to enter their name, email, password, and confirm password.

### Login
![Login Page](/assets/screenshots/login-page.png)

The diagram above shows the login page for returning authorized users. Users will be prompted to enter their registered email and password. Successful authentication will redirect users to the dashboard page.

### Dashboard
![Dashboardd Page](/assets/screenshots/dashboard.png)

The diagram above shows the dashboard page of Clinic Management System. In this page, it displays the table and the data for Suppliers, Medication, Appointment, Bills, and Medical Records.

### Patient
![Patient Information Page](/assets/screenshots/patient.png)

The diagram above shows the patient information. Users may click the + icon to add a new patient or edit icon in the table to edit or remove the patient data.

![Add Patient Page](/assets/screenshots/add-patient.png)

![Edit or Remove Patient Page](/assets/screenshots/edit-remove-patient.png)

### Staff
![Staff Information Page](/assets/screenshots/staff.png)

The diagram above shows the staff information. Users may click the + icon to add a new staff or edit icon in the table to edit or remove the staff data.

![Add Staff Page](/assets/screenshots/add-staff.png)

![Edit or Remove Staff Page](/assets/screenshots/edit-remove-staff.png)

### Item
![Item Information Page](/assets/screenshots/item.png)

The diagram above shows the item information. Users may click the + icon to add a new item or edit icon in the table to edit or remove the item data.

![Add Item Page](/assets/screenshots/add-item.png)

![Edit or Remove Item](/assets/screenshots/edit-remove-item.png)

### Payment

![Payment Information Page](/assets/screenshots/payment.png)

The diagram above shows the payment page which it displays the payment information.

### Medical Records
![Medical Record Information Page](/assets/screenshots/record.png)

The diagram above shows the medical records information. Users may click the + icon to add a new record or edit icon in the table to edit or remove the medical record data.

![Add Medical Record Page](/assets/screenshots/add-record.png)

![Edit or Remove Medical Record Page](/assets/screenshots/edit-remove-record.png)

### Create Appointment
![Add Appointment Page](/assets/screenshots/add-appointment.png)

The diagram above shows the create appointment page. Users will be prompted to enter the date and time requested for appointment, and some notes for the staff.

## Challenge/difficulties to develop the application
1. It is difficult to handle many files</br>
   It is tough to keep track of where everything is, what each file does, and how they all connect. This complexity makes it hard for me to keep the code clean and organized, which in turn makes finding my way around and debugging a pain.
2. File or variable names sometimes mismatch</br>
   When names are not consistent, it causes confusing and hard-to-find errors. This inconsistency makes the code harder to read and maintain, and fixing these issues without proper tools leave my code in a mess.
