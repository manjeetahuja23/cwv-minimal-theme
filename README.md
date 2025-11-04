# CWV Minimal Theme

A lightweight WordPress theme scaffold focused on Core Web Vitals and accessibility.

## Features
- Semantic HTML templates with lazy-loading media and skip links.
- Minimal CSS and JS optimized for fast Largest Contentful Paint (LCP).
- SEO-ready metadata, JSON-LD schema, and clean navigation structure.
- Docker Compose and wp-env support for rapid local development.

## Core Web Vitals Targets
- **LCP:** < 2.5 seconds
- **CLS:** < 0.1
- **TBT:** < 200 ms

## Quick Start
```bash
wp-env start
```

or using Docker Compose:
```bash
docker compose up -d
```

## Run Lighthouse
```bash
lighthouse https://example.test --preset=desktop --view
```

## Screenshots Checklist
- ✅ Front page hero
- ✅ Navigation and footer
- ✅ Product landing page sections
- ✅ Mobile viewport hero and CTA

## License
MIT © 2025 Manjeet Ahuja
