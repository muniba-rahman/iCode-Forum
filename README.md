# iCode Forum - Your Ultimate Coding Community

Welcome to the iCode Forum GitHub repository! iCode Forum is a dynamic web application designed to serve as a vibrant community for coding enthusiasts. This comprehensive README provides you with all the necessary information to set up and use this project effectively.

## Table of Contents
- [Introduction](#introduction)
- [Key Features](#key-features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Introduction

iCode Forum is a web-based platform for developers and coding enthusiasts to discuss, ask questions, and share solutions related to various coding categories. It offers a dynamic and interactive user experience, including features such as user sign-up, login, and thread creation. The project is built using HTML, CSS, PHP, and MySQL to ensure a secure and seamless coding community.

## Key Features

- **Dynamic Forum**: Discover a variety of coding categories, including Python, CSS, HTML, Flask, and more.
- **User Management**: A user-friendly interface for account management, enabling sign-up, login, and logout functionality.
- **Data Management**: PHP and MySQL backend to efficiently manage and retrieve categories, threads, and user data.
- **Security**: User passwords are securely hashed and stored in the database.
- **Intuitive Workflow**: Seamlessly navigate through the platform from the home page to specific category threads and user interactions.
- **Community Interaction**: Post questions, and answers, and engage in discussions within a secure environment.
- **Contact Page**: Share your feedback and suggestions without the need for login, ensuring open communication.

## Installation

To set up and run the iCode Forum project locally, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/muniba-rahman/iCode-Forum.git
   ```

2. Make sure you have a web server (e.g., Apache) and a MySQL database set up.

3. Import the database structure from the `database.sql` file into your MySQL database.

4. Configure the database connection in the `config.php` file by updating the database host, username, password, and database name.

5. Open your web server and access the project through the web browser. The homepage will be your entry point.

## Usage

Once you've set up iCode Forum, you can start using the platform:

- Explore coding categories on the homepage.
- Select a category to view related threads and discussions.
- Sign up or log in to participate in the forum.
- Post questions or answers to existing threads.
- Share your feedback on the Contact page.

## Project Structure

The project structure is organized as follows:

- `index.php`: The homepage that displays coding categories.
- `threads.php`: Displays threads related to selected categories.
- `login.php`: User login page.
- `signup.php`: User sign-up page.
- `postquestion.php`: Page for posting questions.
- `postanswer.php`: Page for posting answers.
- `contact.php`: Contact page for user feedback.
- `config.php`: Configuration file for database connection.
- `database.sql`: SQL file for database structure.
- `css/`: CSS stylesheets.
- `img/`: Images used in the project.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL

## Contributing

We welcome contributions to the iCode Forum project. If you'd like to contribute, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License. For more details, please refer to the [LICENSE](LICENSE) file.

Join the iCode Forum community and enhance your coding journey in a secure and dynamic environment. We look forward to your contributions and suggestions!
