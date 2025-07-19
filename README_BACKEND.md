# NBAC Login & Registration System - Backend

A complete PHP-based authentication system with user registration, login, and admin management features.

## Features

- **User Registration**: Secure user registration with validation
- **User Login**: Secure authentication with session management
- **Admin Panel**: Manage user accounts (restrict, activate, deactivate)
- **AJAX Integration**: Smooth user experience with AJAX requests
- **Data Validation**: Both client-side and server-side validation
- **Security**: Password hashing, SQL injection prevention, XSS protection
- **Responsive Design**: Works on all devices

## File Structure

```
edu1/
├── config/
│   └── database.php          # Database configuration and connection
├── includes/
│   └── functions.php         # Utility functions and validation
├── LogIn & Register.php      # Main login/register page
├── login.php                 # Login handler
├── register.php              # Registration handler
├── logout.php                # Logout handler
├── dashboard.php             # User dashboard
├── admin.php                 # Admin panel
├── script.js                 # Frontend JavaScript with AJAX
├── style.css                 # Styling
└── README_BACKEND.md         # This file
```

## Database Setup

1. Create a MySQL database named `nbac_db`
2. The system will automatically create the `users` table with the following structure:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status ENUM('active', 'inactive', 'restricted') DEFAULT 'active'
);
```

## Configuration

Update the database connection details in `config/database.php`:

```php
$host = 'localhost';
$dbname = 'nbac_db';
$username = 'root';
$password = 'password';
```

## Installation

1. **Database Setup**:
   ```bash
   mysql -u root -p
   CREATE DATABASE nbac_db;
   ```

2. **File Permissions**:
   Ensure your web server has read/write permissions to the project directory.

3. **Web Server**:
   - Place all files in your web server directory
   - Ensure PHP is installed and configured
   - Make sure PDO MySQL extension is enabled

## Usage

### User Registration
1. Navigate to `LogIn & Register.php`
2. Click "Sign Up" to switch to registration form
3. Fill in name, email, and password (minimum 8 characters)
4. Click "Sign Up" button
5. System validates input and creates account

### User Login
1. Enter email and password
2. Click "Sign In" button
3. System validates credentials and creates session
4. Redirects to dashboard on success

### Admin Panel
1. Login to the system
2. Click "Admin Panel" button in dashboard
3. View all registered users
4. Manage user status:
   - **Activate**: Enable user account
   - **Deactivate**: Disable user account
   - **Restrict**: Block user from logging in

## Security Features

- **Password Hashing**: Uses PHP's `password_hash()` with bcrypt
- **SQL Injection Prevention**: Uses prepared statements
- **XSS Protection**: Input sanitization with `htmlspecialchars()`
- **Session Security**: Secure session management
- **Input Validation**: Server-side validation for all inputs
- **CSRF Protection**: Form-based protection (can be enhanced)

## Validation Rules

### Registration
- **Name**: Minimum 2 characters, letters and spaces only
- **Email**: Valid email format, must be unique
- **Password**: Minimum 8 characters

### Login
- **Email**: Valid email format
- **Password**: Required field

## API Endpoints

### POST /register.php
Registers a new user.

**Parameters**:
- `name` (string): User's full name
- `email` (string): User's email address
- `password` (string): User's password

**Response**:
```json
{
    "success": true/false,
    "message": "Success/error message",
    "data": null
}
```

### POST /login.php
Authenticates a user.

**Parameters**:
- `email` (string): User's email address
- `password` (string): User's password

**Response**:
```json
{
    "success": true/false,
    "message": "Success/error message",
    "data": {
        "user_id": 1,
        "user_name": "John Doe",
        "user_email": "john@example.com"
    }
}
```

## Error Handling

The system provides comprehensive error handling:

- **Database Errors**: Logged and user-friendly messages displayed
- **Validation Errors**: Specific error messages for each field
- **Authentication Errors**: Clear feedback for login failures
- **Account Status**: Handles restricted/inactive accounts

## Customization

### Adding New Validation Rules
Edit `includes/functions.php` to add custom validation functions.

### Modifying User Status
The system supports three user statuses:
- `active`: Normal user access
- `inactive`: Account disabled
- `restricted`: Account blocked by admin

### Styling
Modify `style.css` to customize the appearance.

## Troubleshooting

### Common Issues

1. **Database Connection Error**:
   - Check database credentials in `config/database.php`
   - Ensure MySQL service is running
   - Verify database `nbac_db` exists

2. **AJAX Not Working**:
   - Check browser console for JavaScript errors
   - Ensure SweetAlert2 is loaded
   - Verify PHP files are accessible

3. **Session Issues**:
   - Check PHP session configuration
   - Ensure cookies are enabled
   - Verify session directory permissions

### Debug Mode
To enable debug mode, add this to the top of PHP files:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## Browser Compatibility

- Chrome (recommended)
- Firefox
- Safari
- Edge
- Internet Explorer 11+

## Dependencies

- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or higher
- **SweetAlert2**: For notifications (loaded via CDN)
- **Font Awesome**: For icons (loaded via CDN)

## License

This project is for educational purposes. Feel free to modify and use as needed.

## Support

For issues or questions, check the troubleshooting section above or review the code comments for implementation details. 