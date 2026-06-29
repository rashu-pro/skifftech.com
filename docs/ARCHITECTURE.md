# Architecture — Skifftech

> High-level overview of the theme file structure, page templates, CSS/JS
> dependencies, and how the pieces fit together.
>
> **Keep this file updated** whenever a template is added, a URL slug changes,
> or a new SCSS partial or JS dependency is introduced.

---

## Site Overview

| Property       | Value                              |
| -------------- | ---------------------------------- |
| Domain         | skifftech.com                      |
| CMS            | WordPress                          |
| Language       | English                            |
| Theme          | `skifftech` (Underscores/_s based) |
| Custom Fields  | Advanced Custom Fields (ACF)       |
| Page Builder   | Elementor (selective use)          |

---

## Theme File Structure

```
wp-content/themes/skifftech/
│
├── # WordPress template hierarchy
├── index.php
├── page.php
├── single.php
├── archive.php
├── search.php
├── 404.php
├── comments.php
├── sidebar.php
├── header.php
├── header-dcp.php          # Alternate header for DCP Online Control pages
├── footer.php
├── footer-dcp.php          # Alternate footer for DCP Online Control pages
├── functions.php           # Theme setup, enqueues, nav menus, theme supports
│
├── template-pages/         # Custom full-page templates (assigned per page in WP admin)
│   ├── home.php            # Home page
│   ├── home_new.php        # Home page (revised version)
│   └── page-contact.php    # Contact page
│
├── # DCP Online Control standalone pages
├── dcp_online_control_contact_us.php
├── dcp_online_control_privacy_policy.php
├── dcp_online_control_terms_and_conditions.php
│
├── template-parts/         # Reusable content partials (get_template_part())
│   ├── content.php
│   ├── content-page.php
│   ├── content-none.php
│   └── content-search.php
│
├── inc/                    # Theme includes loaded from functions.php
│   ├── template-tags.php   # Custom template tag functions
│   ├── template-functions.php
│   ├── customizer.php      # Theme Customizer additions
│   ├── custom-header.php
│   ├── shortcode.php       # Custom shortcodes
│   └── jetpack.php         # Jetpack compatibility
│
├── sass/                   # SCSS source — edit here, compile to style.css
│   ├── style.scss          # Entry point — imports all partials
│   ├── _variable.scss      # Design tokens: colors, spacing, breakpoints
│   ├── _mixins.scss        # Reusable SCSS mixins
│   ├── _fonts.scss         # Font-face declarations
│   ├── _header.scss
│   ├── _footer.scss
│   ├── _hero_slider.scss
│   ├── _services.scss
│   ├── _button.scss
│   ├── _bg_video.scss      # Background video section
│   ├── _elementor.scss     # Elementor widget overrides
│   ├── _main.scss          # General page/content styles
│   ├── _new-css.scss       # Incremental additions
│   ├── _responsive.scss    # Breakpoint overrides
│   ├── _utility.scss       # Helper/utility classes
│   ├── _animation.scss
│   ├── _animate.scss
│   ├── _animate_full.scss
│   └── _slicknav.scss      # Mobile nav (slicknav)
│
├── css/                    # Vendor/compiled CSS (do not edit directly)
│   ├── bootstrap.min.css
│   ├── font-awesome.min.css
│   ├── swiper.css
│   ├── responsive.css
│   ├── dcp_styles.css      # DCP Online Control specific styles
│   └── fonts/              # Font Awesome webfont files
│
├── js/
│   ├── scripts.js          # Main custom JavaScript
│   ├── navigation.js       # Accessibility nav (keyboard/mobile)
│   ├── plugins.js          # Bundled plugin init
│   ├── customizer.js       # Live Customizer preview JS
│   ├── jquery.min.js
│   ├── typed.min.js        # Typewriter text effect
│   ├── headroom.min.js     # Hide/show header on scroll
│   ├── jQuery.headroom.js
│   ├── jquery.waypoints.js / .min.js  # Scroll-triggered events
│   └── jquery.counterup.min.js        # Animated number counters
│
├── images/                 # Theme-bundled static assets
│   ├── logo_skifftech.png / .jpg
│   ├── banner_home.jpg / banner_laptop.jpg / banner_sketch.jpg / banner_work.jpg
│   ├── bg_get_started_section.jpg / bg_portfolio.jpg
│   ├── office_blurry.mp4   # Background video
│   ├── icon_*.png          # Service icons (web design, dev, mobile, data migration)
│   ├── client_1.jpg
│   ├── portfolio_*.jpg
│   └── portfolios/         # Portfolio source files
│
└── style.css               # Compiled output from sass/style.scss — do not edit directly
```

---

## Page Templates

Custom page templates live in `template-pages/` and are assigned per page in the WordPress admin under **Page Attributes → Template**.

| Template file                 | Purpose                         |
| ----------------------------- | ------------------------------- |
| `template-pages/home.php`     | Home page layout                |
| `template-pages/home_new.php` | Revised home page (active/WIP)  |
| `template-pages/page-contact.php` | Contact page                |

### DCP Online Control Pages

The `dcp_online_control_*.php` files at the theme root are standalone WordPress page templates used for the DCP Online Control product pages. They use `header-dcp.php` and `footer-dcp.php` instead of the standard header/footer.

| Template file                                  | Page                  |
| ---------------------------------------------- | --------------------- |
| `dcp_online_control_contact_us.php`            | DCP — Contact Us      |
| `dcp_online_control_privacy_policy.php`        | DCP — Privacy Policy  |
| `dcp_online_control_terms_and_conditions.php`  | DCP — Terms & Conditions |

---

## CSS Architecture

Styles are authored in SCSS (`sass/`) and compiled to `style.css` via node-sass.

**Entry point:** `sass/style.scss` imports all partials in order.

**Edit flow:**
```
sass/_partial.scss  →  npm run watch / npm run compile:css  →  style.css
```

Vendor CSS (Bootstrap, Font Awesome, Swiper) lives in `css/` and is enqueued separately — do not modify those files.

### Key SCSS Files

| File               | Responsibility                       |
| ------------------ | ------------------------------------ |
| `_variable.scss`   | All design tokens — change colors, spacing, breakpoints here |
| `_mixins.scss`     | Shared SCSS mixins                   |
| `_elementor.scss`  | Override Elementor widget defaults   |
| `_responsive.scss` | All breakpoint-scoped overrides      |

---

## JavaScript Dependencies

All JS is enqueued in `functions.php`. Third-party libraries are bundled in `js/`.

| Library               | File                          | Purpose                            |
| --------------------- | ----------------------------- | ---------------------------------- |
| jQuery                | `js/jquery.min.js`            | DOM / AJAX base                    |
| Typed.js              | `js/typed.min.js`             | Typewriter text animation          |
| Headroom.js           | `js/headroom.min.js`          | Scroll-aware header show/hide      |
| Waypoints             | `js/jquery.waypoints.min.js`  | Scroll-position event triggers     |
| Counter Up            | `js/jquery.counterup.min.js`  | Animated number counters           |
| SlickNav (SCSS)       | `sass/_slicknav.scss`         | Mobile nav styles                  |
| Main script           | `js/scripts.js`               | Custom site-wide JS                |

---

## How a Page Gets Built

```
WordPress Page
     ↓
Page Template (template-pages/*.php)
     ↓
get_template_part() for reusable partials
     ↓
ACF get_field() calls for editable content
     ↓
Elementor (where used) for visual layout blocks
     ↓
Rendered HTML
```

---

## WordPress Configuration Notes

- Permalink structure: `/%postname%/`
- Nav menu location: `Primary` (registered in `functions.php`)
- Theme text domain: `skifftech`
- Languages/POT file: `languages/skifftech.pot`

---

## Decisions & Rationale

| Decision                          | Reason                                                    |
| --------------------------------- | --------------------------------------------------------- |
| Underscores (_s) base theme       | Minimal boilerplate, full control over markup             |
| SCSS with node-sass               | Component-scoped partials, variables for design tokens    |
| Vendor CSS/JS bundled in theme    | Avoids CDN dependency, works fully offline/local          |
| Separate DCP header/footer        | DCP Online Control has distinct branding from main site   |
| `skt_` ACF field prefix           | Avoids collisions with plugins, clearly namespaced        |

---

## Pages

| Page                 | URL Slug     | Template                                  | Status |
| -------------------- | ------------ | ----------------------------------------- | ------ |
| Home                 | `/`          | `template-pages/home.php`                 | —      |
| Contact              | `/contact`   | `template-pages/page-contact.php`         | —      |
| DCP — Contact        | —            | `dcp_online_control_contact_us.php`       | —      |
| DCP — Privacy Policy | —            | `dcp_online_control_privacy_policy.php`   | —      |
| DCP — Terms          | —            | `dcp_online_control_terms_and_conditions.php` | — |

_(Add new pages here as they are built)_
