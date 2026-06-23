## Security measures/hardeaning 
### 1. Security Headers
Security Headers help your site tell the browser:

- Do not embed this site inside unknown iframes.
- Do not guess MIME/file types.
- Do not allow unnecessary browser permissions.
- Only load scripts, styles, images, and fonts from allowed sources.
- Reduce exposure to clickjacking and some client-side attacks.

CSP, or Content Security Policy, helps restrict what resources the page is allowed to load, and X-Frame-Options helps control whether the page can be rendered inside a frame or iframe.