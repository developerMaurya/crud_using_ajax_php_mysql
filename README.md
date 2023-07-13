# CRUD using AJAX, PHP, MySQL

This repository demonstrates the implementation of CRUD (Create, Read, Update, Delete) operations using AJAX, PHP, and MySQL. The purpose is to showcase how to perform these operations asynchronously using AJAX calls, along with jQuery, to interact with a MySQL database.

## Requirements

To run this project, you need to have the following:

- Web server (e.g., Apache)
- PHP 5.6 or higher
- MySQL database

## Installation

Follow these steps to set up the project:

1. Clone the repository to your local machine:

```
git clone https://github.com/your-username/crud_using_ajax_php_mysql.git
```

2. Configure the database connection:
   - Open the `config.php` file.
   - Update the database credentials (`DB_HOST`, `DB_USERNAME`, `DB_PASSWORD`, `DB_NAME`) to match your MySQL configuration.

3. Import the database:
   - Create a new MySQL database with the name specified in `DB_NAME`.
   - Import the `database.sql` file into your newly created database. This file contains the necessary table structure.

4. Start the web server:
   - Configure your web server to serve the project from the desired URL.
   - Make sure the server can execute PHP files.

5. Access the application:
   - Open your web browser and visit the URL where the project is hosted.

## Usage

The application provides a simple user interface to perform CRUD operations on a database table. Here's an overview of the available functionalities:

- **Insert**: Click on the "Add New" button to open a modal window. Fill in the required information and click "Save" to add a new record to the database.
- **Display**: The existing records are displayed in a table format on the main page. You can view all the records present in the database.
- **Update or Edit**: Each record in the table has an "Edit" button. Click on it to open the edit modal window, where you can modify the record's information and save the changes.
- **Delete**: To delete a record, click on the "Delete" button corresponding to the desired row. A confirmation dialog will appear, asking for your confirmation before deleting the record.

All these operations are performed asynchronously using AJAX calls and jQuery, ensuring a smooth and responsive user experience.

## Technologies Used

The project utilizes the following technologies:

- HTML and CSS for the user interface
- JavaScript and jQuery for DOM manipulation and AJAX calls
- PHP for server-side scripting
- MySQL for the database management

## Contributing

Contributions are welcome! If you would like to enhance this project or fix any issues, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature/fix.
3. Make the necessary changes.
4. Test your changes thoroughly.
5. Commit and push your branch.
6. Create a pull request detailing the changes you made.

Please ensure your code follows the existing coding style and includes appropriate documentation.

## Image
![image](https://github.com/developerMaurya/crud_using_ajax_php_mysql/assets/137375643/45466676-8d02-4822-8031-3da556b4d5cc)


- This project was inspired by the need to demonstrate CRUD operations using AJAX and PHP.
- Thanks to the contributors who helped improve this project.

If you have any questions or need further assistance, feel free to contact me.
