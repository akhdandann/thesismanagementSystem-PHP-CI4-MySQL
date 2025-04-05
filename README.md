# Thesis Revision Management System – CodeIgniter 4

A role-based web application for managing student thesis uploads and revisions. Built with CodeIgniter 4, this system streamlines the revision workflow between students and teachers, complete with secure login, file validation, and email notifications.

## 👥 User Roles

- **Student**: Upload, edit, delete thesis files (PDF only), track revision status.
- **Teacher**: Review, accept/reject student submissions, download files.
- **Admin**: Manage users and oversee system operations (if implemented).

## 🔐 Authentication Features

- Login with cookie-based “Remember Password” (30 days)
- Role-based dashboard redirection
- Pop-up alerts for invalid or missing credentials
- “Forgot Password” with reset email link

## 📁 Thesis Document Workflow

- Upload document (title, description, PDF file)
- Validate for required fields and file format
- File stored in MySQL (via phpMyAdmin)
- Teacher notified via email upon new upload
- Teacher can accept or decline revision
- Student gets notified of teacher's response
- Status updates from “Waiting for acceptance” → “Already accepted”

## 🛠 Tech Stack

- **Backend**: PHP (CodeIgniter 4)
- **Frontend**: HTML, CSS, Bootstrap
- **Database**: MySQL (phpMyAdmin)
- **Email**: SMTP integration (for reset & revision notifications)

## 💡 Setup Instructions

```bash
# Clone this repo
git clone https://github.com/your-username/your-repo-name.git

# Run in local server (XAMPP/Laragon/etc.)
php spark serve

# Import SQL via phpMyAdmin
```
## 📬 Demo Video
[Watch the demo here](https://www.youtube.com/watch?v=FkGMBQeU94E)
- The demo video is in Bahasa Indonesia, so please turn on the automated translation caption to help you to understand the demo video.
# Thesis Revision Management System – CodeIgniter 4

A role-based web application for managing student thesis uploads and revisions. Built with CodeIgniter 4, this system streamlines the revision workflow between students and teachers, complete with secure login, file validation, and email notifications.

## 👥 User Roles

- **Student**: Upload, edit, delete thesis files (PDF only), track revision status.
- **Teacher**: Review, accept/reject student submissions, download files.
- **Admin**: Manage users and oversee system operations (if implemented).

## 🔐 Authentication Features

- Login with cookie-based “Remember Password” (30 days)
- Role-based dashboard redirection
- Pop-up alerts for invalid or missing credentials
- “Forgot Password” with reset email link

## 📁 Thesis Document Workflow

- Upload document (title, description, PDF file)
- Validate for required fields and file format
- File stored in MySQL (via phpMyAdmin)
- Teacher notified via email upon new upload
- Teacher can accept or decline revision
- Student gets notified of teacher's response
- Status updates from “Waiting for acceptance” → “Already accepted”

## 🛠 Tech Stack

- **Backend**: PHP (CodeIgniter 4)
- **Frontend**: HTML, CSS, Bootstrap
- **Database**: MySQL (phpMyAdmin)
- **Email**: SMTP integration (for reset & revision notifications)

## 💡 Setup Instructions

```bash
# Clone this repo
git clone https://github.com/your-username/your-repo-name.git

# Run in local server (XAMPP/Laragon/etc.)
php spark serve

# Import SQL via phpMyAdmin
```
## 📬 Demo Video
[Watch the demo here](https://www.youtube.com/watch?v=FkGMBQeU94E)
- The demo video is in Bahasa Indonesia, so please turn on the automated translation caption to help you to understand the demo video.
