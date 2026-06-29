# Skifftech — WordPress Website

WordPress website for [Skifftech](https://skifftech.com), a technology company/agency.  
Custom theme built on Underscores (_s). Layouts built with Elementor where needed; custom fields managed with ACF.

---

## Tech Stack

| Layer            | Tool                                          |
| ---------------- | --------------------------------------------- |
| CMS              | WordPress                                     |
| Theme            | `skifftech` (Underscores/_s)                  |
| Custom Fields    | Advanced Custom Fields (ACF)                  |
| Page Builder     | Elementor                                     |
| Forms            | Contact Form 7                                |
| SEO              | Yoast SEO                                     |
| CSS Preprocessor | SCSS → node-sass                              |
| Linting          | `@wordpress/scripts` (stylelint, eslint)      |
| Local Dev        | Laragon                                       |

---

## Local Development Setup

### Prerequisites

- [Laragon](https://laragon.org/) with Apache + MySQL + PHP
- Node.js (for theme SCSS compilation)

### Getting started

1. Clone the repo into your Laragon `www` directory:
   ```
   git clone <repo-url> skifftech.com
   ```

2. Create the database in Laragon (or phpMyAdmin):
   ```
   Database name: skifftech.com
   ```

3. Copy `wp-config-sample.php` to `wp-config.php` and fill in your local DB credentials:
   ```php
   define( 'DB_NAME',     'skifftech.com' );
   define( 'DB_USER',     'root' );
   define( 'DB_PASSWORD', '' );
   define( 'DB_HOST',     'localhost' );
   ```

4. Import the database from the latest backup (via All-in-One WP Migration or a SQL dump).

5. Install theme Node dependencies:
   ```bash
   cd wp-content/themes/skifftech
   npm install
   ```

6. Start compiling SCSS:
   ```bash
   npm run watch
   ```

---

## Theme Build Commands

Run from `wp-content/themes/skifftech/`:

| Command               | What it does                                    |
| --------------------- | ----------------------------------------------- |
| `npm run watch`       | Watch `sass/` and recompile `style.css` on save |
| `npm run compile:css` | One-shot compile + stylelint autofix            |
| `npm run compile:rtl` | Regenerate `style-rtl.css`                      |
| `npm run lint:scss`   | Lint all `.scss` files                          |
| `npm run lint:js`     | Lint all `.js` files                            |

> **Never edit `style.css` directly.** All styles are authored in `sass/` and compiled.

---

## Project Structure

```
skifftech.com/
├── wp-content/
│   ├── themes/
│   │   └── skifftech/          # Custom theme — only tracked item in themes/
│   │       ├── sass/           # SCSS source files (edit here)
│   │       ├── template-pages/ # Custom page templates
│   │       ├── js/             # Theme JavaScript
│   │       └── functions.php
│   └── plugins/
│       └── botlab-sections/    # Custom sections plugin (tracked in git)
├── docs/
│   ├── ARCHITECTURE.md         # Theme structure, page templates, JS/CSS dependencies
│   └── DESIGN-SYSTEM.md        # Color tokens, typography, components
└── README.md
```

WordPress core, third-party plugins, and theme assets (uploads, cache) are excluded from git. See `.gitignore` for full details.

---

## Key Conventions

- Edit SCSS in `sass/` — never touch `style.css` directly
- ACF field IDs are prefixed with `skt_` (e.g. `skt_hero_title`)
- Custom sections/blocks live in `plugins/botlab-sections/`
- Do not edit WordPress core or third-party plugin files

---

## Documentation

| File | Contents |
| --- | --- |
| [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md) | Full theme file tree, page templates, JS/CSS dependency map |
| [`docs/DESIGN-SYSTEM.md`](docs/DESIGN-SYSTEM.md) | Color tokens, typography, buttons, cards, motion |
