# CWV Documentation

## Running Lighthouse
1. Start the environment with `wp-env start` or `docker compose up -d`.
2. Visit the site URL (e.g., http://localhost:8080) and ensure key pages load.
3. Run Lighthouse from Chrome DevTools or via CLI, targeting desktop and mobile.
4. Record metrics in `docs/cwv-report.md` after each run.

## Screenshot Checklist
- Front page hero on desktop and mobile.
- Navigation and footer interactions.
- Product landing page hero, benefits, and FAQ sections.
- Performance panel showing Core Web Vitals scores.

## Interpreting Metrics
- **Largest Contentful Paint (LCP):** Measures loading speed. Aim for < 2.5s.
- **Cumulative Layout Shift (CLS):** Stability. Values < 0.1 indicate minimal shifting.
- **Total Blocking Time (TBT):** Interactivity. Keep < 200ms to ensure responsiveness.
