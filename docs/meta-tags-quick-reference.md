# Meta Tags Quick Reference
## For Next.js Implementation

### Essential Meta Tags

```jsx
// Primary Meta Tags
<title>Viraj Kadam | Viraj Kadam Software Developer | Contact Viraj Kadam | hiVirajKadam</title>
<meta name="description" content="Viraj Kadam is an Technology Lead, Passionate Learner & Educator" />
<meta name="keywords" content="Viraj Kadam, Contact Viraj Kadam, About Viraj Kadam" />
<meta name="author" content="Viraj Kadam" />

// Viewport
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

// SEO
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://virajkadam.in/" />

// Open Graph
<meta property="og:type" content="website" />
<meta property="og:url" content="https://virajkadam.in/" />
<meta property="og:title" content="Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam" />
<meta property="og:description" content="Viraj Kadam is an Technology Lead, Passionate Learner & Educator" />
<meta property="og:image" content="https://virajkadam.in/assets/profile-LoLyXFyb.jpg" />
<meta property="og:site_name" content="Viraj Kadam" />

// Twitter
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam" />
<meta name="twitter:description" content="Viraj Kadam is an Technology Lead, Passionate Learner & Educator" />
<meta name="twitter:image" content="https://virajkadam.in/assets/profile-LoLyXFyb.jpg" />

// Favicon
<link rel="icon" href="https://virajkadam.in/assets/viraj_kadam_logo.jpg" />
<link rel="apple-touch-icon" href="https://virajkadam.in/assets/viraj_kadam_logo.jpg" />
```

### Next.js Metadata API (App Router)

```jsx
export const metadata = {
  title: 'Viraj Kadam | Viraj Kadam Software Developer | Contact Viraj Kadam | hiVirajKadam',
  description: 'Viraj Kadam is an Technology Lead, Passionate Learner & Educator',
  keywords: 'Viraj Kadam, Contact Viraj Kadam, About Viraj Kadam',
  openGraph: {
    title: 'Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam',
    description: 'Viraj Kadam is an Technology Lead, Passionate Learner & Educator',
    url: 'https://virajkadam.in/',
    images: ['https://virajkadam.in/assets/profile-LoLyXFyb.jpg'],
  },
  twitter: {
    card: 'summary_large_image',
    title: 'Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam',
    description: 'Viraj Kadam is an Technology Lead, Passionate Learner & Educator',
    images: ['https://virajkadam.in/assets/profile-LoLyXFyb.jpg'],
  },
}
```

### Schema Markup

```jsx
const personSchema = {
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Viraj Kadam",
  "jobTitle": "Technology Lead",
  "description": "Business Analyst & Technology Consultant",
  "url": "https://virajkadam.in/",
  "image": "https://virajkadam.in/assets/profile-LoLyXFyb.jpg",
  "email": "hiVirajKadam@gmail.com",
  "sameAs": [
    "https://github.com/virajkadam",
    "https://www.facebook.com/hivirajkadam/"
  ]
}
```
