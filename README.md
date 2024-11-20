Student Management System
This project is designed to manage student records. The system stores information about students, including their names, academic level, enrollment status, and payment details.

Database
The database for this project is named student. It contains a single table named students with the following columns:

id (AUTO_INCREMENT, Primary Key): Unique identifier for each student.
Nom_et_prenom (VARCHAR(55)): Stores the student's full name.
niveau (VARCHAR(55)): Stores the academic level or year of study of the student.
inscription (VARCHAR(55)): Stores the enrollment status of the student (e.g., enrolled, graduated, etc.).
Payement (VARCHAR(55)): Stores payment details or status related to the student's fees.

SQL Query to Create the Database and Table
To set up the database, you can run the following SQL queries:

-- Create the database
CREATE DATABASE student;

-- Use the database
USE student;

-- Create the students table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom_et_prenom VARCHAR(55) NOT NULL,
    niveau VARCHAR(55) NOT NULL,
    inscription VARCHAR(55) NOT NULL,
    Payement VARCHAR(55) NOT NULL
);
How to Set Up the Project

1.Clone the repository to your local machine:
git clone <repository-url>
2.Import the student database to your MySQL server using the provided SQL queries.
3.Configure the backend API (if applicable) to connect to the student database.
4.Run the project.

Contributing
Feel free to fork the repository, submit issues, or send pull requests. Contributions are welcome!

