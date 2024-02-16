
# ArtEgre

Welcome to ArtEgre, a digital platform dedicated to merging the ancient with the modern in the world of art. Our mission is to bring the wonders of ancient civilizations into the contemporary digital era, making it accessible and engaging for everyone.

## Getting Started

To get started with ArtEgre, clone this repository to your local machine:

```bash
git clone https://github.com/ArtFe-01/ArtEgre.git
```

### Prerequisites

Before you begin, ensure you have the following installed on your system:
- PHP 8.0 or higher (as Laravel 10 requires PHP 8.0+)
- Node.js 12.x or higher
- MySQL 5.7 or higher
- Composer for managing PHP dependencies

### Installation

Follow these steps to set up your development environment:

1. Install PHP dependencies:

```bash
composer install
```

2. Install JavaScript dependencies:

```bash
npm install
```

3. Create a copy of `.env.example` and rename it to `.env`, then configure your environment variables:

```bash
cp .env.example .env
```

4. Generate an application key:

```bash
php artisan key:generate
```

5. Run the migration and seed the database:

```bash
php artisan migrate --seed
```

6. Start the development server:

```bash
php artisan serve
```

## Usage

After installation, open your web browser and navigate to `http://localhost:8000` to view the application. Explore ancient art collections, upload new pieces, and share your discoveries with the world.

## Contributing

We welcome contributions from everyone. Please read our CONTRIBUTING.md for details on our code of conduct and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgments

- Hat tip to anyone whose code was used
- Inspiration
- etc
