# 🎮 BitBound — SEO + AdSense Starter Pack
### WordPress (editor) + GitHub (version control) + GitHub Pages (free live site)

> **The honest architecture first:** GitHub Pages serves only static HTML/CSS/JS. It cannot run live WordPress (no PHP, no MySQL). So we do NOT pretend WordPress runs on GitHub.
>
> **What we do instead — the Hybrid WordPress workflow used by real static-WordPress sites:**
> 1. **Write in WordPress locally** (free, private) — LocalWP / XAMPP / Docker on your PC
> 2. **Version-control the theme + content** in GitHub
> 3. **Export to static HTML** with Simply Static (free, easiest) or WP2Static
> 4. **Deploy to GitHub Pages** — free HTTPS, free CDN, live at `https://bitboundclick.github.io/` — use repo name `bitboundclick.github.io` (your user site) so the URL is clean at the root, not `/gaming-blog/`
> 5. **Apply for AdSense on that live URL** once content + policy pages are ready

This gives you: WordPress writing experience, GitHub history, $0 hosting, and a site fast enough for AdSense + SEO (static = LCP often < 1.5s).

## ⚠️ AdSense reality check (so you don't waste months)

- `github.io` IS on the Public Suffix List, so Google's Sites page *can* technically accept `username.github.io` as a site. Approval is **not guaranteed** on a free subdomain — a custom domain (even a $8-10/year .com later) removes most doubt.
- Google has **no published minimum post count**, but reviewers need enough original content to judge quality. Target in this pack: **20-25 original posts, 1,000-2,000 words each, before applying**, plus About / Contact / Privacy Policy / Disclaimer.
- You must be 18+, own/edit the site HTML, and follow Google Publisher Policies.
- **Danger topics for AdSense in your list — handled safely here:**
  - ✅ ALLOWED: official single-player cheat codes, Easter eggs, skins you earn/buy legitimately, farming routes, tier lists, error fixes
  - ❌ BANNED / will get rejected: cracked games, pirated APKs/mods, hack tools, aimbots, wallhacks, currency generators, real-money trading exploits, bypassing paywalls
  - Rule in this pack: every cheat/mod/currency post must be *legitimate, in-game, and official or community-approved* — never a download that cracks the game.

## 🗂️ Repo structure

```
bitboundclick.github.io/
├── theme/                  # Custom lightweight WordPress theme (in this pack)
│   ├── style.css           # Theme header + dark gaming UI
│   ├── functions.php       # SEO schema, AdSense slots, menus, image sizes
│   ├── index.php / single.php / page.php / header.php / footer.php
├── .github/workflows/deploy.yml  # Deploy static export to GitHub Pages
├── public/                 # Static demo homepage (preview the UI now)
│   ├── index.html
│   ├── ads.txt             # Replace pub-000... with your real AdSense ID after approval steps
│   └── robots.txt
├── docs/
│   ├── SEO-ADSENSE-PLAN.md # Full SEO + AdSense checklist
│   └── CONTENT-PLAN.md     # All 10 categories, pillar posts, first 20 titles
└── content-templates/
    ├── post-template.md    # Copy-paste SEO template for every post
    ├── privacy-policy.md / about.md / contact.md / disclaimer.md
```

## 🚀 Setup in 30 minutes

### 1. Local WordPress
- Install LocalWP (free, easiest) → Create site `BitBound` → Install this theme from `theme/` (zip the folder, Appearance > Themes > Add New > Upload)
- Install plugins: **Simply Static** (export), **Rank Math** or **Yoast SEO** (SEO), **Site Kit by Google** (later, for AdSense/Search Console)
- Set Permalinks: Post name → `/%postname%/`
- Create the 10 categories below exactly (slugs matter for SEO)

### 2. GitHub
- Create repo `bitboundclick.github.io` (public — required for free GitHub Pages)
- Push this whole folder. `git push` = version control for theme + templates.
- Settings > Pages > Source: GitHub Actions (the workflow in this pack does the deploy)

### 3. Publish loop (every new post)
1. Write + publish in Local WordPress
2. Simply Static > Generate > Download ZIP (or Deploy to GitHub if using Pro/WP2Static)
3. Unzip into `public/` (or your `gh-pages` branch), commit + push
4. GitHub Pages rebuilds in ~1-2 minutes. Done. No server to patch, no database to hack.

### 4. AdSense path
1. Publish 20+ posts + 4 policy pages (templates included)
2. Add site to Google Search Console, submit sitemap (`/sitemap.xml` from Rank Math export — include it in your static export)
3. Apply in AdSense with `https://bitboundclick.github.io` — paste the verification code into `theme/header.php` (placeholder marked `ADSENSE-VERIFICATION`) and re-export
4. After approval, replace `pub-0000000000000000` in `public/ads.txt` and in the ad slots, re-export
5. Keep a Google-certified consent banner for EEA/UK visitors (AdSense > Privacy & messaging) — do not skip this in 2026

## 🎨 UI/UX system (already in theme + demo)
- Dark gaming theme: #0B0F17 background, #7C5CFF accent, #00E5A0 success, high-contrast text
- Mobile-first, sticky nav, category pills, reading progress, table of contents, related posts
- No popups on first visit, no auto-play video, no layout shift from ads — ad slots are reserved-height placeholders so Core Web Vitals stay green
- Every post: hero image (1200x630), TL;DR box, TOC, FAQ schema, pros/cons or tier table where relevant

## 🔍 SEO essentials built in
- One H1 per post, keyword in title + first 100 words + slug + meta description (150-160 chars)
- Internal linking: every post links to its pillar post + 2-3 related posts
- Schema: Article + FAQ + BreadcrumbList in `functions.php`
- Image SEO: descriptive filenames, alt text, WebP, lazy-load, width/height set
- URL structure: `/category/post-slug/` — short, readable, no dates, no numbers

## 📚 Your 10 categories (exact slugs)
1. Game Reviews — `/game-reviews/`
2. Cheat Codes & Easter Eggs — `/cheat-codes-easter-eggs/`
3. Themes & UI Mods — `/themes-ui-mods/`
4. Skins — `/character-weapon-skins/`
5. Currency & Economy — `/in-game-currency-economy/`
6. Tier Lists & Meta — `/tier-lists-meta/`
7. Fixes & Troubleshooting — `/error-fixes-troubleshooting/`
8. Farming Guides — `/resource-farming/`
9. Indie Spotlights — `/indie-game-spotlights/`
10. Retro Classics — `/retro-classic-gaming/`

Full titles, keywords and outlines: see `docs/CONTENT-PLAN.md`.

## ✅ Finalized for BitBound
- **Blog name:** BitBound
- **GitHub:** https://github.com/BitBoundclick
- **Live site (after first push):** https://bitboundclick.github.io/
- **AdSense site to add later:** `bitboundclick.github.io`
- **Sitemap:** https://bitboundclick.github.io/sitemap.xml
- **ads.txt:** https://bitboundclick.github.io/ads.txt

## First push (copy-paste)
```bash
# In the folder containing this pack, after creating the repo on GitHub:
git init
git add .
git commit -m "BitBound: initial starter pack"
git branch -M main
git remote add origin https://github.com/BitBoundclick/bitboundclick.github.io.git
git push -u origin main
# Then: GitHub repo > Settings > Pages > Source: GitHub Actions
# Your demo homepage in public/ will be live at https://bitboundclick.github.io/
# Later, replace public/ contents with your Simply Static export — same workflow, same URL.
```

Next step: say the word and I'll write the first 5 full posts (GTA 5 cheats, Elden Ring review, startup-crash fixes, Minecraft UI mods, Minecraft farming) in the post template, ready to paste into WordPress.
