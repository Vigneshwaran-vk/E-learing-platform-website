# BridgeLoop – E-Learning Platform

A full-stack e-learning platform built with HTML, CSS, JavaScript, PHP, and MySQL to manage courses, users, and content effectively.

# Project Overview

**BridgeLoop** is a responsive, database-driven e-learning platform that allows:
- Students to register, log in, browse and enroll in courses.
- Admins to manage users, courses, and content.
- Users to access downloadable course materials (PDFs, videos, etc.).

Designed for easy local deployment using **XAMPP**, this project provides the core features of a modern LMS (Learning Management System).

## Tech Stack

| Layer      | Technology         |
|------------|--------------------|
| Frontend   | HTML5, CSS3, JavaScript |
| Backend    | PHP                |
| Database   | MySQL (via XAMPP)  |
| Server     | Apache (XAMPP)     |
| Tools      | Git, GitHub, phpMyAdmin |

---

# Features

- Secure student registration & login
- View and enroll in courses
- Personalized student dashboard
- Downloadable learning resources
- Admin portal for managing courses & users
- Responsive design for mobile and desktop

# Setup Instructions (Using XAMPP)

1. **Download and install XAMPP:**  
   [https://www.apachefriends.org](https://www.apachefriends.org)

2. **Place your project** in the `htdocs` folder:  


3. **Start Apache and MySQL** via XAMPP Control Panel.

4. **Set up the database:**
- Go to `http://localhost/phpmyadmin`
- Create a database named `bridgeloop`
- Import the provided `bridgeloop.sql` file (if available)

5. **Open the project in browser:**

# Example Database Schema:

**Database:** `bridgeloop`

# Tables:
- `users` (id, name, email, password, role)
- `courses` (id, title, description, file_path)
- `enrollments` (id, user_id, course_id)

*(Make sure to use hashed passwords in PHP)*

# Screenshots

> Add screenshots here for:
> - Home page
> - Course listing
> - Student dashboard
> - Admin dashboard

💡 *Bridge the gap in learning with BridgeLoop — Learn. Grow. Succeed.*


