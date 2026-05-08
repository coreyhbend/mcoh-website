# Make Central Oregon Home — Site Architecture
**makecentraloregonhome.com · WordPress Build Blueprint**

---

## Platform & Build Notes

- **CMS**: WordPress (self-hosted)
- **Theme approach**: Custom theme built from homepage prototype HTML
- **Page builder**: None preferred — clean PHP templates for performance and SEO control
- **SEO plugin**: Yoast SEO or RankMath
- **Feed aggregation**: WP RSS Aggregator (news/events), custom widgets for weather/conditions
- **Image hosting**: Cloudinary or Cloudflare Images for CDN-delivered media
- **Performance**: Cloudflare CDN, WP Rocket caching, Webp images throughout

---

## Site URL Structure & Sitemap

### Homepage
| URL | Template | Priority |
|-----|----------|----------|
| `/` | Homepage | Critical |

---

### Explore — Category Hubs
Each category hub = hero + editorial intro + curated listings/guides + related content feed.

| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/explore` | Explore Central Oregon | things to do in Central Oregon |
| `/explore/breweries` | Breweries & Tap Houses | Central Oregon breweries |
| `/explore/restaurants` | Best Restaurants | best restaurants in Bend Oregon |
| `/explore/coffee` | Coffee Shops | best coffee shops in Bend |
| `/explore/food-trucks` | Food Trucks | food trucks in Bend Oregon |
| `/explore/hiking` | Hiking & Trails | hiking Central Oregon |
| `/explore/family` | Family Activities | family things to do Bend Oregon |
| `/explore/dog-friendly` | Dog Friendly | dog friendly Bend Oregon |
| `/explore/lakes` | Lakes & Paddleboarding | lakes near Bend Oregon |
| `/explore/winter` | Winter Activities | winter activities Central Oregon |
| `/explore/skiing` | Mt Bachelor & Skiing | skiing Mt Bachelor |
| `/explore/scenic-drives` | Scenic Drives | scenic drives Central Oregon |
| `/explore/weekend-getaways` | Weekend Getaways | weekend trips from Bend Oregon |
| `/explore/hidden-gems` | Hidden Gems | hidden gems Central Oregon |
| `/explore/live-music-events` | Live Music & Events | live music Bend Oregon |

---

### Destinations — Location Hubs
Each destination = long-form guide, map, insider tips, photo gallery, related activities, itinerary.

| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/destinations` | Featured Destinations | Central Oregon destinations |
| `/destinations/smith-rock` | Smith Rock State Park | Smith Rock State Park guide |
| `/destinations/mt-bachelor` | Mt Bachelor | Mt Bachelor skiing and summer |
| `/destinations/cascade-lakes-highway` | Cascade Lakes Scenic Highway | Cascade Lakes Highway guide |
| `/destinations/sisters-oregon` | Sisters Oregon | things to do Sisters Oregon |
| `/destinations/sunriver` | Sunriver Oregon | Sunriver resort Oregon |
| `/destinations/tumalo-falls` | Tumalo Falls | Tumalo Falls hiking guide |
| `/destinations/high-desert-museum` | High Desert Museum | High Desert Museum Bend |
| `/destinations/old-mill-district` | Old Mill District | Old Mill District Bend Oregon |
| `/destinations/sparks-lake` | Sparks Lake | Sparks Lake Oregon kayaking |
| `/destinations/kah-nee-ta` | Kah-Nee-Ta & Warm Springs | Kah-Nee-Ta resort Warm Springs Oregon |
| `/destinations/newberry-volcano` | Newberry National Volcanic Monument | Newberry Volcano Oregon |
| `/destinations/ochoco-national-forest` | Ochoco National Forest | Ochoco National Forest hiking |
| `/destinations/lake-billy-chinook` | Lake Billy Chinook | Lake Billy Chinook Oregon |
| `/destinations/indian-head-casino` | Indian Head Casino | Indian Head Casino Warm Springs |
| `/destinations/prineville-reservoir` | Prineville Reservoir | Prineville Reservoir camping |
| `/destinations/hayden-homes-amphitheater` | Hayden Homes Amphitheater | Hayden Homes Amphitheater concerts |
| `/destinations/drake-park` | Drake Park Bend | Drake Park Bend Oregon |

---

### Communities — Neighborhood & Town Guides
Each community page = lifestyle profile, housing overview, schools, walkability, recreation, pros/cons, local flavor.

| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/communities` | Central Oregon Communities Guide | living in Central Oregon |
| **Bend Neighborhoods** | | |
| `/communities/northwest-crossing` | Northwest Crossing Bend | Northwest Crossing Bend Oregon |
| `/communities/midtown-bend` | Midtown Bend | Midtown Bend neighborhood |
| `/communities/old-farm-district` | Old Farm District Bend | Old Farm District Bend Oregon |
| `/communities/awbrey-butte` | Awbrey Butte Bend | Awbrey Butte Bend Oregon |
| `/communities/river-west` | River West Bend | River West Bend Oregon |
| `/communities/southeast-bend` | Southeast Bend | Southeast Bend Oregon |
| `/communities/mountain-view-bend` | Mountain View Bend | Mountain View neighborhood Bend |
| `/communities/tetherow` | Tetherow Bend | Tetherow resort community Bend |
| `/communities/orchard-district` | Orchard District Bend | Orchard District Bend Oregon |
| **Greater Bend** | | |
| `/communities/redmond-oregon` | Living in Redmond Oregon | moving to Redmond Oregon |
| `/communities/tumalo` | Tumalo Oregon | living in Tumalo Oregon |
| `/communities/terrebonne` | Terrebonne Oregon | Terrebonne Oregon Smith Rock |
| `/communities/powell-butte` | Powell Butte Oregon | Powell Butte Oregon rural |
| `/communities/alfalfa` | Alfalfa Oregon | Alfalfa Oregon Bend area |
| **Mountain & Resort Towns** | | |
| `/communities/sisters-oregon` | Living in Sisters Oregon | moving to Sisters Oregon |
| `/communities/sunriver-community` | Living in Sunriver Oregon | buying a home in Sunriver Oregon |
| `/communities/la-pine` | La Pine Oregon | living in La Pine Oregon |
| `/communities/camp-sherman` | Camp Sherman Oregon | Camp Sherman Metolius River |
| **High Desert & Regional** | | |
| `/communities/prineville` | Living in Prineville Oregon | moving to Prineville Oregon |
| `/communities/madras` | Living in Madras Oregon | Madras Oregon Jefferson County |
| `/communities/warm-springs` | Warm Springs Oregon | Warm Springs Oregon Kah-Nee-Ta |
| `/communities/culver` | Culver Oregon | Culver Oregon Lake Billy Chinook |
| `/communities/maupin` | Maupin Oregon | Maupin Oregon white water rafting |

---

### Local Intel — Live Feed Hub
| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/local-intel` | Central Oregon Local Intel | what's happening in Bend Oregon |
| `/local-intel/events` | Events This Week | events in Bend Oregon this weekend |
| `/local-intel/weather` | Central Oregon Weather | Bend Oregon weather conditions |
| `/local-intel/trail-conditions` | Trail Conditions | Central Oregon trail conditions |
| `/local-intel/fire-smoke` | Fire & Smoke Conditions | Central Oregon smoke conditions |
| `/local-intel/news` | Central Oregon News | Central Oregon news |

---

### Relocation Guides
| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/moving-to-central-oregon` | Moving to Central Oregon Guide | moving to Central Oregon |
| `/moving-to-bend` | Moving to Bend Oregon — Complete Guide | moving to Bend Oregon |
| `/moving-to-redmond` | Moving to Redmond Oregon | moving to Redmond Oregon |
| `/moving-to-sisters` | Moving to Sisters Oregon | moving to Sisters Oregon |
| `/bend-vs-redmond` | Bend vs Redmond Oregon — Which is Right for You? | Bend vs Redmond Oregon |
| `/cost-of-living-bend` | Cost of Living in Bend Oregon | cost of living Bend Oregon |
| `/remote-work-bend` | Working Remotely in Bend Oregon | remote work Bend Oregon |
| `/schools-central-oregon` | Schools in Central Oregon | Central Oregon schools guide |
| `/weather-central-oregon` | Central Oregon Weather — What to Expect | Central Oregon climate and weather |

---

### Seasonal Guides
| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/guides/summer` | Summer in Central Oregon — Complete Guide | things to do in Central Oregon summer |
| `/guides/winter` | Winter in Central Oregon — Complete Guide | winter activities Central Oregon |
| `/guides/fall` | Fall in Central Oregon | fall Central Oregon |
| `/guides/spring` | Spring in Central Oregon | spring activities Bend Oregon |
| `/guides/smoke-season` | Central Oregon Smoke Season Guide | smoke season Bend Oregon |
| `/guides/wildflowers` | Wildflower Season Central Oregon | wildflowers Central Oregon |
| `/guides/snow-conditions` | Central Oregon Snow Conditions | snow report Central Oregon |

---

### Weekend & Day Trip Guides
| URL | Page Title | Primary Keyword Target |
|-----|-----------|------------------------|
| `/weekend-guides` | Weekend Guides — Central Oregon | weekend in Bend Oregon |
| `/weekend-guides/bend-weekend-itinerary` | 48 Hours in Bend Oregon | weekend itinerary Bend Oregon |
| `/weekend-guides/smith-rock-day-trip` | Smith Rock Day Trip Guide | Smith Rock day trip from Bend |
| `/weekend-guides/cascade-lakes-day` | Cascade Lakes Day Trip | Cascade Lakes day trip |
| `/weekend-guides/sisters-day-trip` | Day Trip to Sisters Oregon | Sisters Oregon day trip from Bend |
| `/weekend-guides/kah-nee-ta-road-trip` | Kah-Nee-Ta Weekend Trip | Kah-Nee-Ta road trip from Bend |
| `/weekend-guides/maupin-rafting` | Maupin Rafting Weekend | white water rafting Maupin Oregon |
| `/weekend-guides/sunriver-family-weekend` | Sunriver Family Weekend Guide | Sunriver Oregon family vacation |
| `/weekend-guides/prineville-ochoco` | Prineville & the Ochocos Weekend | Ochoco National Forest camping |

---

### Editorial Blog — "The Journal"
| URL | Page Title | Frequency |
|-----|-----------|-----------|
| `/journal` | Central Oregon Journal — Local Stories & Guides | Hub |
| `/journal/whats-happening-this-week` | What's Happening in Bend This Week | Weekly |
| `/journal/brewery-roundups` | Bend Brewery Roundup posts | Monthly |
| `/journal/hidden-gems` | Hidden Gem features | Ongoing |
| `/journal/restaurant-guides` | Restaurant guide posts | Ongoing |
| `/journal/local-business-features` | Local business spotlights | Ongoing |
| `/journal/community-spotlights` | Community spotlight features | Monthly |

---

### Static / Utility Pages
| URL | Page Title |
|-----|-----------|
| `/about` | About Make Central Oregon Home |
| `/contact` | Contact |
| `/advertise` | Work With Us |
| `/privacy` | Privacy Policy |
| `/terms` | Terms of Use |
| `/sitemap` | Sitemap |

---

## Content Source Mapping

### Dynamic Feed Sections (WordPress auto-aggregation via RSS/API)

| Section | Sources | Update Frequency |
|---------|---------|-----------------|
| Live Ticker | Source Weekly RSS, Bend Buzz RSS, KTVZ RSS, Visit Bend events | Every 2–4 hours |
| Events Cards | Visit Bend API, Eventbrite Central Oregon, Hayden Homes, Chamber calendars, Indian Head Casino, Kah-Nee-Ta events | Daily |
| Weather/Conditions | NWS Pendleton API (lat/lon for Bend), AirNow API | Every hour |
| Trail Conditions | Oregon State Parks RSS, USFS alerts | Daily |
| Fire/Smoke | Watch Duty RSS, AirNow API | Hourly during fire season |
| Mt Bachelor Conditions | Mt Bachelor conditions feed | Daily in season |
| News Feed | KTVZ, Central Oregon Daily, Bend Bulletin, OPB Oregon | Every 4 hours |
| Brewery Events | Individual brewery calendars via RSS or embedded widgets | Weekly |

---

### Static / Handcrafted Content (one-time creation, periodic updates)

| Content Type | Quantity (Phase 1) | Quantity (Full build) |
|-------------|-------------------|----------------------|
| Community guides | 10 | 23 |
| Destination guides | 8 | 18 |
| Weekend itineraries | 4 | 12 |
| Seasonal guides | 2 | 8 |
| Relocation articles | 4 | 12 |
| Explore category hubs | 8 | 15 |
| Journal/editorial posts | 10 | Ongoing |

---

## Page Template Types

| Template Name | Used For | Key Features |
|--------------|---------|--------------|
| `template-homepage.php` | Homepage only | Full sections, live feed widgets, hero |
| `template-category-hub.php` | Explore categories | Grid of cards, featured articles, live feed sidebar |
| `template-destination.php` | Destination guides | Hero image, map embed, itinerary, related content |
| `template-community.php` | Community guides | Lifestyle overview, stats, schools, pros/cons |
| `template-intel.php` | Local Intel hub | Full live feed, tabbed by category |
| `template-guide.php` | Relocation, seasonal, weekend guides | Long-form editorial, table of contents |
| `template-journal.php` | Blog/journal archive | Editorial grid, category filters |
| `single-post.php` | Individual journal posts | Article layout, related posts, community |
| `template-landing.php` | About, Contact, Advertise | Simple, clean, minimal |

---

## WordPress Plugin Stack (Recommended)

| Plugin | Purpose |
|--------|---------|
| RankMath Pro | SEO, schema markup, sitemap |
| WP RSS Aggregator | Pull news/events from RSS feeds |
| WP Rocket | Performance and caching |
| Cloudflare | CDN, DDoS, edge caching |
| Gravity Forms | Newsletter signup, contact forms |
| The Events Calendar | Native event management + display |
| Advanced Custom Fields Pro | Custom fields for community/destination templates |
| Cloudinary | Image optimization and CDN delivery |
| WP Maintenance Mode | Dev-mode page while building |
| UpdraftPlus | Automated backups |

---

## SEO Topical Authority Clusters

The site should build topical authority around five core clusters. Each cluster should have a pillar page + 8–15 supporting pages internally linked.

### Cluster 1: Central Oregon Lifestyle & Living
- Pillar: `/moving-to-central-oregon`
- Supports: All community guides, cost of living, schools, remote work, weather

### Cluster 2: Bend Tourism & Things To Do
- Pillar: `/explore`
- Supports: All explore category hubs, weekend guides, restaurant/brewery guides

### Cluster 3: Central Oregon Outdoor Recreation
- Pillar: `/explore/hiking`
- Supports: Trail guides, Smith Rock, Cascade Lakes, seasonal guides, ski/winter

### Cluster 4: Central Oregon Destinations
- Pillar: `/destinations`
- Supports: All individual destination guides, day trip guides, weekend itineraries

### Cluster 5: Neighborhoods & Community Guides
- Pillar: `/communities`
- Supports: All 23 community pages, Bend vs Redmond, neighborhood comparison content

---

## Phase 1 Build Priority (Launch-Ready)

**High priority — build before launch:**
1. Homepage (prototype complete)
2. 5 Explore category hubs (Breweries, Hiking, Events, Family, Restaurants)
3. 6 Destination guides (Smith Rock, Mt Bachelor, Sisters, Cascade Lakes, Kah-Nee-Ta, Old Mill)
4. 8 Community pages (NW Crossing, Midtown, Redmond, Sisters, Sunriver, Prineville, La Pine, Warm Springs)
5. Moving to Bend guide
6. Bend Weekend Itinerary
7. Local Intel hub (with live feeds active)
8. About page

**Phase 2 — 30–60 days post-launch:**
- Remaining community guides (all 23)
- Remaining destination guides (all 18)
- All seasonal guides
- All relocation articles
- Weekly What's Happening posts live

**Phase 3 — 60–90 days:**
- Full editorial journal rolling
- Brewery/restaurant individual listing pages
- Weekend guide complete library
- SEO audit and internal link optimization
