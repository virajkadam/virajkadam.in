import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  output: 'export',
  trailingSlash: true,
  images: {
    unoptimized: true,
    remotePatterns: [
      {
        protocol: 'https',
        hostname: 'virajkadam.in',
        port: '',
        pathname: '/assets/**',
      },
    ],
  },
};

export default nextConfig;
