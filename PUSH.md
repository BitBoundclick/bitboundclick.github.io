# Push BitBound to GitHub — Step by Step

**Repo name (exact):** `bitboundclick.github.io`
**Live URL after deploy:** https://bitboundclick.github.io/
**Why I can't push it for you from here:** pushing to your GitHub needs *your* GitHub login. Never send your password or Personal Access Token to me (or anyone) in chat. Use one of the methods below — in all of them, GitHub asks you directly, not through chat.

## Step 0 — Create the empty repo (all methods)
1. Go to https://github.com/new (sign in as BitBoundclick)
2. Repository name: `bitboundclick.github.io` — exactly this, no spaces
3. Public, do NOT tick "Add a README" (your pack already has one — ticking it creates a conflict)
4. Create repository. Leave that page open.

## Method A — Easiest, no terminal (GitHub website upload)
1. Download `bitbound-github-pack.zip` from Muse, unzip it on your computer.
2. On your new empty repo page: **Add file > Upload files**
3. Drag the *contents* of the unzipped `gaming-blog` folder (README.md, SITE.md, docs/, posts/, public/, theme/, .github/) into the upload area — not the outer folder itself, or you will get `gaming-blog/gaming-blog/`.
   - Hidden folders: if `.github` does not show in your file picker, drag it from your file manager, or upload it second via Add file > Create new file is not needed — most browsers upload hidden folders when you drag the whole folder.
4. Commit changes (green button, bottom).
5. Go to **Settings > Pages > Build and deployment > Source: GitHub Actions**.
6. Go to **Actions** tab, wait for "Deploy to GitHub Pages" to go green (1-3 minutes), then visit https://bitboundclick.github.io/

If the workflow does not appear: check Settings > Pages source is GitHub Actions, and that `.github/workflows/deploy.yml` is in the repo.

## Method B — Recommended if you will update often (GitHub Desktop, no token typing)
1. Install GitHub Desktop, sign in — it signs you in through your browser (OAuth), no token to copy.
2. File > Clone repository > URL: `https://github.com/BitBoundclick/bitboundclick.github.io.git` — clone to your computer.
3. Copy all files from the unzipped pack into that cloned folder.
4. GitHub Desktop will show all changes: write "BitBound: initial starter pack", Commit, then **Push origin**.
5. Settings > Pages > Source: GitHub Actions, as in Method A, step 5-6.

## Method C — Terminal (for users comfortable with git)
On your computer, in the unzipped pack folder:
```bash
git init -b main
git add .
git commit -m "BitBound: initial starter pack"
git remote add origin https://github.com/BitBoundclick/bitboundclick.github.io.git
git push -u origin main
```
When GitHub asks for a password, use a Personal Access Token, not your GitHub password:
GitHub > Settings (your profile) > Developer settings > Personal access tokens > Tokens (classic) > Generate new token > scopes: `repo` and `workflow` > Generate, copy it once, paste it at the password prompt in your terminal only.
Then Settings > Pages > Source: GitHub Actions, as above.

## After it is live — check these
- [ ] https://bitboundclick.github.io/ shows the BitBound demo homepage
- [ ] https://bitboundclick.github.io/robots.txt loads
- [ ] https://bitboundclick.github.io/ads.txt loads (placeholder pub ID for now — replace after AdSense approval)
- [ ] Actions tab shows a green deploy

## Troubleshooting
- **404 after push:** Wait 2-3 minutes, hard-refresh (Ctrl+Shift+R). Check Actions tab for a failed run and Pages source = GitHub Actions.
- **"Repository already exists" / conflict:** You ticked "Add a README" at creation. Delete that repo and recreate it empty, or pull first — easiest is recreate.
- **Push rejected / authentication failed (terminal):** You used your GitHub password instead of a token, or the token lacks `workflow` scope. Create a new token with `repo` + `workflow`.
- **Files land in a subfolder:** You uploaded the outer `gaming-blog` folder instead of its contents. Move them up one level or re-upload correctly.

## Every future update (new post)
Write in WordPress > Simply Static export > replace the files in `public/` with the new export > commit > push. The workflow redeploys automatically. Theme/docs/posts changes in the repo are your version history — the live site only serves `public/`.
