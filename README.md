# PHP_CRUD_with_DOCKER

A PHP-based CRUD (Create, Read, Update, Delete) application with DOCKER integration for streamlined development and deployment.

## About The Project

This repository contains a PHP CRUD application designed to demonstrate basic database operations using PHP. It includes essential components for development and deployment, such as Docker support and environment configuration, facilitating a DevOps-friendly workflow.

### Key Features

- PHP-based CRUD functionality for managing data records
- Dockerfile included for containerized deployment
- Environment variable support via `.env.sample` file
- Composer dependencies managed for PHP packages
- Simple and clean codebase suitable for learning and extension


## Getting Started

### Prerequisites

- Docker installed on your machine for containerized deployment
- PHP environment (if running locally without Docker)
- Composer for PHP dependency management
- A database server (e.g., MySQL) configured and accessible


### Installation

1. Clone the repository
```bash
git clone https://github.com/soocrates/PHP_CRUD_DEVOPS.git
cd PHP_CRUD_DEVOPS
```

2. Copy `.env.sample` to `.env` and configure your environment variables accordingly.
3. Install PHP dependencies using Composer
```bash
composer install
```

4. Build and run the Docker container (optional)
```bash
docker build -t php_crud_devops .
docker run -p 8080:80 php_crud_devops
```

5. Access the application via `http://localhost:8080` in your web browser.

## Usage

This project serves as a foundation for PHP CRUD operations with integrated DevOps practices. You can:

- Create, read, update, and delete records through the web interface
- Extend the application with additional features or database support
- Use the Docker setup for consistent development and deployment environments


## Project Structure

- `app/` – Contains PHP application code
- `info/` – Additional informational files or documentation
- `.env.sample` – Sample environment configuration file
- `dockerfile` – Docker configuration for containerizing the app
- `composer.json` and `composer.lock` – PHP dependency management files
- `index.html` – Entry point or landing page


## Contributing

Contributions are welcome! Feel free to fork the repository, make improvements, and submit pull requests.
