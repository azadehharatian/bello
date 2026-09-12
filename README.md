# Bello - The Social Robot for Meaningful Connections

Bello is a fun, talkative, and secure social robot designed to support elderly individuals with dementia. It uses native AI (no continuous cloud API required) to ensure lightning-fast responses and unparalleled privacy, fully compliant with GDPR.

## Features
- **Meaningful Conversations:** Uses past memories to engage in personalized, familiar interactions in the user's native language.
- **Native AI System:** Completely self-contained intelligence for maximum privacy.
- **Helpful & Fun:** Plays music, tells stories, and assists with daily tasks.

## Tech Stack
- **Frontend:** HTML5, CSS3 (Custom Dark Mode & Glassmorphism Design), Vanilla JavaScript
- **Backend:** PHP (Form handling)

## Running Locally

To run this project locally, you can use PHP's built-in server:

```bash
# Navigate to the project directory
cd bello

# Start the PHP server
php -S localhost:8000
```

Then, open `http://localhost:8000` in your browser.

## Deployment on Vercel

This project includes a `vercel.json` configuration file, which uses the `vercel-php` community runtime to execute the `contact.php` script on Vercel's serverless infrastructure.

To deploy on Vercel:

1. Push your code to a GitHub repository (already done!).
2. Go to your [Vercel Dashboard](https://vercel.com/dashboard) and click **Add New > Project**.
3. Import the `bello` GitHub repository.
4. Vercel will automatically detect the configuration and deploy your site, including the PHP backend.

Alternatively, using the Vercel CLI:
```bash
npm i -g vercel
vercel
```
