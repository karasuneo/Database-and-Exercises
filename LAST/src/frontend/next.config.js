/** @type {import('next').NextConfig} */

const rewrites = [
  {
    source: "/api/:path*",
    destination: "http://localhost:8080/api/:path*",
  },
];

module.exports = {
  reactStrictMode: true,
  async rewrites() {
    return rewrites;
  },
};
