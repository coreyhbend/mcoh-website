# Make Central Oregon Home
**makecentraloregonhome.com**

A premium Central Oregon lifestyle, tourism, relocation, and community resource platform. This is NOT a real estate website — it's a local publication, insider guide, and regional authority hub. Real estate exists quietly in the background as a natural next step.

---

## Project Owner
Corey Hanson — Central Oregon real estate agent and investor, Bend, OR
Real estate site: [centralorproperties.com](https://centralorproperties.com)

---

## What This Site Is

Think: a modern local publication meets tourism guide meets community resource.

The site should feel like **Central Oregon insider knowledge from someone who genuinely lives here.** It should inspire people to visit, explore, fall in love with the region, and eventually imagine themselves living there — without ever feeling pushed toward a transaction.

Primary goals in order:
1. Become the most useful online guide to life in Central Oregon
2. Build topical SEO authority across tourism, lifestyle, relocation, and community content
3. Drive organic traffic from people researching Central Oregon
4. Become a trusted local resource people return to regularly
5. Convert a small % of engaged readers into real estate inquiries (naturally, never aggressively)

---

## Tech Stack

| Layer | Decision |
|-------|----------|
| CMS | WordPress (self-hosted) |
| Theme | Custom PHP — built from HTML prototypes in `/prototypes` |
| SEO | RankMath Pro |
| Feed aggregation | WP RSS Aggregator |
| Performance | WP Rocket + Cloudflare CDN |
| Images | Cloudinary (CDN delivery, WebP) |
| Forms | Gravity Forms |
| Events | The Events Calendar plugin |
| Custom fields | Advanced Custom Fields Pro |

---

## Brand Direction

**Primary colors:**
- Cobalt: `#050E36`
- Black: `#000000`
- White: `#FFFFFF`
- Soft neutral grays: `#f5f5f3`, `#e8e8e4`, `#a0a09a`

**Do NOT use:** copper, gold, orange, bronze, or warm metallic accents.

**Typography:**
- Headlines: Cormorant Garamond (serif) — refined, editorial
- Body: Inter (sans-serif) — clean, modern

**Visual direction:** cinematic, editorial, outdoors-focused, premium but approachable, mountain lifestyle.

**Tone:** calm, knowledgeable, local, never salesy or hype-driven. Writes like a trusted local — not a travel blogger or a real estate agent.

---

## Folder Structure

```
/
├── README.md                   ← You are here
├── .gitignore
│
├── prototypes/                 ← Visual HTML prototypes (design reference for WordPress build)
│   └── homepage-prototype.html ← Full homepage prototype — all sections complete
│
├── docs/                       ← Planning, strategy, and reference documents
│   └── site-architecture.md   ← Complete sitemap, URL structure, page templates, SEO plan
│
├── content/                    ← Draft content files (Markdown) before CMS entry
│   └── (community guides, destination guides, blog posts go here)
│
├── assets/                     ← Design assets, image references, logos
│   └── images/
│
└── wordpress/                  ← WordPress theme files (once build begins)
    └── (theme PHP, CSS, JS files go here)
```

---

## Homepage Prototype — What's Built

`/prototypes/homepage-prototype.html` — open in any browser to preview.

Sections completed:
- Sticky navigation (transparent → cobalt on scroll)
- Hero (full viewport cinematic, serif headline, dual CTA)
- Live local intel ticker (animated, 12 content items)
- Intel cards (4-column: events, weather, brewery scene, trail conditions)
- Explore grid (14 category cards with photography)
- Featured destinations (horizontal drag-scroll: 12 destinations)
- Local favorites (editorial two-column with numbered list)
- Communities (4-tab system, 22 communities across all of Central Oregon)
- Real estate bridge (subtle lifestyle stats, links to centralorproperties.com)
- Newsletter strip
- Full footer (5-column)

---

## Communities Covered (22 total)

**Bend Neighborhoods:** NW Crossing, Old Farm District, Awbrey Butte, Midtown Bend, River West, SE Bend, Mountain View, Tetherow

**Greater Bend Area:** Redmond, Tumalo, Terrebonne, Powell Butte, Alfalfa

**Mountain & Resort Towns:** Sisters, Sunriver, La Pine, Camp Sherman

**High Desert & Regional:** Prineville, Madras, Warm Springs (Kah-Nee-Ta), Culver, Maupin

---

## Key Destinations Covered

Smith Rock, Mt Bachelor, Cascade Lakes Highway, Sisters, Tumalo Falls, High Desert Museum, Old Mill District, Sparks Lake, Kah-Nee-Ta & Warm Springs, Ochoco National Forest, Lake Billy Chinook, Newberry National Volcanic Monument, Hayden Homes Amphitheater

---

## Content Sources

### Live Feeds (RSS/API — dynamic)
- **News:** KTVZ, Central Oregon Daily, Bend Bulletin, Source Weekly, Bend Buzz, OPB Oregon, Bend Magazine
- **Events:** Visit Bend, Hayden Homes Amphitheater, Bend Parks & Rec, Downtown Bend, Old Mill District, Eventbrite, Meetup, Chamber calendars (Bend, Redmond, Sisters, Sunriver, Prineville, Madras), brewery calendars, **Indian Head Casino**, **Kah-Nee-Ta Resort**
- **Weather/Conditions:** NWS Pendleton API, AirNow API, Mt Bachelor conditions, Watch Duty wildfire, Avalanche Center NW
- **Outdoor:** Oregon State Parks, USFS alerts, AllTrails, Recreation.gov

### Editorial / Handcrafted
- Community guides (23 pages)
- Destination guides (18 pages)
- Weekend itineraries (12 guides)
- Seasonal guides (8 guides)
- Relocation articles (12 articles)
- Weekly "What's Happening" posts

---

## Site Architecture Summary

Full detail in `/docs/site-architecture.md`. Key URL clusters:

| Cluster | Pillar URL | Pages |
|---------|-----------|-------|
| Lifestyle & Living | `/moving-to-central-oregon` | ~15 |
| Tourism & Things To Do | `/explore` | ~20 |
| Outdoor Recreation | `/explore/hiking` | ~15 |
| Destinations | `/destinations` | ~18 |
| Community Guides | `/communities` | ~23 |

---

## Build Phases

**Phase 1 (launch-ready):**
Homepage, 5 explore hubs, 6 destination guides, 8 community pages, Moving to Bend guide, Bend Weekend Itinerary, Local Intel hub, About page

**Phase 2 (30–60 days post-launch):**
All 23 community pages, all 18 destination guides, seasonal guides, relocation articles, weekly posts live

**Phase 3 (60–90 days):**
Full editorial journal, brewery/restaurant listings, complete weekend guide library, SEO audit

---

## Working With This Repo

This repo is designed to be AI-collaborative. Any tool (Claude, ChatGPT, Perplexity) can pick up this project by reading this README and the files in `/docs`.

**When asking an AI to help:**
- Point them to this README first for full context
- Reference `/docs/site-architecture.md` for page/URL planning
- Reference `/prototypes/homepage-prototype.html` for design direction
- New content drafts go in `/content/` as `.md` files before CMS entry
- WordPress theme files go in `/wordpress/` once development begins

---

## Contact

Corey Hanson · coreyh.bend@gmail.com
