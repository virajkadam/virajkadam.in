import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  title: "Viraj Kadam | Viraj Kadam Software Developer | Contact Viraj Kadam | hiVirajKadam",
  description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
  keywords: "Viraj Kadam, Contact Viraj Kadam, About Viraj Kadam",
  authors: [{ name: "Viraj Kadam" }],
  robots: "index, follow",
  openGraph: {
    type: "website",
    url: "https://virajkadam.in/",
    title: "Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam",
    description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
    siteName: "Viraj Kadam",
    images: [
      {
        url: "https://virajkadam.in/assets/profile-LoLyXFyb.jpg",
        alt: "Viraj Kadam Image",
        width: 400,
        height: 533,
      }
    ],
  },
  twitter: {
    card: "summary_large_image",
    title: "Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam",
    description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
    images: ["https://virajkadam.in/assets/profile-LoLyXFyb.jpg"],
  },
  alternates: {
    canonical: "https://virajkadam.in/index.html",
  },
  other: {
    "revisit-after": "7 days",
    "googlebot": "index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1",
    "bingbot": "index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1",
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
        <meta httpEquiv="content-type" content="text/html; charset=UTF-8" />
        
        {/* Canonical and Shortlink */}
        <link rel="canonical" href="https://virajkadam.in/index.html" />
        <link rel="shortlink" href="https://virajkadam.in/" />
        
        {/* Favicon */}
        <link rel="icon" href="https://virajkadam.in/assets/viraj_kadam_logo.jpg" />
        <link rel="apple-touch-icon" href="https://virajkadam.in/assets/viraj_kadam_logo.jpg" />
        
        {/* Open Graph Additional */}
        <meta property="og:image:alt" content="Viraj Kadam Image" />
        <meta property="article:publisher" content="https://www.facebook.com/hivirajkadam/" />
      </head>
      <body className="antialiased">
        {children}
      </body>
    </html>
  );
}
