# GitHub Setup — Run These Commands

Copy and paste each block into Terminal in order.

---

## Step 1 — Open Terminal and go to the project folder

```bash
cd "/Users/coreyhanson/Documents/Claude/Projects/MCOH"
```

---

## Step 2 — Clean up the partial .git folder and reinitialize

```bash
rm -rf .git
git init
git checkout -b main
git config user.email "coreyh.bend@gmail.com"
git config user.name "Corey Hanson"
```

---

## Step 3 — Stage and commit everything

```bash
git add -A
git commit -m "Initial commit — MCOH homepage prototype, site architecture, and project structure"
```

You should see a confirmation listing the files committed.

---

## Step 4 — Create the repo on GitHub

1. Go to **https://github.com/new**
2. Repository name: `mcoh-website`
3. Description: `Make Central Oregon Home — website build`
4. Set to **Private**
5. Do NOT check "Add a README" (we already have one)
6. Click **Create repository**

---

## Step 5 — Connect your local repo to GitHub and push

GitHub will show you these commands after you create the repo. They'll look like this — replace `YOUR_USERNAME` with your actual GitHub username:

```bash
git remote add origin https://github.com/YOUR_USERNAME/mcoh-website.git
git push -u origin main
```

GitHub will ask for your username and password. For the password, use a **Personal Access Token** (not your GitHub password):
- Go to https://github.com/settings/tokens
- Click "Generate new token (classic)"
- Give it a name like "MCOH local"
- Check the `repo` scope
- Copy the token and use it as your password

---

## Step 6 — Verify

Go to `https://github.com/YOUR_USERNAME/mcoh-website` — you should see all your files with the README displayed.

---

## Once it's live, come back and tell me the repo URL

I'll connect the GitHub MCP so future sessions can push changes directly without you needing to run Terminal commands.
