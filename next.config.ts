import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  images: {
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
