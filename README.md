# PHP + Docker — Sample Project

## What this is
A minimal PHP app configured to run inside Docker (Apache + PHP). Uses `docker-compose` for convenience and a bind mount so you can edit code locally and see changes inside the container immediately.

## Files
- `Dockerfile` — builds image from `php:8.2-apache` and copies the `src/` files.
- `docker-compose.yml` — launches the `php` service and maps port `8080` on your host to port `80` in the container.
- `src/index.php` — sample PHP page.
- `php.ini` — small PHP config snippet (tweaks errors & memory).
- `.dockerignore` — files to exclude from Docker build context.

## Prerequisites
- Docker Engine installed
- Docker Compose (modern Docker uses `docker compose` command)
- A terminal (Linux/macOS/Windows PowerShell)

## Quick start (recommended)
1. Open a terminal and `cd` into this project directory.
```bash
cd php-docker-sample
docker compose up --build -d
```
2. Open your browser: http://localhost:8080
3. To stop and remove containers:
```bash
docker compose down
```

## Alternative: Docker CLI without compose
```bash
docker build -t my-php-app .
docker run -p 8080:80 -v $(pwd)/src:/var/www/html my-php-app
```
On Windows PowerShell replace `$(pwd)` with `${PWD}` or use an absolute path:
```powershell
docker run -p 8080:80 -v ${PWD}\src:/var/www/html my-php-app
```

## Notes & next steps
- **Live code changes** happen because `docker-compose` mounts `./src` into the container. For production you typically copy files into the image instead of mounting.
- To use **Composer** inside Docker, you can either install composer in the image or run a Composer container: `docker run --rm -v $(pwd):/app composer create-project laravel/laravel myapp`.
- To add **MySQL** and PHP-FPM + Nginx for a more production-like setup, see the optional snippets in the assistant message (or ask me and I'll add a full docker-compose with DB + php-fpm + nginx).

## Troubleshooting
- If port `8080` is in use, change the left-hand side in `ports` (e.g. `9090:80`).
- On permission issues with volumes, check your host OS Docker/WSL settings (Windows/macOS may require enabling file sharing for the project folder).
"# phpDocker" 
"# phpDocker" 
