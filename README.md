# 📬 Laravel Quote Sender with Inertia.js & Vue 3

This is a Laravel 12 application that sends a mail to a predefined user (in mailtrap) and logs some message in separate file (storage/logs directory named as active_users.log) using scheduler.

---

## 🛠️ Installation

```bash
# Clone the repository
git clone https://github.com/RejwanAhmed/laravel-email-and-user-activity-scheduler.git
cd laravel-email-and-user-activity-scheduler

# Install backend dependencies
composer install

# Install frontend dependencies
npm install

# Copy and configure environment
cp .env.example .env
php artisan key:generate

# Set your DB and Mail settings in .env
Example:
# DB_DATABASE=email-and-user-activity-scheduler
# DB_PASSWORD=your_db_password

# MAIL_MAILER=smtp
# MAIL_HOST=smtp.mailtrap.io
# MAIL_PORT=2525
# MAIL_USERNAME=your_mailtrap_username
# MAIL_PASSWORD=your_mailtrap_password

# Start Server
php artisan serve

# Start the scheduler
php artisan schedule:work
