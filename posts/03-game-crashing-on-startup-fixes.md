# Game Crashing on Startup? 10 Fixes That Actually Work (PC, Steam & Console)

**Slug:** `/error-fixes-troubleshooting/game-crashing-on-startup-fixes/`
**Category:** Fixes & Troubleshooting
**Meta description (159 chars):** Game crashes on startup or won't launch? Try these 10 proven fixes in order — drivers, verify files, overlays, corrupted saves and more, for PC and console.
**Primary keyword:** game crashing on startup fix
**Secondary keywords:** game won't launch Steam, game crashes on loading screen, how to fix game crash PC
**Featured image:** `game-crashing-on-startup-fixes.jpg` (1200x630) — Alt: "PC game crashing on startup troubleshooting checklist"

## TL;DR
Do these in order, and test the game after each step — do not do all 10 at once, or you will never know what fixed it: 1) Restart the PC/console, 2) Update GPU drivers, 3) Verify game files, 4) Run as administrator / check permissions, 5) Disable overlays, 6) Update Windows and DirectX/Visual C++, 7) Close background apps and check RAM/disk, 8) Delete shader cache or a corrupted config (not your saves), 9) Reinstall on an SSD with space, 10) Check the game's official status page — sometimes it is not you, it is the server.

## Before you start: 2 minutes that save an hour
- Note the exact error: a code, a black screen, a freeze on the logo, or a crash to desktop? Screenshot it. "It crashes" is not searchable; "Elden Ring white screen crash on launch after update" is.
- Check if the game worked before. If it broke after an update, a driver update, or a new mod, that change is your prime suspect — undo it first.
- Back up your saves before deleting anything. On Steam, saves are often in Documents or AppData, and Steam Cloud does not cover every game.

## Fix 1: Restart — properly
Close the game, close Steam/launcher completely (check the system tray), then restart the PC or console. A surprising number of "crash on launch" reports are a stuck process or a driver that did not load cleanly. On console, do a full power cycle, not just rest mode: hold power, unplug for 30 seconds, plug back in.

## Fix 2: Update your GPU drivers
Outdated or corrupted graphics drivers are the #1 cause of launch crashes on PC.

- NVIDIA: GeForce Experience > Drivers > Check for updates, or nvidia.com/drivers
- AMD: AMD Software > Check for updates, or amd.com/support
- Intel: Intel Driver & Support Assistant

Do a clean install if you have the option. If the crash started *right after* a driver update, roll back to the previous driver — new drivers occasionally break a specific game.

## Fix 3: Verify / repair game files (Steam, Epic, console)
This checks for missing or corrupted files without a full reinstall.

- **Steam:** Library > Right-click game > Properties > Installed Files > Verify integrity of game files
- **Epic:** Library > Three dots > Manage > Verify
- **Xbox app / Battle.net:** Similar "Scan and Repair" / "Verify" option
- **Console:** Check for a game update, then if needed delete and reinstall — consoles verify on install.

If verification downloads files every time, your drive may be failing or your antivirus may be quarantining game files (see Fix 5).

## Fix 4: Run as administrator and check permissions
Right-click the game or launcher > Run as administrator. If that fixes it, the game was being blocked from writing to a folder it needs. Also check that the game folder is not set to Read-only, and that your Windows user account has write access to Documents and AppData.

## Fix 5: Disable overlays and background software
Discord overlay, Steam overlay, GeForce Experience overlay, MSI Afterburner / RivaTuner, and some RGB software conflict with games at launch. Disable overlays one by one (Steam: Settings > In-Game > Enable Steam Overlay; Discord: Settings > Game Overlay) and close Afterburner temporarily to test. Add the game folder to your antivirus exclusions only if you trust the source — never disable antivirus entirely to play a game from an untrusted download.

## Fix 6: Update Windows, DirectX and Visual C++ Redistributables
Many launch crashes are a missing Visual C++ runtime. In Steam, these are usually in the game's `_CommonRedist` folder — run them manually if verification did not. Then run Windows Update. Restart after updates; do not skip that step.

## Fix 7: Free up RAM, disk and CPU
- Close Chrome with 40 tabs, OBS, and other heavy apps for the test launch.
- Keep at least 15-20GB free on the drive the game is installed on. Games need space for shader caches and temporary files.
- Check Task Manager: if RAM is at 95%+ before you even launch, something else is the problem.

## Fix 8: Clear shader cache and reset config (not saves)
A corrupted config or shader cache can crash a game before the menu appears.

- Delete the shader cache folder for the game (often in AppData or the game's folder — search "[game name] shader cache location" first).
- Rename (do not delete) the config file so the game creates a fresh one. If it launches, your old config was corrupt. You can then restore settings gradually.
- **Do not delete your save folder.** Rename it as a backup instead, and test with a fresh save only as a diagnostic step.

## Fix 9: Reinstall — on the right drive
If nothing else works, uninstall and reinstall, preferably on an SSD rather than a slow HDD, with the launcher also updated. A clean reinstall rules out deep file corruption. This is last, not first, because it takes the longest and rarely fixes what verification missed.

## Fix 10: Check if it is a server or known bug
Search "[game name] crash on startup [today's date]" and check the developer's X/Twitter, Discord, Steam forums, and status page. If hundreds of players report the same crash after the same patch, wait for a hotfix — no amount of reinstalling will fix a broken patch, and you will save yourself a wasted afternoon.

## Console-specific notes
- **PS5/PS4:** Rebuild Database (Safe Mode) can fix corrupted data without deleting games. As a last resort, delete and reinstall the game.
- **Xbox:** Clear local saved games is *not* the first step — it deletes local saves. Try a full power cycle and reinstall first.
- **Switch:** Check for corrupt data in System Settings > Data Management > Manage Software > Check for Corrupt Data.

## Mistakes to avoid
- Do not download "DLL fixer" tools, "game booster" cracks, or random DLL files from the internet. They are a top malware vector and often cause more crashes.
- Do not edit the Windows Registry unless a trusted official guide tells you to, for that specific game.
- Do not delete your entire save folder in frustration. Rename, back up, then test.

## FAQ

**Why does my game crash only on startup, but other games work?**
Because the problem is usually specific to that game: its files, its config, its shader cache, or a driver interaction with that engine. That is why verifying *that* game's files and resetting *its* config helps when other games are fine.

**Should I reinstall Windows?**
Almost never for one game crashing. Try every fix above, contact the developer's support with your error screenshot and specs, and only consider a Windows reinstall if *many* programs are crashing.

**Does verifying game files delete my saves?**
No — verification checks game install files, not your personal save files. Still, back up saves before any troubleshooting, just in case.

## Related posts on BitBound
- Pillar: PC & Console Game Crashes? A Step-by-Step Troubleshooting Checklist That Actually Works
- Elden Ring Beginner Review: Is It Still Worth Playing in 2026?
- Best Safe UI Mods for Minecraft
