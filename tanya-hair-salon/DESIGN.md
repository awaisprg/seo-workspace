# TANYA HAIR SALON — Website Design System & Build Guide

A complete design + build kit for a modern, elegant WordPress site for **TANYA HAIR SALON** in Coquitlam, BC.

---

## v2 Refinement (matches Filomena/Megas editorial direction)

Compared to v1, this pass elevates the design closer to the high-end Coquitlam salon genre:

- **Full-bleed editorial hero** with overlaid serif headline (italic accent word) and slow Ken-Burns image zoom — replaces the split layout.
- **Image-led service cards** — each service is its own photograph with a hover reveal of the description and CTA — replaces the bordered text-tile grid.
- **New "The Experience" ritual section** — Consult / Cleanse / Craft / Finish — adds the narrative layer high-end salons all use.
- **Editorial pull-quote band** — single dark-ink testimonial section between services and about.
- **Trusted Brands strip** — Olaplex / K18 / Davines / Kérastase / Wella — borrows the product credibility row from Filomena/Megas product pages.
- **Refined palette** — warmer cream `#F7F2EA`, taupe accent `#D8C9B6` (replaces the pink-leaning blush), deeper ink `#1F1B17`, richer gold `#A98A55` — less "feminine pastel," more "luxe neutral."
- **Bigger display type** — hero scales up to 132px, tighter letter-spacing, italic accent treatment.
- **Editorial pricing list** on Services page — name + small description left, italic taupe price right, full-width hover underline animation — replaces the row-grid table.
- **Smarter header** — transparent over the dark hero, fades to solid cream on scroll; auto-switches to dark text on interior pages via `body.is-light-header`.

---

## 1. Brand Direction

**Personality:** Elegant · Feminine · Minimal · Approachable Luxury
**Mood references:** Filomena Salon Spa, Megas Hair Salon — generous whitespace, soft serif headings, hairline rules, muted pastels, slow fade-ins, no clutter.
**Avoid:** loud gradients, drop shadows, stock-template card layouts, busy backgrounds, neon CTAs.

---

## 2. Sitemap

```
/                  Home          (front-page.php)
/about             About         (page-about.php)
/services          Services      (page-services.php)
  /services/haircut
  /services/hair-color
  /services/eyebrow-services
  /services/hair-styling
  /services/makeup
  /services/hair-treatments
/gallery           Gallery       (page-gallery.php)
/contact           Contact       (page-contact.php)
/book              Book Now      (page-booking.php)  — embeds Square / Fresha
/blog              Journal       (optional, archive.php)
```

---

## 3. Color Palette

| Token              | Hex       | Usage                                 |
| ------------------ | --------- | ------------------------------------- |
| `--c-bg`           | `#FAF7F2` | Page background (warm off-white)      |
| `--c-surface`      | `#FFFFFF` | Cards, modals                         |
| `--c-cream`        | `#F2EBE1` | Section bands, hover surfaces         |
| `--c-blush`        | `#E8D3CB` | Accent panels, image overlays         |
| `--c-blush-deep`   | `#C9A29A` | Hover states on accent surfaces       |
| `--c-ink`          | `#2B2622` | Primary text (warm near-black)        |
| `--c-ink-soft`     | `#6B635C` | Secondary text                        |
| `--c-line`         | `#E5DED4` | Hairline rules, dividers              |
| `--c-gold`         | `#B89968` | Subtle accent (icons, underline hint) |
| `--c-grey-100`     | `#F4F2EF` | Alt section background                |

**Contrast checked:** `--c-ink` on `--c-bg` = 12.4:1 (AAA). `--c-ink-soft` on `--c-bg` = 5.6:1 (AA).

---

## 4. Typography

**Pairing:** *Cormorant Garamond* (display serif) + *Inter* (UI sans).
Alt: *Fraunces* + *Inter*, or *Playfair Display* + *Nunito Sans*.

```css
--font-display: 'Cormorant Garamond', 'Playfair Display', Georgia, serif;
--font-body:    'Inter', 'Helvetica Neue', system-ui, sans-serif;
```

| Style       | Family   | Size (desktop) | Weight | Tracking | Line-height |
| ----------- | -------- | -------------- | ------ | -------- | ----------- |
| Display H1  | Cormorant | 72–96 px      | 400    | -0.01em  | 1.05        |
| H2          | Cormorant | 48–56 px      | 400    | -0.005em | 1.1         |
| H3          | Cormorant | 28–32 px      | 500    | 0        | 1.2         |
| Eyebrow     | Inter    | 12 px          | 500    | 0.18em   | 1           |
| Body        | Inter    | 16–17 px       | 400    | 0        | 1.7         |
| Small / meta| Inter    | 13 px          | 400    | 0.02em   | 1.5         |
| Button      | Inter    | 13 px          | 500    | 0.14em   | 1           |

Headings always sentence- or Title-case. Eyebrows ALL CAPS with letter-spacing.

---

## 5. Spacing & Layout

**Grid:** 12-column · max-width `1240px` · gutter `32px` · outer padding `clamp(20px, 4vw, 48px)`.
**Vertical rhythm:** sections use `padding-block: clamp(80px, 10vw, 160px)`.
**Spacing scale (rem):** `0.25 · 0.5 · 0.75 · 1 · 1.5 · 2 · 3 · 4 · 6 · 8 · 12`.
**Radii:** `--r-sm: 2px`, `--r-md: 4px`, `--r-lg: 14px` (images/cards). No heavy rounding.
**Shadow:** avoid. Use hairline borders (`1px solid var(--c-line)`) instead. Single soft shadow allowed on hover: `0 12px 32px -16px rgba(43,38,34,.18)`.

---

## 6. Buttons

```css
.btn { display: inline-flex; align-items: center; gap: .6rem;
  padding: 18px 32px; font: 500 13px/1 var(--font-body);
  letter-spacing: .14em; text-transform: uppercase;
  border: 1px solid var(--c-ink); transition: all .35s ease;
}
.btn--primary   { background: var(--c-ink); color: var(--c-bg); }
.btn--primary:hover   { background: var(--c-bg); color: var(--c-ink); }
.btn--ghost     { background: transparent; color: var(--c-ink); }
.btn--ghost:hover     { background: var(--c-ink); color: var(--c-bg); }
.btn--link      { border: 0; padding: 0 0 6px; border-bottom: 1px solid var(--c-ink); }
```

Arrow glyph `→` after label (animates +4px on hover).

---

## 7. Components

- **Hairline rule:** `<hr class="rule">` — 1px, 48px wide, gold or ink.
- **Eyebrow label:** small caps, with leading hairline (`— Services`).
- **Image card:** 4:5 ratio default, slow `transform: scale(1.04)` on hover, caption below in serif.
- **Service tile:** plain background, hairline border-bottom, hover swaps text color to `--c-blush-deep` and reveals `→`.
- **Testimonial:** large serif quote, name in eyebrow caps, no quotation marks graphic.
- **Sticky header:** transparent over hero, fades to solid `--c-bg` after 80px scroll.

---

## 8. Motion

- Fade + 16px translate-up on scroll (`IntersectionObserver`, `0.8s ease`).
- Image hovers: 600ms scale to 1.04.
- Buttons: 350ms ease for color/background.
- Honor `prefers-reduced-motion`.

---

## 9. Homepage Layout (in order)

1. **Sticky header** — Logo (wordmark) center · nav left (Home, About, Services, Gallery) · nav right (Contact, Book Now btn).
2. **Hero** — Full viewport. Left: H1 + sub + two CTAs. Right: tall portrait image. Hairline `— TANYA HAIR SALON · COQUITLAM` eyebrow above headline.
3. **Intro strip** — Single line of text in serif italic, centered, on cream band.
4. **Services preview** — 6-tile grid (3×2 desktop, 2×3 tablet, 1×6 mobile). Each tile: number `01–06`, service name, one-line description, hairline border.
5. **About snippet** — 2-col: image left, copy right with eyebrow, H2, paragraph, ghost CTA "Our Story →".
6. **Featured gallery** — Masonry/asymmetric 4-image collage, "View Full Gallery →" link.
7. **Testimonials** — Large serif quote slider (3 quotes, 8s autoplay, fade transition).
8. **Visit / hours band** — 3-col: Address · Hours · Contact, on cream background.
9. **CTA banner** — Full-width image with overlay, centered headline "Ready for your next look?" + "Book an Appointment" primary button.
10. **Footer** — 4-col: brand blurb · sitemap · hours · social/contact. Bottom: copyright + credits hairline.

---

## 10. Section Content (final copy)

### Hero
- **Eyebrow:** `— TANYA HAIR SALON · COQUITLAM`
- **H1:** *Quietly confident hair, crafted with care.*
- **Sub:** A boutique salon in Austin Heights where great hair feels effortless — colour, cuts, and styling tailored to you.
- **CTA primary:** Book an Appointment →
- **CTA ghost:** Explore Services

### Intro strip (italic, centered)
> *Small studio. Personal service. Hair that feels like you on your best day.*

### Services preview tiles
| # | Title | One-liner |
|---|-------|-----------|
| 01 | Haircut | Precision cuts shaped to your face, hair texture, and lifestyle. |
| 02 | Hair Color | Lived-in balayage, dimensional highlights, and rich single-process colour. |
| 03 | Eyebrow Services | Shaping, tinting, and tidy-ups that frame your features beautifully. |
| 04 | Hair Styling | Blowouts, updos, and event styling that hold from morning to last dance. |
| 05 | Makeup | Soft, polished makeup for weddings, photoshoots, and special occasions. |
| 06 | Hair Treatments | Restorative care for shine, strength, and softness from root to ends. |

### About snippet
- **Eyebrow:** `— About the Salon`
- **H2:** *A small studio with a careful hand.*
- **Body:** Tucked into Austin Heights in Coquitlam, TANYA HAIR SALON is a quiet, considered space dedicated to one thing — making you feel like the most polished version of yourself. From a fresh trim to a full colour transformation, every appointment is unhurried, personal, and finished with care.
- **CTA:** Our Story →

### Testimonials (sample — replace with real reviews from Square page once collected)
1. *"Tanya listens. She actually hears what you want and then makes it better than you imagined."* — **JESSICA L.**
2. *"My favourite balayage in the Tri-Cities. Soft, sun-kissed, and grows out beautifully."* — **MARIA C.**
3. *"Walked in tired, walked out glowing. The whole experience felt like a small luxury."* — **AISHA R.**

### Visit band
- **Address:** 8-2662 Austin Ave, Coquitlam, BC V3K 6C4
- **Hours:** Mon – Sat · 10:00 AM – 6:00 PM   ·   Sunday · Closed
- **Contact:** (604) 917-0266 · tanya.by.lillian@gmail.com

### CTA banner
- **Headline:** *Ready for your next look?*
- **Sub:** New clients welcome. Book online in under a minute.
- **Button:** Book an Appointment →

### About page (long-form)
> **Eyebrow:** Our Story
> **H1:** *Hair, done thoughtfully.*
>
> TANYA HAIR SALON is a boutique studio in Coquitlam built on a simple idea — that a great salon visit should feel calm, personal, and worth the trip. Whether you're settling in for a multi-hour colour appointment or popping in for a quick trim before a wedding, you'll find the same careful attention to detail and the same honest conversation about what will work best for your hair.
>
> Our specialty is wearable, lived-in colour and cuts that hold their shape between visits. We work with premium products, clean tools, and techniques refined over years behind the chair — but what really sets the salon apart is the tone of the room. Quiet, warm, unhurried.
>
> We can't wait to meet you.

### Contact page intro
> **Eyebrow:** Get in Touch
> **H1:** *Say hello.*
> Questions about a service, product recommendation, or planning a bridal trial? Send us a note — we usually reply within one business day. To book, the fastest way is online.

---

## 11. Class Naming (BEM-lite)

```
.site-header  .site-header__nav  .site-header__brand  .site-header__cta
.hero  .hero__eyebrow  .hero__title  .hero__sub  .hero__media  .hero__actions
.intro-strip
.services  .services__grid  .service-tile  .service-tile__num  .service-tile__title  .service-tile__desc
.about-snippet  .about-snippet__media  .about-snippet__body
.gallery-feature  .gallery-feature__grid  .gallery-feature__item
.testimonials  .testimonial  .testimonial__quote  .testimonial__name
.visit-band  .visit-band__col
.cta-banner  .cta-banner__inner
.site-footer  .site-footer__col  .site-footer__legal

Utility: .container .rule .eyebrow .btn .btn--primary .btn--ghost .btn--link
State:   .is-scrolled .is-active .is-visible .is-open
```

---

## 12. WordPress Implementation

### Recommended approach
**Gutenberg (Block Theme via theme.json)** — best long-term, fastest, no page-builder bloat. Use the included `wp-theme/` as a starter classic theme that you can convert. Lock typography + spacing + palette in `theme.json` so client edits stay on-brand.

If non-technical staff need to drag-and-drop, use **Elementor Pro** with global styles wired to the same tokens.

### Recommended plugins

| Need | Plugin | Notes |
|------|--------|-------|
| Booking | **Amelia** *or* embed existing **Square Appointments** | Square is already in use — keep it for continuity. |
| Gallery | **Modula** or native Gutenberg Gallery + lightbox | Modula handles masonry layouts cleanly. |
| SEO | **Rank Math** | Lighter than Yoast, schema built-in. |
| Forms | **Fluent Forms** *or* **WPForms Lite** | Connect to Gmail / Mailchimp. |
| Performance | **WP Rocket** + **ShortPixel** | Cache + image compression. |
| Reviews | **Site Reviews** by Paul Ryley | Pulls Google reviews. |
| Schema | Rank Math handles LocalBusiness + HairSalon schema natively | Set NAP once. |
| Cookie/legal | **Complianz** | PIPEDA-friendly for Canadian sites. |

### Local SEO essentials (already shipped in `header.php` template)
- `HairSalon` JSON-LD with NAP, hours, geo, services
- OpenGraph + Twitter card meta
- Canonical, robots, hreflang `en-CA`
- Google Business Profile claim + embed map on Contact page

---

## 13. File Layout in this Repo

```
tanya-hair-salon/
├── DESIGN.md                  ← this document
├── prototype/                 ← static HTML/CSS preview (open index.html)
│   ├── index.html
│   ├── about.html
│   ├── services.html
│   ├── gallery.html
│   ├── contact.html
│   ├── css/style.css
│   └── js/main.js
└── wp-theme/                  ← WordPress classic theme starter
    ├── style.css              ← WP theme header
    ├── functions.php
    ├── theme.json             ← Block editor tokens
    ├── header.php
    ├── footer.php
    ├── front-page.php
    ├── page.php
    ├── page-about.php
    ├── page-services.php
    ├── page-gallery.php
    ├── page-contact.php
    ├── index.php
    ├── inc/
    │   └── schema.php
    ├── template-parts/
    │   ├── hero.php
    │   ├── services-preview.php
    │   ├── about-snippet.php
    │   ├── gallery-feature.php
    │   ├── testimonials.php
    │   ├── visit-band.php
    │   └── cta-banner.php
    └── assets/
        ├── css/main.css       ← shared with prototype
        └── js/main.js
```

---

## 14. Build Checklist

- [ ] Buy domain (`tanyahairsalon.ca`) and migrate from Square subdomain.
- [ ] Set up WP host (Kinsta / SiteGround / Cloudways), PHP 8.2+, WP 6.5+.
- [ ] Install starter theme from `wp-theme/`.
- [ ] Configure `theme.json` palette + typography.
- [ ] Install plugins listed in §12.
- [ ] Connect Square Appointments via embed shortcode on `/book`.
- [ ] Add Google Business Profile API key for Site Reviews.
- [ ] Run Rank Math wizard, submit sitemap to Google Search Console + Bing.
- [ ] Set up Cloudflare + image CDN.
- [ ] Lighthouse target: ≥ 95 perf / 100 a11y / 100 SEO on mobile.
