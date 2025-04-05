
# 🖥️ Run WordPress Locally (Custom Setup)

This repository contains the `wp-content` directory and some core WordPress files (like `wp-login.php`), but **excludes** `wp-admin` and `wp-includes`. To run WordPress locally with this setup, you’ll need to manually download the full WordPress core and combine it with this repo.

---

## 📦 What's Inside This Repo

- `wp-content/` – Includes your custom themes, plugins, uploads, etc.
- Essential WordPress files like:
  - `index.php`
  - `wp-login.php`
  - `wp-config.php` (optional or customized)
- 🚫 `wp-admin/` and `wp-includes/` are **excluded** to keep the repo clean and lightweight.

---

## ⚙️ Requirements

- PHP >= 7.4
- MySQL or MariaDB
- A local web server environment:
  - [LocalWP](https://localwp.com/)
  - [XAMPP](https://www.apachefriends.org/index.html)
  - [MAMP](https://www.mamp.info/en/)
  - Laravel Valet
  - or Docker (see Docker setup below)

---

## 🧰 Local Setup Instructions

### 1. Clone This Repo

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

---

### 2. Download the WordPress Core

- Go to https://wordpress.org/download/
- Extract the ZIP file
- Copy **everything except** the `wp-content` folder into this project directory.

Your final structure should look like this:

```
/your-repo
  ├── wp-admin/          ← from official WordPress download
  ├── wp-includes/       ← from official WordPress download
  ├── wp-content/        ← from this repo (KEEP THIS ONE)
  ├── index.php
  ├── wp-login.php
  ├── wp-config.php (optional)
  └── ...
```

> ⚠️ Make sure you **do not overwrite** the `wp-content` folder from this repo.

---

### 3. Create a Local Database

Create a new MySQL database using your preferred tool (phpMyAdmin, TablePlus, MySQL CLI, etc.).

Example:

```
Database name: wordpress_local
Username: root
Password: (leave blank or set your password)
Host: localhost
```

---

### 4. Set Up `wp-config.php`

If `wp-config.php` is not already provided, copy it from the sample file:

```bash
cp wp-config-sample.php wp-config.php
```

Update the following lines:

```php
define( 'DB_NAME', 'wordpress_local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' ); // Use your local MySQL password
define( 'DB_HOST', 'localhost' );
```

Save and close the file.

---

### 5. Run the Site

Start your local web server and open your browser:

```
http://localhost/your-repo-folder/
```

You’ll be guided through the standard WordPress installation steps.

---

## 🐳 Docker Setup (Optional)

If you prefer to use Docker, here’s a simple setup:

### 1. Create a `docker-compose.yml` file:

```yaml
version: '3.9'

services:
  wordpress:
    image: wordpress:latest
    ports:
      - "8000:80"
    volumes:
      - .:/var/www/html
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_NAME: wordpress
      WORDPRESS_DB_USER: root
      WORDPRESS_DB_PASSWORD: root

  db:
    image: mysql:5.7
    environment:
      MYSQL_DATABASE: wordpress
      MYSQL_ROOT_PASSWORD: root
```

### 2. Run the containers:

```bash
docker-compose up -d
```

Then visit [http://localhost:8000](http://localhost:8000) to install WordPress.

---

## ✅ Notes

- Only the `wp-content` folder and selected files are versioned in this repo.
- This setup is ideal for WordPress theme/plugin development.
- Avoid pushing the full WordPress core to version control.

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 💬 Need Help?

Feel free to open an issue or submit a PR for improvements.
```

---

Let me know if you want this customized for your repo name or with additional instructions (e.g., setting custom themes or plugins).
