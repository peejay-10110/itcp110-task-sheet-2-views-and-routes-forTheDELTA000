<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800 antialiased">

    <nav class="bg-white shadow-sm py-4 mb-10">
        <div class="max-w-5xl mx-auto px-4 flex flex-wrap justify-center gap-4 text-sm font-medium text-gray-600">
            <a href="/" class="hover:text-blue-600 transition">Home</a>
            <a href="/about" class="hover:text-blue-600 transition">About</a>
            <a href="/projects" class="hover:text-blue-600 transition">Projects</a>
            <a href="/skills" class="hover:text-blue-600 transition">Skills</a>
            <a href="/experience" class="hover:text-blue-600 transition">Experience</a>
            <a href="/education" class="hover:text-blue-600 transition">Education</a>
            <a href="/services" class="hover:text-blue-600 transition">Services</a>
            <a href="/testimonials" class="hover:text-blue-600 transition">Testimonials</a>
            <a href="/blog" class="text-blue-600 font-semibold">Blog</a>
            <a href="/contact" class="hover:text-blue-600 transition">Contact</a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-900 mb-8 border-b border-gray-100 pb-4">Articles & Thoughts</h1>
        
        <div class="space-y-8">
            <article class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:border-blue-200 transition cursor-pointer group">
                <span class="text-sm font-semibold text-blue-600 uppercase tracking-wide">Laravel</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-3 group-hover:text-blue-600 transition">Understanding the Repository Pattern</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">How to decouple your controllers from your database logic to make your application infinitely more testable and maintainable.</p>
                <div class="text-gray-400 text-sm font-medium">May 12, 2026 • 5 min read</div>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:border-blue-200 transition cursor-pointer group">
                <span class="text-sm font-semibold text-blue-600 uppercase tracking-wide">Architecture</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-3 group-hover:text-blue-600 transition">When to use Microservices</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">Monoliths aren't bad, and microservices aren't a silver bullet. An honest look at system architecture choices for growing startups.</p>
                <div class="text-gray-400 text-sm font-medium">April 28, 2026 • 8 min read</div>
            </article>
        </div>
    </div>

</body>
</html>