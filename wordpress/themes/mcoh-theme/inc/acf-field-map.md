# ACF Field Map

This file documents the structured field architecture for the Make Central Oregon Home WordPress build. It can be implemented manually in ACF Pro or converted into ACF JSON later.

## Community Fields

Field group: Community Guide Details
Post type: community

Fields:

- Community Summary
- Lifestyle Vibe
- Best For
- Location Context
- Nearby Parks
- Nearby Trails
- Coffee and Restaurants
- Breweries and Tap Houses
- Schools Overview
- Housing Overview
- Market Snapshot
- Commute Notes
- Local Pros
- Local Considerations
- Featured CTA Label
- Featured CTA URL
- Related Destinations
- Related Guides

## Destination Fields

Field group: Destination Guide Details
Post type: destination

Fields:

- Destination Summary
- Region
- Best Season
- Best For
- Activities
- Parking Notes
- Accessibility Notes
- Insider Tips
- Nearby Food and Drink
- Nearby Communities
- Coordinates
- Map Embed URL
- Related Itinerary
- Related Communities

## Event Fields

Field group: Event Details
Post type: event

Fields:

- Event Date
- Event End Date
- Venue Name
- Venue Address
- Event URL
- Ticket URL
- Cost
- Event Category
- Community
- Source Name
- Source URL

## Local Intel Fields

Field group: Local Intel Details
Post type: local_intel

Fields:

- Intel Type
- Source Name
- Source URL
- External Link
- Severity
- Region
- Expiration Date
- Display In Ticker
- Display On Homepage

## Brewery Fields

Field group: Brewery Details
Post type: brewery

Fields:

- Brewery Summary
- Address
- Community
- Website
- Food Options
- Patio
- Dog Friendly
- Live Music
- Family Friendly
- Best Known For
- Hours Notes
- Related Events

## Implementation Notes

Keep field names simple and reusable. Do not overbuild early. The first goal is to make community, destination, event, and intel pages easy to publish consistently.

Recommended implementation method:

1. Create ACF field groups manually in WordPress.
2. Export field groups as JSON.
3. Save exported JSON in `wordpress/themes/mcoh-theme/acf-json/`.
4. Keep this file as the readable strategy reference.
