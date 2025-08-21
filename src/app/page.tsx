import { Mail, Github, Code2, Cloud, Terminal, Package } from "lucide-react";
import Image from "next/image";

export default function Home() {
  return (
    <div className="min-h-screen bg-white">
      {/* Header */}
      <header className="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-sm z-50 border-b border-gray-100">
        <nav className="container mx-auto px-6 py-4">
          <div className="flex items-center justify-between">
            <h1 className="text-xl font-bold text-gray-800">Viraj Kadam</h1>
            <div className="flex items-center space-x-4">
              <a
                href="mailto:hiVirajKadam@gmail.com"
                className="text-gray-600 hover:text-gray-900 transition-colors"
              >
                <Mail className="w-5 h-5" />
              </a>
              <a
                href="https://github.com/virajkadam"
                className="text-gray-600 hover:text-gray-900 transition-colors"
                target="_blank"
                rel="noopener noreferrer"
              >
                <Github className="w-5 h-5" />
              </a>
            </div>
          </div>
        </nav>
      </header>

      <main>
        {/* Hero Section */}
        <section className="pt-32 pb-20 bg-gradient-to-b from-gray-50 to-white">
          <div className="container mx-auto px-6">
            <div className="flex flex-col lg:flex-row items-start gap-12">
              <div className="flex-1">
                <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                  Business Analyst &<br />
                  Technology Consultant
                </h1>
                <p className="text-xl text-gray-600 mb-8">
                  Development, design and consult software and IT infrastructure
                  solutions for Startups and MSMEs.
                </p>

                {/* Service Tags */}
                <div className="flex flex-wrap gap-4 mb-8">
                  <div className="flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-2 rounded-full">
                    <Code2 className="w-5 h-5" />
                    <span>Web Development</span>
                  </div>
                  <div className="flex items-center gap-2 bg-green-50 text-green-700 px-4 py-2 rounded-full">
                    <Cloud className="w-5 h-5" />
                    <span>Cloud Computing</span>
                  </div>
                  <div className="flex items-center gap-2 bg-purple-50 text-purple-700 px-4 py-2 rounded-full">
                    <Terminal className="w-5 h-5" />
                    <span>Open Source</span>
                  </div>
                  <div className="flex items-center gap-2 bg-red-50 text-red-700 px-4 py-2 rounded-full">
                    <Package className="w-5 h-5" />
                    <span>Product Development</span>
                  </div>
                </div>

                {/* Professional Details Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                  <h2 className="text-2xl font-semibold text-gray-900">
                    Professional Details
                  </h2>
                  <div>
                    <h3 className="text-lg font-medium text-gray-800">
                      Industry Experience
                    </h3>
                    <p className="text-gray-600">8+ Years</p>
                  </div>
                  <div>
                    <h3 className="text-lg font-medium text-gray-800">
                      Subject Expertise
                    </h3>
                    <p className="text-gray-600">
                      PHP, Python, Web Development, Linux, Product Designing,
                      Oracle DB, Machine Learning
                    </p>
                  </div>
                  <div>
                    <h3 className="text-lg font-medium text-gray-800">
                      Current Organization
                    </h3>
                    <p className="text-gray-600">Kotak Mahindra Bank</p>
                    <p className="text-gray-600">Data Analyst - Sr. Manager</p>
                  </div>
                </div>
              </div>

              {/* YouTube Video */}
              <div className="lg:w-1/3">
                <div className="relative aspect-video w-full overflow-hidden rounded-lg shadow-lg">
                  <iframe
                    src="https://www.youtube.com/embed/6DWgNpj0fac"
                    title="YouTube video player"
                    className="absolute inset-0 w-full h-full"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowFullScreen
                  />
                </div>
              </div>
            </div>

            <div className="mt-10">
              <h2 className="text-2xl font-semibold text-gray-900 mb-6">
                Professional Experience
              </h2>
              <div className="p-6 ">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                  <div className="flex items-center gap-3 text-gray-600 p-3 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <Image
                      src="/kotak-mahindra-bank-logo.png"
                      alt="Kotak Mahindra Bank"
                      width={60}
                      height={60}
                      className="object-contain"
                    />
                    <span className="font-medium">
                      Kotak Mahindra Bank Ltd.
                    </span>
                  </div>
                  <div className="flex items-center gap-3 text-gray-600 p-3 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <Image
                      src="/nitor-infotech-logo.webp"
                      alt="Nitor Infotech"
                      width={60}
                      height={60}
                      className="object-contain"
                    />
                    <span className="font-medium">
                      Nitor Infotech Pvt. Ltd.
                    </span>
                  </div>
                  <div className="flex items-center gap-3 text-gray-600 p-3 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <Image
                      src="/clover-infotech-logo.png"
                      alt="Clover Infotech"
                      width={60}
                      height={60}
                      className="object-contain"
                    />
                    <span className="font-medium">
                      Clover Infotech Pvt. Ltd.
                    </span>
                  </div>
                  <div className="flex items-center gap-3 text-gray-600 p-3 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <Image
                      src="/infodeal-technologies-logo.png"
                      alt="Infodeal Technologies"
                      width={60}
                      height={60}
                      className="object-contain"
                    />
                    <span className="font-medium">
                      Infodeal Technologies Pvt. Ltd.
                    </span>
                  </div>
                  <div className="flex items-center gap-3 text-gray-600 p-3 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <Image
                      src="/os3-infotech-logo.png"
                      alt="OS3 Infotech"
                      width={60}
                      height={60}
                      className="object-contain"
                    />
                    <span className="font-medium">OS3 Infotech Pvt. Ltd.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Statistics Section */}
        <section className="py-20 bg-white">
          <div className="container mx-auto px-6">
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              <div className="bg-gray-50 rounded-xl p-6 transition-transform hover:scale-105">
                <div className="text-3xl font-bold text-blue-600 mb-2">60+</div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">
                  Projects
                </h3>
                <p className="text-gray-600">
                  Adapting and creating solutions for customer&apos;s needs
                </p>
              </div>
              <div className="bg-gray-50 rounded-xl p-6 transition-transform hover:scale-105">
                <div className="text-3xl font-bold text-blue-600 mb-2">50%</div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">
                  Web
                </h3>
                <p className="text-gray-600">
                  Applications development integrating third-party services and
                  mobile client(s)
                </p>
              </div>
              <div className="bg-gray-50 rounded-xl p-6 transition-transform hover:scale-105">
                <div className="text-3xl font-bold text-blue-600 mb-2">30%</div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">
                  Technical solutions
                </h3>
                <p className="text-gray-600">
                  Such as web services, scripts, configurations
                </p>
              </div>
              <div className="bg-gray-50 rounded-xl p-6 transition-transform hover:scale-105">
                <div className="text-3xl font-bold text-blue-600 mb-2">20%</div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">
                  Leading
                </h3>
                <p className="text-gray-600">
                  Web projects and ensure the quality of delivery
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Skills Section */}
        <section className="py-20 bg-gray-50" id="skills">
          <div className="container mx-auto px-6">
            <h2 className="text-3xl font-bold text-gray-900 mb-12">
              Skills & Expertise
            </h2>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Web Application Frameworks
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    9+ years
                  </span>
                </div>
                <p className="text-gray-600">
                  Laravel, Django, LAMP, MEAN, MERN stack development with
                  production experience
                </p>
              </div>
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Cloud Computing
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    6+ years
                  </span>
                </div>
                <p className="text-gray-600">
                  AWS, DigitalOcean, Linode infrastructure management and
                  deployment
                </p>
              </div>
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Linux & Open Source
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    6+ years
                  </span>
                </div>
                <p className="text-gray-600">
                  Scripting, Server management, Automation, and System
                  Administration
                </p>
              </div>
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Scripting Languages
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    Expert
                  </span>
                </div>
                <p className="text-gray-600">
                  PHP, JavaScript, Bash, Python, SQL with focus on backend
                  development
                </p>
              </div>
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Open Source Technologies
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    Expert
                  </span>
                </div>
                <p className="text-gray-600">
                  Linux, Automation tools, Web Scraping, Quantitative Analysis
                </p>
              </div>
              <div className="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div className="flex justify-between items-start mb-4">
                  <h3 className="text-lg font-semibold text-gray-900">
                    Business Analysis
                  </h3>
                  <span className="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">
                    Expert
                  </span>
                </div>
                <p className="text-gray-600">
                  Requirements gathering, System design, Technical documentation
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Contact Section */}
        <section className="py-20 bg-white" id="contact">
          <div className="container mx-auto px-6">
            <div className="max-w-2xl mx-auto text-center">
              <h2 className="text-3xl font-bold text-gray-900 mb-8">
                Get in Touch
              </h2>
              <div className="flex flex-col items-center space-y-6">
                <a
                  href="mailto:hiVirajKadam@gmail.com"
                  className="flex items-center space-x-3 text-gray-600 hover:text-blue-600 transition-colors"
                >
                  <Mail className="w-5 h-5" />
                  <span>hiVirajKadam@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>

      {/* Footer */}
      <footer className="bg-gray-50 py-8">
        <div className="container mx-auto px-6 text-center text-gray-600">
          <p>© 2025 Viraj Kadam. All rights reserved.</p>
        </div>
      </footer>
    </div>
  );
}
