# Project Overview

## Technologies Used

### Backend

- **PHP 8.2+**
- **Laravel 12**: Modern PHP web framework.
- **Statamic CMS 5**: Flat-file CMS built on Laravel.
- **Composer**: PHP dependency manager.
- **Statamic Addons**:
  - `aryehraber/statamic-logbook`
  - `webographen/statamic-admin-log`
- **Development Tools**:
  - `barryvdh/laravel-debugbar`
  - `laravel/pail`, `laravel/pint`, `laravel/sail`
  - `phpunit/phpunit` for testing
  - `fakerphp/faker`, `mockery/mockery`, `nunomaduro/collision`, `spatie/laravel-ignition`

### Frontend

- **Node.js** (with npm)
- **Vite**: Modern frontend build tool.
- **TailwindCSS**: Utility-first CSS framework.
- **PostCSS**: CSS processing.
- **Alpine.js**: Lightweight JavaScript framework for UI interactions.
- **@tailwindcss/typography**: Tailwind plugin for rich text.

### Other

- **Markdown**: Content format for articles.
- **YAML**: Configuration and content collections.

---

## Project Structure

```plaintext
creolab/
├── app/                # Laravel application code (Http, Models, Providers)
├── bootstrap/          # Laravel bootstrap files
├── config/             # Configuration files (Laravel & Statamic)
│   └── statamic/       # Statamic-specific configs
├── content/            # Statamic content (collections, taxonomies, navigation, etc.)
│   ├── collections/    # Articles, pages, photography, projects (YAML + entries)
│   ├── taxonomies/     # Topics taxonomy
│   └── ...
├── database/           # Database factories, migrations, seeders
├── lang/               # Localization files
├── public/             # Public web root
├── resources/          # Frontend assets & views
│   ├── blueprints/     # Statamic blueprints
│   ├── css/            # TailwindCSS entrypoint (site.css)
│   ├── js/             # Alpine.js entrypoint (site.js)
│   ├── views/          # Antlers templates (Statamic's templating engine)
│   └── ...
├── routes/             # Laravel route definitions
├── storage/            # Laravel/Statamic storage (cache, logs, etc.)
├── tests/              # PHPUnit tests
├── users/              # User data
├── vendor/             # Composer dependencies
├── .editorconfig
├── .gitattributes
├── .gitignore
├── README.md
├── artisan             # Laravel CLI
├── composer.json       # PHP dependencies
├── package.json        # Node.js dependencies
├── postcss.config.js
├── tailwind.config.js
├── vite.config.js
└── ...
```

---

## Notable Features

- **Articles blogging** with topics taxonomy
- **Markdown-focused writing**
- **Dynamic navigation** via pages structure
- **Responsive design** with modern typography (Inter font)
- **Customizable social links**
- **Alpine.js** for lightweight interactivity
- **Lighthouse-optimized** for performance and accessibility

---

For more details, see the `README.md` or explore the directories above.
