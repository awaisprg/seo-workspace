# Implementation Roadmap — prgmd.com

**Generated:** 2026-05-08
**Plan owner:** [TBD — recommend SEO lead + content manager + dev resource]
**Review cadence:** Weekly tactical, monthly strategic

---

## Phase 1 — Foundation (Weeks 1–4)

**Goal:** Make the site E-E-A-T-credible and ship the highest-ROI commercial pages. Stop bleeding to direct competitors on head terms.

### Week 1
- [ ] **Diagnose 403 on `/post-sitemap.xml`** — anonymous fetch returns 403 (Cloudflare/WAF? bot challenge?). Verify Googlebot, Bingbot, OAI-SearchBot, PerplexityBot, ClaudeBot user agents are NOT being blocked. AI-search bots being blocked here would invalidate any GEO work later.
- [ ] **Set up tracking baseline:** GA4 organic + GSC + Ahrefs project. Snapshot current top-100 keyword positions.
- [ ] **`/seo drift` baseline** captured for Colorado page, homepage, top-10 glossary posts (defensive — alert on any drop).
- [ ] **Schema audit** of existing pages — what's there now, what's broken, what's missing.
- [ ] **Decide team/credentialing visibility scope** — which staff can be publicly named, what certifications can be displayed.

### Week 2
- [ ] Ship `/about/team/` index + 3 leadership bios (with Person + ProfilePage schema).
- [ ] Ship `/about/credentials/` page (HIPAA, SOC 2 status, HBMA membership, etc.).
- [ ] Defensive refresh of `/medical-billing-in-colorado/` — extend to ~1,500 words, add author byline, refresh stats, add internal links to upcoming state pages (forward-link).

### Week 3
- [ ] Ship `/services/medical-billing/` (pillar, 2,000+ words).
- [ ] Ship `/services/revenue-cycle-management/` (pillar, 2,500+ words). This is the single highest-value new page in the plan — 13K monthly volume, KD 20.
- [ ] Internal linking pass: every glossary post that mentions RCM, medical billing, or relevant services gets a contextual link to the new pillars.

### Week 4
- [ ] Ship `/locations/medical-billing-in-california/` (Tier-1 state).
- [ ] Ship `/locations/medical-billing-in-texas/`.
- [ ] Ship `/locations/medical-billing-in-florida/`.
- [ ] Ship `/locations/medical-billing-in-new-york/`.
- [ ] Each state page: 1,200+ words, unique local stats, ProfessionalService schema with `areaServed`, internal-linked from `/locations/` hub and from the relevant `/services/` page.

**Phase 1 exit criteria:**
- 9 new high-quality pages live
- 1 critical defensive refresh shipped
- E-E-A-T scaffolding visible
- Sitemap accessibility issue resolved
- Drift baselines in place

---

## Phase 2 — Expansion (Weeks 5–12)

**Goal:** Round out specialty + state matrix. Begin RCM cluster. First case studies. Replicate the Colorado playbook everywhere it scales.

### Weeks 5–8
- [ ] Ship `/services/medical-credentialing/` and `/services/denial-management/`.
- [ ] Ship 6 specialty pages: cardiology, mental-health, chiropractic, podiatry, family-practice, internal-medicine.
- [ ] 301 redirects: `/cardiovascular-medical-billing-company/` → `/specialties/cardiology-medical-billing/`, same for chiropractic. Validate redirect chain length = 1.
- [ ] Ship 4 more state pages: PA, IL, GA, NC.
- [ ] Refresh and re-link 5 glossary posts that should now point at the new service pillars.

### Weeks 9–12
- [ ] Ship 4 more specialty pages: dental, podiatry (if not already done in 5–8), pediatric, OB-GYN.
- [ ] Ship 3 more state pages: MI, VA, AZ.
- [ ] Ship `/services/medical-coding/` and `/services/accounts-receivable/`.
- [ ] **Case studies:** ship #1 and #2 (cardiology + mental health). Each requires client interview, anonymization sign-off, written narrative + metrics.
- [ ] First RCM spoke: `/resources/guides/rcm-process-7-steps/`.
- [ ] **First mid-plan KPI review** at end of week 12. Compare against 3-month targets in `SEO-STRATEGY.md`. Reforecast if needed.

**Phase 2 exit criteria:**
- 14 new specialty/service pages
- 7 new state pages (total 11+ since Phase 1)
- 2 case studies live
- Blog cluster around RCM started
- First measurable traffic delta on new pages

---

## Phase 3 — Scale (Weeks 13–24, Months 4–6)

**Goal:** Programmatic state expansion. Original research. Link-earning content. Approach mid-year traffic target (12,000 / mo).

### Months 4–5
- [ ] Ship remaining 5 specialty pages (dermatology, orthopedic, gastroenterology, urology, pain management, radiology — pick 5 that match buyer demand most).
- [ ] Ship 6 more state pages — second-tier markets (WA, MA, CO is done, MN, OR, MD is done, TN, IN).
- [ ] Ship 3 more case studies (target: 5 cumulative).
- [ ] Ship 3 RCM spoke guides: KPIs, in-house vs outsourced, denial-management playbook.
- [ ] Begin **original research project:** denial rates by specialty (internal data anonymized + competitor benchmarks). Plan publication for end Month 6.
- [ ] Glossary push: identify the 10 lowest-ranking glossary posts (positions 9–15) and execute focused improvement: add author + reviewer, expand to 800+ words, add internal links from new pillars, schema audit.

### Month 6
- [ ] Publish original research piece. PR push: pitch to Becker's Hospital Review, RevCycleIntelligence, MGMA, HFMA. Goal: 5+ healthcare-publication backlinks.
- [ ] **Run `/seo geo`** audit. Implement passage-level optimizations on top 20 pages.
- [ ] **Run `/seo schema`** audit on all live pages; fix validation errors.
- [ ] **Mid-year KPI review:** organic traffic target 12,000 / mo. If under 8,000, escalate; if over 14,000, reforecast year-end target upward.

**Phase 3 exit criteria:**
- ~50 high-quality content pages on the site (vs ~25 today)
- First piece of original research live and earning links
- GEO baseline established
- Mid-year KPI target met or reforecasted with reasoning

---

## Phase 4 — Authority (Months 7–12)

**Goal:** Pursue programmatic depth (state programmatic rollout), thought leadership, sustained link earning, AI-search citation.

### Months 7–9
- [ ] **Programmatic state rollout:** complete remaining 30 states (10 / month). Strict quality gate per `CONTENT-CALENDAR.md`.
- [ ] **Specialty × state matrix:** ONLY the volume-justified pairings (cutoff: 50+ monthly searches). Expect ~15–25 such pages, not 750.
- [ ] **Thought leadership cadence:** 1 substantial blog post per week on industry trends — No Surprises Act, prior auth reform, AI in billing, CMS rule changes.
- [ ] **Link-bait pieces:** 1 per month — calculator, lookup tool, infographic, original survey.
- [ ] Case studies: +3 (target 8 cumulative).
- [ ] Refdomain target: 800 by end of Month 9.

### Months 10–12
- [ ] **Audit & refresh sprint** — every page from Phase 1–3 reviewed for accuracy, expanded if data is stale, schema re-validated, internal links audited.
- [ ] **URL migration** executed in 2 batches per `SITE-STRUCTURE.md`. Pre/post drift baseline. Monitor for 30 days post each batch.
- [ ] **Glossary plateau push:** posts stuck at #4–15 → top 3 via depth, schema, internal links.
- [ ] **Annual flagship publication:** "State of Medical Billing 2026" — multi-chapter, definitive industry report. Pre-launch outreach to healthcare media. Target: 20+ referring domains within 60 days of publication.
- [ ] Case studies: +2 (target 10 cumulative).
- [ ] **Year-end KPI review** against 12-month targets in `SEO-STRATEGY.md`. Year-2 plan drafted.

**Phase 4 exit criteria:**
- 25,000+ monthly organic traffic
- 1,000+ live referring domains
- 10 published case studies
- 1 annual flagship report
- DR ≥ 48
- Top-3 keyword count ≥ 600
- Demonstrable AI-search citations (ChatGPT/Perplexity/AI Overviews) for branded + service queries

---

## Resource Requirements

### Personnel (estimated)
| Role | FTE-equivalent | Notes |
|---|---|---|
| SEO lead | 0.5 | Owns plan, prioritization, reporting |
| Content writer (medical-billing literate) | 1.0 | Critical — must understand CPT/ICD/RCM |
| Subject-matter expert / reviewer (CPC or CPB credentialed) | 0.2 | Reviews every page for accuracy |
| Developer | 0.25 | Schema, redirects, sitemap, page templates |
| Designer | 0.1 | Diagrams, infographics, page templates |
| PR / outreach (Phase 3+) | 0.2 | Healthcare-publication relationships |

### Tools (annual cost ranges)
- Ahrefs (already in use): $5K–$15K
- GSC + GA4: free
- Schema validator (Schema.org / Google Rich Results Test): free
- Page speed (PageSpeed Insights, CrUX): free
- Heatmap / session replay (optional): $1K–$3K

### Content production budget
- ~150 net new pages over 12 months × ~$200–$500/page (writer + reviewer + design): $30K–$75K
- 2 original research projects: $5K–$15K each (Pollfish, design, PR)
- Total content: ~$40K–$105K depending on quality target

---

## Decision Gates

| Gate | When | Decision |
|---|---|---|
| Phase 1 exit | End of Week 4 | If sitemap 403 unresolved or E-E-A-T page not live → pause Phase 2 |
| Mid-Phase 2 review | End of Week 8 | If Colorado-page traffic dropped >20% during refresh → revert + diagnose |
| Phase 2 exit | End of Week 12 | If 3-month traffic < 5,500 (vs target 6,500) → reforecast and escalate |
| Mid-year review | End of Month 6 | If 6-month traffic < 8,000 (vs target 12,000) → strategic review of bets |
| Phase 4 entry | End of Month 6 | If specialty pages aren't ranking top-10 → fix before scaling programmatic |
| Year-end | End of Month 12 | Full plan re-pivot for year 2 based on what worked |

---

## Cross-Skill Triggers

These skills should be run on a schedule alongside the roadmap:

| Skill | Cadence | Purpose |
|---|---|---|
| `/seo` (full audit) | Quarterly | Holistic health check |
| `/seo drift` | Weekly | Detect regressions on critical pages |
| `/seo schema` | After each new page batch | Validate structured data |
| `/seo geo` | Phase 3 onward, monthly | AI-search visibility |
| `/seo technical` | Quarterly | Crawlability, CWV, mobile |
| `/seo content` | Monthly on top 20 pages | E-E-A-T scoring |
| `/seo backlinks` | Monthly | Profile health, toxic-link review, gap analysis |
| `/seo cluster` | When planning new content tier | Topical cluster validation |

---

## Key Risks & Mitigations

| Risk | Likelihood | Impact | Mitigation |
|---|---|---|---|
| Colorado page de-ranks during Phase 1 | Medium | High | Drift baseline + defensive refresh; minimal changes; monitor weekly |
| Sitemap 403 blocks AI search bots | High (currently blocking anonymous fetch) | High | Diagnose Week 1; allowlist legitimate AI/SE bots |
| Specialty pages thin / cannibalize | Medium | Medium | Strict 1,000-word minimum, unique content per specialty, no specialty × specialty pages |
| Programmatic state rollout flagged | Medium | High | Each state must have unique data; volume cutoff for sub-pages; gradual rollout |
| Content team capacity insufficient | High | High | Front-load Phase 1 commitments; freelance bench for overflow |
| Penalty risk from rapid link-building | Low | High | No paid links, no PBNs; focus on healthcare-publication outreach + research-driven earning |
| Regulatory content goes stale (CMS rule changes) | High | Medium | Quarterly refresh sprint; version dates visible |

---

## Reporting Template (monthly)

1. **KPI snapshot:** organic traffic, keyword counts, refdomains, DR — vs target, vs last month
2. **Top movers:** top 10 pages with traffic gain, top 10 with traffic loss
3. **New pages shipped:** count, list, initial position data
4. **Refresh sprint outcomes:** which pages, before/after positions
5. **Backlink wins:** new high-quality refdomains, target list status
6. **Drift alerts:** any baseline triggers fired, root cause + remediation
7. **Risk watch:** updates to risks above
8. **Decisions for next month:** what's changing in plan, why
