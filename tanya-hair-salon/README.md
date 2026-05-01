# Tanya Hair Salon — Website

Design + build kit for **TANYA HAIR SALON** in Coquitlam, BC.

## What's in here

| Path | What it is |
|------|------------|
| `DESIGN.md` | Full design system, sitemap, content copy, build checklist. Read this first. |
| `prototype/` | Static HTML/CSS preview. Open `prototype/index.html` in a browser. |
| `wp-theme/` | WordPress classic theme (`Tanya Hair Salon`). Drop into `/wp-content/themes/`. |

## Quick preview

```bash
# Open the static prototype locally
open tanya-hair-salon/prototype/index.html
# or serve it
python3 -m http.server -d tanya-hair-salon/prototype 8080
```

Visit `http://localhost:8080` to view Home, About, Services, Gallery, Contact.

## Install the WordPress theme

1. Zip the `wp-theme` folder (rename to `tanya-hair-salon.zip`).
2. WP Admin → Appearance → Themes → Add New → Upload Theme.
3. Activate.
4. Pages: create *About*, *Services*, *Gallery*, *Contact*. Assign each its **Template** from the page sidebar.
5. Settings → Reading → set Homepage = static page (create a "Home" page).
6. Appearance → Menus → assign menus to **Primary**, **Secondary**, **Footer** locations.
7. Appearance → Customize → **Salon Details** → set phone, email, hours, booking URL.
8. Install plugins: Rank Math, Modula (or Gutenberg gallery), Fluent Forms, WP Rocket. See `DESIGN.md §12`.

## Brand quick reference

- **Colors:** `#FAF7F2` bg · `#F2EBE1` cream · `#E8D3CB` blush · `#2B2622` ink · `#B89968` gold
- **Type:** Cormorant Garamond (display) + Inter (body)
- **Voice:** quiet, considered, no exclamation marks, sentence-case headlines
