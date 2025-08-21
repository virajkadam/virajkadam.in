import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  title: "Viraj Kadam | Viraj Kadam Software Developer | Contact Viraj Kadam | hiVirajKadam",
  description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
  keywords: "Viraj Kadam, Contact Viraj Kadam, About Viraj Kadam",
  author: "Viraj Kadam",
  robots: "index, follow",
  openGraph: {
    type: "website",
    url: "https://virajkadam.in/",
    title: "Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam",
    description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
    siteName: "Viraj Kadam",
  },
  twitter: {
    card: "summary_large_image",
    title: "Viraj Kadam | Who is viraj kadam ? | Contact Viraj Kadam",
    description: "Viraj Kadam is an Technology Lead, Passionate Learner & Educator",
  },
  canonical: "https://virajkadam.in/",
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
        <meta name="revisit-after" content="7 days" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <link rel="canonical" href="https://virajkadam.in/" />
        <link rel="shortlink" href="https://virajkadam.in/" />
      </head>
      <body className="antialiased">
        {children}
      </body>
    </html>
  );
}
