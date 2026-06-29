# Design System — Skifftech

> All values extracted from `designs/skiff-homepage-v6.html`.
>
> **Keep this file updated** whenever a color, spacing value, font, or component
> changes in the design file or in `sass/_variable.scss`.

---

## Color Tokens

All tokens are defined in `:root` and live in `sass/_variable.scss`.

```css
:root {
  /* Gold palette */
  --gold:        #ECBB37;
  --gold-bright: #F7CB4D;
  --gold-deep:   #A9791A;

  /* Ember accent */
  --ember:       #E85D2A;

  /* Dark surfaces (page/elevated/deepest) */
  --night:   #100F0D;
  --night-2: #1B1813;
  --night-3: #0A0A08;

  /* Light surfaces */
  --paper:   #F7F5EF;
  --paper-2: #FFFFFF;

  /* Text on dark backgrounds */
  --tl:     #F1ECE1;   /* body text */
  --tl-mut: #9C9486;   /* muted / secondary */

  /* Text on light backgrounds */
  --td:     #16130D;   /* body text */
  --td-mut: #6A6256;   /* muted / secondary */

  /* Dividers */
  --line-d: rgba(255,255,255,.09);  /* on dark surfaces */
  --line-l: rgba(22,19,13,.11);     /* on light surfaces */

  /* Layout */
  --maxw: 1180px;
  --r:    16px;         /* base border radius */

  /* Motion */
  --ease: cubic-bezier(.22,.61,.36,1);
}
```

### Surface Hierarchy

| Token | Value | Use |
| --- | --- | --- |
| `--night-3` | `#0A0A08` | Deepest — stats bar, footer |
| `--night` | `#100F0D` | Page background (dark sections) |
| `--night-2` | `#1B1813` | Elevated — cards, dropdowns, estimator |
| `--paper` | `#F7F5EF` | Page background (light sections) |
| `--paper-2` | `#FFFFFF` | Card backgrounds on light sections |

### Gradient Text

```css
.gold-txt {
  background: linear-gradient(100deg, var(--gold), var(--ember));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}
```

---

## Typography

### Font Stack

| Role | Family | Source | Weights |
| --- | --- | --- | --- |
| Body / UI | `Inter` | Google Fonts | 400, 450, 500, 600 |
| Display / Headings | `Bricolage Grotesque` | Google Fonts | 400, 500, 600, 700, 800 |
| Mono / Labels / Eyebrows | `JetBrains Mono` | Google Fonts | 400, 500, 600 |

### Google Fonts Import

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Inter:wght@400;450;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
```

### Base Settings

```css
body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4 {
  font-family: 'Bricolage Grotesque', 'Inter', sans-serif;
  line-height: 1.06;
  font-weight: 700;
  letter-spacing: -.02em;
}
```

### Type Scale

| Element | Size | Weight | Notes |
| --- | --- | --- | --- |
| `h1` (hero) | `clamp(38px, 5.4vw, 64px)` | 800 | letter-spacing: -.03em |
| `h2` (section) | `clamp(30px, 4vw, 46px)` | 700 | |
| `h2` (final CTA) | `clamp(34px, 5vw, 58px)` | 800 | letter-spacing: -.03em |
| `h3` (card) | `20–21px` | 700 | |
| Body lead | `18–18.5px` | 400 | |
| Body | `15–16px` | 400 | |
| Body small | `14–14.5px` | 400 | |
| Eyebrow | `12px` | 500 | JetBrains Mono, uppercase, letter-spacing: .18em |
| Mono label | `11–13px` | 400–600 | JetBrains Mono |

---

## Layout

```css
.wrap {
  max-width: var(--maxw); /* 1180px */
  margin: 0 auto;
  padding: 0 28px;
}

.pad { padding: 108px 0; }          /* standard section */
@media (max-width: 640px) {
  .pad { padding: 74px 0; }
}
```

### Section Contexts

```css
.on-dark  { background: var(--night);  color: var(--tl); }
.on-light { background: var(--paper);  color: var(--td); }
```

All heading and text utility classes automatically swap colors in each context.

---

## Breakpoints

| Name | Width | Columns behaviour |
| --- | --- | --- |
| Desktop | `> 980px` | Full multi-column grids |
| Tablet | `≤ 980px` | 2-col collapse for most grids |
| Mobile | `≤ 640px` | Single column; nav hidden, burger shown |

---

## Buttons

All buttons use pill shape (`border-radius: 999px`) and `Inter` font.

```css
.btn {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  font-weight: 600;
  font-size: 15px;
  padding: 14px 24px;
  border-radius: 999px;
  border: 1px solid transparent;
  transition: transform .25s var(--ease), background .25s, box-shadow .25s, border-color .25s;
}

/* Primary — gold fill */
.btn-primary {
  background: var(--gold);
  color: #1A1408;
  box-shadow: 0 10px 30px -12px rgba(236,187,55,.7);
}
.btn-primary:hover {
  transform: translateY(-2px);
  background: var(--gold-bright);
  box-shadow: 0 16px 38px -12px rgba(236,187,55,.85);
}

/* Ghost — transparent with border */
.btn-ghost {
  background: transparent;
  color: var(--tl);
  border-color: var(--line-d);
}
.btn-ghost:hover {
  border-color: var(--gold);
  color: var(--gold-bright);
  transform: translateY(-2px);
}
/* Ghost on light section */
.on-light .btn-ghost { color: var(--td); border-color: var(--line-l); }
.on-light .btn-ghost:hover { color: var(--gold-deep); border-color: var(--gold); }

/* Outline — smaller, used inline */
.btn-outline {
  background: transparent;
  border: 1px solid var(--line-d);
  color: var(--tl);
  padding: 10px 18px;
  font-size: 14.5px;
}
.btn-outline:hover { border-color: var(--gold); color: var(--gold-bright); }
```

---

## Eyebrow Labels

Used above section headings as a mono-spaced category marker.

```css
.eyebrow {
  font-family: 'JetBrains Mono', monospace;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: .18em;
  text-transform: uppercase;
  color: var(--gold);
  display: inline-flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 18px;
}
.eyebrow::before {
  content: "";
  width: 26px;
  height: 1px;
  background: var(--gold);
  display: inline-block;
}
/* On light section */
.on-light .eyebrow          { color: var(--gold-deep); }
.on-light .eyebrow::before  { background: var(--gold-deep); }
```

---

## Cards

### Dark Card (`.pcard` — products, dark sections)

```css
background: linear-gradient(180deg, var(--night-2), rgba(27,24,19,.4));
border: 1px solid var(--line-d);
border-radius: var(--r);   /* 16px */
padding: 28px 26px;
```
Hover: `translateY(-5px)`, border-color → `var(--gold)`.

### Light Card (`.wb-item` — services, light sections)

```css
background: var(--paper-2);
border: 1px solid var(--line-l);
border-radius: 18px;
padding: 38px 34px 34px;
```
Hover: `translateY(-6px)`, gold top accent bar (3px, `linear-gradient(90deg, var(--gold), var(--ember))`).

### Metric Tile (`.metric`)

```css
border: 1px solid var(--line-d);
border-radius: 13px;
padding: 18px 20px;
background: var(--night-2);
```
Value: `Bricolage Grotesque`, 30px, weight 700, `var(--tl)`. Accent number in `var(--ember)`.

### Testimonial Card (`.quote` — light section)

```css
background: var(--paper-2);
border: 1px solid var(--line-l);
border-radius: var(--r);
padding: 30px 28px;
```

---

## Card Icon Slots

Consistent icon container used across service/product/why cards:

```css
/* Dark section icon */
.icon-slot {
  width: 50–56px;
  height: 50–56px;
  border-radius: 13–15px;
  background: rgba(236,187,55,.16);
  display: grid;
  place-items: center;
}
.icon-slot svg { width: 25–27px; stroke: var(--gold); fill: none; stroke-width: 1.7; }

/* Light section icon */
.icon-slot-light { background: #efe9dc; }
.icon-slot-light svg { stroke: var(--gold-deep); }
```

---

## Glow Decorations

Background ambient glows used in hero and CTA sections:

```css
.glow {
  position: absolute;
  border-radius: 50%;
  filter: blur(100px);
  opacity: .42;
}
/* Gold glow */
.glow.a { background: radial-gradient(circle, rgba(236,187,55,.5), transparent 70%); }
/* Ember glow */
.glow.b { background: radial-gradient(circle, rgba(232,93,42,.4), transparent 70%); }
```

### Dot Grid Background

```css
background-image: radial-gradient(rgba(255,255,255,.05) 1px, transparent 1px);
background-size: 34px 34px;
mask-image: linear-gradient(180deg, black, transparent 80%);
```

---

## Navigation

- Header height: **78px**
- Scrolled state: `background: rgba(16,15,13,.86)`, `backdrop-filter: blur(14px)`, bottom border: `var(--line-d)`
- Nav link color: `#CFC8BB` → hover `var(--tl)`
- Mega menu: `var(--night-2)` background, `border-radius: 18px`, `box-shadow: 0 30px 70px -25px rgba(0,0,0,.8)`

---

## Motion

### Reveal Animation

```css
.reveal {
  opacity: 0;
  transform: translateY(22px);
  transition: opacity .7s var(--ease), transform .7s var(--ease);
}
.reveal.in { opacity: 1; transform: none; }
```

Add `.in` via IntersectionObserver when the element enters the viewport.

### Float Animation

```css
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50%       { transform: translateY(-9px); }
}
/* Usage: animation: float 6s ease-in-out infinite */
```

### Marquee Scroll

```css
@keyframes scrollx { to { transform: translateX(-50%); } }
.mtrack { animation: scrollx 38s linear infinite; }
.mtrack.rev { animation-direction: reverse; animation-duration: 46s; }
/* Pause on hover */
.marquee:hover .mtrack { animation-play-state: paused; }
```

### Arrow Nudge

```css
.arrow { transition: transform .25s var(--ease); }
.btn:hover .arrow { transform: translateX(3px); }
```

### Reduced Motion

```css
@media (prefers-reduced-motion: reduce) {
  * { animation: none !important; transition: none !important; }
  .reveal { opacity: 1; transform: none; }
}
```

---

## Focus Style

```css
:focus-visible {
  outline: 2px solid var(--gold);
  outline-offset: 3px;
  border-radius: 4px;
}
```

---

## Footer

```css
footer {
  background: var(--night-3);
  border-top: 1px solid var(--line-d);
  padding: 64px 0 30px;
}
/* 4-column grid */
.foot-top {
  display: grid;
  grid-template-columns: 1.4fr 1fr 1fr 1fr;
  gap: 34px;
}
/* Column headings */
.foot-col h5 {
  font-family: 'JetBrains Mono';
  font-size: 12px;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--tl-mut);
}
/* Social icon buttons */
.socials a {
  width: 36px; height: 36px;
  border: 1px solid var(--line-d);
  border-radius: 9px;
}
.socials a:hover { border-color: var(--gold); color: var(--gold-bright); transform: translateY(-2px); }
```

---

## Section Reference

| Section | Background | Key component |
| --- | --- | --- |
| Hero | `--night` + glows | h1 + dashboard mock + float card |
| What We Build | `--paper` (`.on-light`) | `.wb-item` light cards (3-col) |
| Clients | `--night` | Marquee of logo names |
| Products | `--night` | `.pcard` dark carousel (3-col) |
| Engagement Models | `--paper` (`.on-light`) | `.model` light cards (3-col) |
| Case Study | `--night` | 2-col grid + `.metric` tiles |
| Industry Expertise | `--paper` (`.on-light`) | `.ind` light cards (3-col) |
| Why Skifftech | `--night` | `.why` dark cards (3-col) |
| Process | `--paper` (`.on-light`) | 5-step horizontal timeline |
| Tech Stack | `--night` | Dual marquee of tech chips |
| Stats | `--night-3` | 4-col stat numbers |
| Reviews | `--paper` (`.on-light`) | `.quote` cards (3-col) |
| Estimator | `--night` gradient | 2-col text + side panel |
| FAQ | `--paper` (`.on-light`) | Accordion, max-width 820px |
| Final CTA | `--night` + glows | Centered h2 + two buttons |
| Footer | `--night-3` | 4-col grid + socials |
