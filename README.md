# Laravel and ReactJS Docker Setup

This project sets up a Laravel backend and a ReactJS frontend using Docker. It also includes MySQL and phpMyAdmin for database management.

## Prerequisites

- Docker
- Docker Compose

## Project Structure

```
laravel-react-docker/
│
├── backend/               # Laravel application
│   ├── Dockerfile
│   ├── php.ini
│   ├── .env
│   └── ...                # Laravel application files
│
├── frontend/              # ReactJS application
│   ├── Dockerfile
│   └── ...                # ReactJS application files
│
├── docker-compose.yml     # Docker Compose configuration
└── README.md              # This file
```

## Getting Started

Follow these steps to set up and run the project:

### 1. Clone the Repository

Clone the repository to your local machine:

```sh
git clone https://github.com/yourusername/laravel-react-docker.git
cd laravel-react-docker
```

### 2. Build and Start Containers

Build and start the Docker containers using Docker Compose:

```sh
docker-compose up --build
```

This command will:

- Build the Docker images for the Laravel and ReactJS applications.
- Start the containers for Laravel (`backend`), ReactJS (`frontend`), MySQL (`db`), and phpMyAdmin (`phpmyadmin`).

### 3. Access the Applications

- **Laravel Application:** Open your web browser and go to `http://localhost:9000`.
- **ReactJS Application:** Open your web browser and go to `http://localhost:3000`.
- **phpMyAdmin:** Access phpMyAdmin at `http://localhost:8080` to manage your MySQL database.

### 4. Configure Laravel

Ensure the `.env` file in the `backend` directory is correctly configured to connect to the MySQL database:

```dotenv
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=laravelpassword
```

### 5. Run Laravel Migrations (if needed)

If you need to run Laravel migrations, use the following command:

```sh
docker-compose exec backend php artisan migrate
```

### 6. Stopping the Containers

To stop the running containers, use:

```sh
docker-compose down
```

This command will stop and remove all the containers created by Docker Compose.

## Troubleshooting

- **Cannot connect to the MySQL database:** Ensure that the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` settings in the Laravel `.env` file match the environment variables set in `docker-compose.yml`.
- **Permissions issues:** If you encounter permission issues, check that the files in your project directory have the appropriate permissions.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request. For more details on contributing, please refer to the [CONTRIBUTING.md](CONTRIBUTING.md) file.
