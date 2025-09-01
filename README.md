

## REPOSITORY STRUCTURE
```
/cco
│── app/                 # Application logic (Models, Controllers, Middleware, etc.)
│── bootstrap/           # Laravel framework bootstrapping
│── config/              # Configuration files
│── database/            # Migrations, seeders, factories
│── public/              # Entry point (index.php) and assets (CSS, JS, images)
│── resources/           # Views, language files, and raw assets
│── routes/              # Web, API, Console, and Channel route files
│── storage/             # Logs, cache, sessions, and file storage
│── tests/               # Unit and feature tests
│── .editorconfig        # Editor configuration
│── .env.example         # Example environment variables
│── .gitattributes       # Git attributes configuration
│── .gitignore           # Git ignore file
│── README.md            # Project documentation
│── artisan              # Artisan CLI tool
│── composer.json        # PHP dependencies
│── composer.lock        # Composer lock file
│── package.json         # Node dependencies
│── package-lock.json    # Node lock file
│── tailwind.config.js   # Tailwind CSS config
│── phpunit.xml          # PHPUnit config
│── postcss.config.js    # PostCSS config
│── .config.js           # Additional JS configuration
```



## Setting Up the Application from Scratch

Follow these steps to set up and run the application for the first time on a local environment:

---

### **1. Prerequisites**
Ensure you have the following installed on your system:
- PHP >= 8.1
- Composer (dependency manager for PHP)
- Laravel CLI
- MySQL or any other compatible database
- Node.js and npm (for frontend assets, if applicable)

Optional tools:
- MailHog or Mailtrap (for testing email functionality)

---

### **2. Clone the Repository**
Clone the project repository to your local machine:

```bash
git clone <repository-url>
cd <repository-folder>
```
---

### **3. Install Dependencies**
Install PHP with composer and frontend with npm depending.
```bash
composer install
npm install
```

### **4.  Set Up Environment Variables**
a. Copy the .env.example file to create a .env file:

```bash
cp .env.example .env
```

b.  Update the .env file with your local configuration:
	- Database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
	- Mail configuration (MAIL_MAILER, MAIL_HOST, etc.).
	- App-specific settings like APP_URL and APP_NAME.

### **5. Generate Application Key**
Run the following command to generate the application key:
```bash 
php artisan key:generate
```

### **6. Set Up the Database**
1. Create a database in your database management tool (e.g., MySQL Workbench).
2. Update the .env file with your database credentials.
3. Run the migrations and seeders to set up the database structure and initial data:

```bash
php artisan migrate --seed
```

### **6. Run the Application**
```bash 
php artisan serve
```

Visit the application in your browser at http://127.0.0.1:8000.






## Email Debugging and Testing Instructions

This section provides guidance on how to debug and test email functionality in the project during development. Since the `.env` file is not visible in the repository, developers must set up their email configuration locally to test the application's email features.

---

### **1. Configuring the Mail Driver**
The application uses Laravel's mail functionality for sending emails. You can set up your local environment to debug or test email functionality by configuring the `MAIL_MAILER` in your `.env` file.

#### **Options for Configuration**

- ** Currently Logging Emails Locally:**
  Logs the email content in the `storage/logs/laravel.log` file for debugging purposes in development.

```env
	MAIL_MAILER=log #smtp (when its development put smtp)
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=587
	MAIL_USERNAME=your_email@example.com
	MAIL_PASSWORD=your_email_password_or_app_key

	MAIL_ENCRYPTION=tls
	MAIL_FROM_ADDRESS="coilycurlyoffice@gmail.com"
	MAIL_FROM_NAME="The Coily Curly Office"
```


- ** Run commands below sequentially:**
 ONLY If emails do not work as expected, clear caches and configurations by running the commands listed in the [Setup Section](#5-generate-application-key).

	```bash
	
	composer dump-autoload

	php artisan config:clear
	php artisan cache:clear
	php artisan view:clear

	php artisan serve 

	```






