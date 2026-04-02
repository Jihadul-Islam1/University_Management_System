# DIM — Simple PHP Website

A small PHP-based website template for a personal site or small project showcase. It contains basic pages (home, about, blog, projects, contact), simple routing via separate PHP files, and a configuration file for settings.

## Features

- Minimal PHP site structure with separate page files: `index.php`, `about.php`, `blog.php`, `contact.php`, `course.php`, `project.php`, `login.php`.
- Central configuration: `setting/config.php` for database or site settings.
- Static assets: `style.css`, `script.js`, and `Picture/` for images.
- Easy to customize and deploy on any PHP-enabled host.

## Project Structure

- `index.php` — Home page
- `about.php` — About page
- `blog.php` — Blog listing
- `contact.php` — Contact form
- `course.php` — Course page
- `project.php` — Projects page
- `login.php` — Login/auth stub
- `style.css` / `script.js` — Frontend assets
- `Picture/` — Images
- `setting/config.php` — Configuration (DB / site constants)

## Requirements

- PHP 7.4+ (or compatible)
- For local testing: XAMPP, WAMP, or similar
- (Optional) MySQL if the site uses a database via `setting/config.php`

## Installation (Local)

1. Install XAMPP or another local PHP server.
2. Place the project folder in your webserver root (e.g., `C:\xampp\htdocs\dim`).
3. If needed, update `setting/config.php` with database credentials.
4. Open `http://localhost/dim/` in your browser.

## Notes on Deployment

- This repository contains PHP files; GitHub Pages does not run PHP. To host a live site, deploy to a PHP-capable host (shared hosting, DigitalOcean, Heroku with PHP buildpack, etc.). GitHub can still host the source code.

## How to publish this repo to GitHub

Replace `YOUR-REPO-NAME` with your desired repository name and run these commands in the project folder.

```bash
git init
git add .
git commit -m "Add project files and README"
# create repo on GitHub (use gh CLI) or create manually on github.com
# If you have GitHub CLI installed:
# gh repo create YOUR-REPO-NAME --public --source=. --remote=origin --push
# Or add remote manually and push:
# git remote add origin https://github.com/YOUR-USERNAME/YOUR-REPO-NAME.git
# git branch -M main
# git push -u origin main
```

If you want me to upload (create the GitHub repo and push) now, tell me:

- The GitHub repository name you want.
- Whether to make it `public` or `private`.
- How you'd like to authenticate (I can use `gh` if configured in this environment, or you can provide instructions to use a Personal Access Token locally).

## License

Choose a license you prefer (MIT recommended). If you want, I can add a `LICENSE` file for you.

---

Created README for the project. Let me know if you want edits or want me to push to GitHub now.