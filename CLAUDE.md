# Skifftech — WordPress Website

**Organization:** Skifftech  
**Website:** skifftech.com  
**Language:** English

---

## Project Overview

WordPress website for Skifftech, a technology company/agency.  
Custom theme built on the Underscores (_s) starter. Layouts built with Elementor; custom fields managed with ACF. Custom sections/blocks live in the `botlab-sections` plugin.

---

## Stack

| Layer             | Tool                                           |
| ----------------- | ---------------------------------------------- |
| CMS               | WordPress                                      |
| Theme             | `skifftech` (Underscores/_s starter)           |
| Custom Fields     | Advanced Custom Fields (ACF)                   |
| Page Builder      | Elementor                                      |
| Forms             | Contact Form 7                                 |
| SEO               | Yoast SEO                                      |
| CSS Preprocessor  | SCSS → node-sass                               |
| Linting           | `@wordpress/scripts` (stylelint, eslint)       |
| Custom Plugin     | `botlab-sections` (`plugins/botlab-sections/`) |

---

## Project Structure

```
wp-content/themes/skifftech/
├── style.css              # Compiled CSS — do not edit directly, edit SCSS sources
├── style-rtl.css          # RTL stylesheet (auto-generated)
├── functions.php          # Theme setup, enqueues, hooks
├── sass/                  # SCSS source files
└── js/                    # JavaScript source files

wp-content/plugins/botlab-sections/
└── ...                    # Custom sections/blocks (tracked in git)
```

---

## Build Commands

Run from `wp-content/themes/skifftech/` (install deps first: `npm install`):

| Command               | What it does                                    |
| --------------------- | ----------------------------------------------- |
| `npm run watch`       | Watch `sass/` and recompile `style.css` on save |
| `npm run compile:css` | One-shot SCSS compile + stylelint autofix       |
| `npm run compile:rtl` | Regenerate `style-rtl.css` from `style.css`     |
| `npm run lint:scss`   | Lint all `.scss` files                          |
| `npm run lint:js`     | Lint all `.js` files in `js/`                   |

---

## Key Conventions

- Edit SCSS in `sass/` — never edit `style.css` directly
- ACF field IDs are prefixed with `skt_` (e.g. `skt_hero_title`)
- Custom sections/blocks are registered in `plugins/botlab-sections/`
- Do NOT edit WordPress core files or any third-party plugin/theme files

### ACF Usage

```php
// Text / basic field
$value = get_field( 'skt_field_name' );

// Image field (returns array)
$image = get_field( 'skt_image_field' );
// $image['url'], $image['alt'], $image['sizes']['thumbnail']

// Repeater field
if ( have_rows( 'skt_repeater' ) ) :
    while ( have_rows( 'skt_repeater' ) ) : the_row();
        $item = get_sub_field( 'skt_item_title' );
    endwhile;
endif;
```

---

## Pages

| Page | Template | Status |
| ---- | -------- | ------ |

_(Add pages here as they are built)_

---

## Design System

| Token          | Value |
| -------------- | ----- |
| Primary color  | —     |
| Secondary color| —     |
| Font           | —     |

_(Fill in once design tokens are finalized)_

---

## Out of Scope

- No direct edits to WordPress core files
- No inline styles — use SCSS
- No edits to third-party plugin or theme files
