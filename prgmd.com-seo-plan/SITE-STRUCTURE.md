# Site Structure — prgmd.com (Target Architecture)

**Generated:** 2026-05-08
**Template:** Agency / ProfessionalService

---

## Current Inferred Structure (from Ahrefs top pages)

```
prgmd.com/
├── /                                          [home — 118 traffic]
├── /who-we-are/                               [about]
├── /medical-billing-in-{state}/               [state landings — Colorado dominant]
│   ├── colorado/   ← 2,049 traffic 🟢
│   ├── maryland/   ← 96
│   ├── missouri/   ← 65
│   ├── delaware/   ← 31
│   ├── kansas/     ← 22
│   └── ohio/       ← 20
├── /{specialty}-medical-billing-company/      [specialty pages — exist, low traffic]
│   ├── cardiovascular-medical-billing-company/
│   └── chiropractic-medical-billing-company/
└── /{topic}/                                  [glossary blog posts — flat hierarchy]
    ├── what-is-pos-21-in-medical-billing/
    ├── what-is-credentialing-in-medical-billing/
    ├── what-is-cob-in-medical-billing/
    ├── ... (~20 more)
```

**Issues:**
- Flat hierarchy — glossary posts not nested under `/blog/` or `/resources/`
- No service-tier pages (`/services/medical-billing/`, `/services/rcm/`, `/services/credentialing/`)
- No clear hub for specialties or states
- Case studies / portfolio pages absent or invisible to organic search

---

## Target Structure (12-Month Goal)

```
prgmd.com/
│
├── /                                          [Organization + ProfessionalService schema]
│
├── /services/                                 [hub]
│   ├── /medical-billing/                      [pillar — ~2,000 words]
│   ├── /revenue-cycle-management/             [pillar — 13K vol target]
│   ├── /medical-credentialing/                [pillar — 700 vol]
│   ├── /denial-management/                    [pillar — 800 vol]
│   ├── /medical-coding/
│   ├── /accounts-receivable/
│   └── /practice-audit/
│
├── /specialties/                              [hub]
│   ├── /cardiology-medical-billing/           [Service schema; 250 vol, KD 3]
│   ├── /chiropractic-medical-billing/         [100 vol, KD 0]
│   ├── /mental-health-billing/                [1,000 vol, KD 17]
│   ├── /podiatry-billing/                     [600 vol, KD 0, $13 CPC]
│   ├── /dental-billing/                       [600 vol, KD 43 — competitive]
│   ├── /family-practice-billing/              [300 vol, KD 0]
│   ├── /internal-medicine-billing/            [250 vol, KD 0]
│   ├── /pediatric-medical-billing/
│   ├── /ob-gyn-medical-billing/
│   ├── /dermatology-medical-billing/
│   ├── /orthopedic-medical-billing/
│   ├── /gastroenterology-medical-billing/
│   ├── /urology-medical-billing/
│   ├── /pain-management-billing/
│   └── /radiology-medical-billing/
│
├── /locations/                                [hub — state landing rollup]
│   ├── /medical-billing-in-california/        [Tier 1 priority]
│   ├── /medical-billing-in-texas/             [Tier 1]
│   ├── /medical-billing-in-florida/           [Tier 1]
│   ├── /medical-billing-in-new-york/          [Tier 1]
│   ├── /medical-billing-in-pennsylvania/      [Tier 2]
│   ├── /medical-billing-in-illinois/          [Tier 2 — HQ state, also home market]
│   ├── /medical-billing-in-ohio/              [exists, refresh]
│   ├── /medical-billing-in-georgia/           [Tier 2]
│   ├── /medical-billing-in-north-carolina/    [Tier 2]
│   ├── /medical-billing-in-michigan/          [Tier 2]
│   └── /medical-billing-in-{remaining-states}/ [Tier 3 — programmatic, year 2]
│
├── /case-studies/                             [hub — required for E-E-A-T]
│   ├── /case-study-cardiology-practice-{location}/
│   ├── /case-study-mental-health-{location}/
│   └── ... (target 5-8 in year 1)
│
├── /resources/                                [renamed from current flat blog]
│   ├── /glossary/                             [migrate existing 20+ glossary posts here]
│   │   ├── /pos-21-medical-billing/
│   │   ├── /credentialing-medical-billing/
│   │   ├── /cob-medical-billing/
│   │   └── ...
│   ├── /guides/
│   │   ├── /complete-guide-medical-billing-physicians/   [exists]
│   │   ├── /denial-management-playbook/
│   │   └── ...
│   ├── /cpt-codes/                            [hub for CPT-specific articles]
│   │   ├── /cpt-code-96372/                   [exists]
│   │   └── ...
│   └── /blog/                                 [news, trend pieces, thought leadership]
│
├── /about/
│   ├── /team/                                 [team list — REQUIRED for E-E-A-T]
│   │   ├── /[member-name]/                    [Person + ProfilePage schema]
│   │   └── ...
│   ├── /credentials/                          [HIPAA, SOC 2, HBMA membership, certifications]
│   └── /our-process/
│
├── /pricing/                                  [or /pricing-options/ — transparency builds trust]
│
├── /contact/
│
└── /sitemap.xml                               [add explicit sub-sitemaps]
    ├── /post-sitemap.xml                      [exists]
    ├── /page-sitemap.xml
    ├── /services-sitemap.xml
    ├── /specialties-sitemap.xml
    └── /locations-sitemap.xml
```

---

## URL Migration Plan

| Current URL | Target URL | Action |
|---|---|---|
| `/medical-billing-in-{state}/` | `/locations/medical-billing-in-{state}/` | 301; preserves keyword pattern |
| `/{specialty}-medical-billing-company/` | `/specialties/{specialty}-medical-billing/` | 301; cleaner hierarchy |
| `/what-is-{term}-in-medical-billing/` | `/resources/glossary/{term}-medical-billing/` | 301; group as cluster |
| `/cpt-code-{code}-{description}/` | `/resources/cpt-codes/cpt-{code}/` | 301; cluster |
| Top-level home, contact, about | unchanged | — |

**Rule:** Only migrate URLs after target pages are live and internally linked. Issue 301s in batches of 10–20. Update sitemaps. Monitor with `/seo drift` baselines pre/post move.

---

## Internal Linking Strategy

### Hub-and-spoke

```
/services/medical-billing/
  ↕ ↕ ↕
  /specialties/cardiology-medical-billing/  ←→  /case-studies/cardiology-{location}/
  /locations/medical-billing-in-california/  ←→  /case-studies/california-{practice}/
  /resources/glossary/pos-21-medical-billing/
```

### Rules
1. Every specialty page links to at least 3 relevant glossary entries (e.g., cardiology → CPT 93000, modifier 25, prior auth)
2. Every state page links to at least 2 specialty pages and 1 case study from the state if available
3. Every glossary entry links UP to the parent service page and SIDEWAYS to 2 related glossary entries
4. Homepage features: 1 service tier, 1 specialty rotation, 1 location rotation, 1 latest insight
5. Footer: complete services list + locations list (paginated by region)

---

## Quality Gates

Per `/seo-plan` quality-gates reference, every page must satisfy before publication:

| Gate | Criterion |
|---|---|
| Title | < 60 chars, includes target keyword, brand suffix |
| Meta description | 130–155 chars, click-magnet, primary keyword |
| H1 | One per page, contains target keyword |
| Word count | Service pages ≥ 1,200; specialty ≥ 1,000; state ≥ 1,200; case study ≥ 1,500; glossary ≥ 500 |
| Schema | Per-page-type per `agency.md` template |
| Internal inbound links | ≥ 3 from related pages before publication |
| Author byline | Real person + Person schema |
| Last-updated date | Visible to user, in BlogPosting/Article schema |
| Image alt | All non-decorative images have descriptive alt |
| CTA | One primary CTA above fold + repeated mid + bottom |

---

## Schema Plan by Page Type

| Page Type | Required Schema |
|---|---|
| Homepage | `Organization`, `ProfessionalService` |
| `/services/{service}/` | `Service`, `ProfessionalService` |
| `/specialties/{specialty}-medical-billing/` | `Service` (with `serviceType`), `MedicalBusiness` |
| `/locations/medical-billing-in-{state}/` | `Service`, `ProfessionalService` w/ `areaServed` |
| `/case-studies/{slug}/` | `Article`, `Organization` (client w/ permission) |
| `/about/team/{member}/` | `Person`, `ProfilePage`, `EmployeeRole` |
| `/resources/glossary/{term}/` | `DefinedTerm`, `Article` |
| `/resources/cpt-codes/cpt-{code}/` | `Article`, `MedicalProcedure` (verify YMYL eligibility) |
| `/resources/blog/{post}/` | `Article`, `BlogPosting` |
| `/about/credentials/` | `Organization` w/ `award`, `hasCredential` |

Note: Avoid `FAQPage` schema except where YMYL eligibility is explicit (per Aug 2023 Google restriction).

---

## Sitemap Restructure

Currently: `/post-sitemap.xml` (returns 403 to anonymous fetch — verify this is misconfiguration, not intentional). Move to:

```xml
<sitemapindex>
  <sitemap><loc>/page-sitemap.xml</loc></sitemap>          <!-- core marketing pages -->
  <sitemap><loc>/services-sitemap.xml</loc></sitemap>
  <sitemap><loc>/specialties-sitemap.xml</loc></sitemap>
  <sitemap><loc>/locations-sitemap.xml</loc></sitemap>
  <sitemap><loc>/case-studies-sitemap.xml</loc></sitemap>
  <sitemap><loc>/resources-sitemap.xml</loc></sitemap>
  <sitemap><loc>/team-sitemap.xml</loc></sitemap>
</sitemapindex>
```

Each sub-sitemap: ≤ 1,000 URLs, lastmod accurate, served HTTP 200 to all user agents (the current 403 will block external crawlers including AI-search bots).
