<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController
{
    public function home()
    {
        $featuredProjects = [
            ['id' => 1, 'title' => 'E-Commerce Platform', 'tech' => 'Laravel, Vue.js, MySQL', 'thumb' => '[picsum.photos](https://picsum.photos/seed/proj1/600/400)'],
            ['id' => 2, 'title' => 'Task Manager App',    'tech' => 'React, Node.js, MongoDB', 'thumb' => '[picsum.photos](https://picsum.photos/seed/proj2/600/400)'],
            ['id' => 3, 'title' => 'Portfolio CMS',       'tech' => 'Laravel, Livewire, Tailwind', 'thumb' => '[picsum.photos](https://picsum.photos/seed/proj3/600/400)'],
        ];

        return view('home', compact('featuredProjects'));
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = [
            ['id' => 1, 'title' => 'E-Commerce Platform',  'tech' => 'Laravel, Vue.js, MySQL',         'thumb' => '[picsum.photos](https://picsum.photos/seed/proj1/600/400)', 'desc' => 'A full-featured online store with cart, payments, and admin panel.'],
            ['id' => 2, 'title' => 'Task Manager App',     'tech' => 'React, Node.js, MongoDB',        'thumb' => '[picsum.photos](https://picsum.photos/seed/proj2/600/400)', 'desc' => 'Collaborative task management with real-time updates.'],
            ['id' => 3, 'title' => 'Portfolio CMS',        'tech' => 'Laravel, Livewire, Tailwind',    'thumb' => '[picsum.photos](https://picsum.photos/seed/proj3/600/400)', 'desc' => 'A content management system built for developer portfolios.'],
            ['id' => 4, 'title' => 'Weather Dashboard',    'tech' => 'Vue.js, OpenWeather API',        'thumb' => '[picsum.photos](https://picsum.photos/seed/proj4/600/400)', 'desc' => 'Live weather dashboard with charts and location search.'],
            ['id' => 5, 'title' => 'Chat Application',     'tech' => 'Laravel, WebSockets, Redis',     'thumb' => '[picsum.photos](https://picsum.photos/seed/proj5/600/400)', 'desc' => 'Real-time chat app with rooms and private messaging.'],
            ['id' => 6, 'title' => 'REST API Service',     'tech' => 'Laravel, Sanctum, PostgreSQL',   'thumb' => '[picsum.photos](https://picsum.photos/seed/proj6/600/400)', 'desc' => 'A scalable REST API with auth, rate limiting, and docs.'],
        ];

        return view('projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $projects = [
            1 => ['id' => 1, 'title' => 'E-Commerce Platform',  'tech' => 'Laravel, Vue.js, MySQL',       'thumb' => '[picsum.photos](https://picsum.photos/seed/proj1/800/500)', 'desc' => 'A full-featured online store with shopping cart, Stripe payments, product management, and a complete admin panel. Built with Laravel on the backend and Vue.js on the frontend.', 'github' => '#', 'live' => '#'],
            2 => ['id' => 2, 'title' => 'Task Manager App',     'tech' => 'React, Node.js, MongoDB',      'thumb' => '[picsum.photos](https://picsum.photos/seed/proj2/800/500)', 'desc' => 'Collaborative task management tool with real-time updates using Socket.io, drag-and-drop boards, deadlines, and team roles.', 'github' => '#', 'live' => '#'],
            3 => ['id' => 3, 'title' => 'Portfolio CMS',        'tech' => 'Laravel, Livewire, Tailwind',  'thumb' => '[picsum.photos](https://picsum.photos/seed/proj3/800/500)', 'desc' => 'A content management system designed specifically for developer portfolios. Manage projects, blog posts, skills, and contact messages from one dashboard.', 'github' => '#', 'live' => '#'],
            4 => ['id' => 4, 'title' => 'Weather Dashboard',    'tech' => 'Vue.js, OpenWeather API',      'thumb' => '[picsum.photos](https://picsum.photos/seed/proj4/800/500)', 'desc' => 'Live weather dashboard fetching data from OpenWeather API with 7-day forecasts, interactive charts, and geolocation support.', 'github' => '#', 'live' => '#'],
            5 => ['id' => 5, 'title' => 'Chat Application',     'tech' => 'Laravel, WebSockets, Redis',   'thumb' => '[picsum.photos](https://picsum.photos/seed/proj5/800/500)', 'desc' => 'Real-time chat application supporting multiple rooms, private messaging, read receipts, and emoji reactions.', 'github' => '#', 'live' => '#'],
            6 => ['id' => 6, 'title' => 'REST API Service',     'tech' => 'Laravel, Sanctum, PostgreSQL', 'thumb' => '[picsum.photos](https://picsum.photos/seed/proj6/800/500)', 'desc' => 'Production-ready REST API with token-based authentication, role permissions, rate limiting, and auto-generated Swagger documentation.', 'github' => '#', 'live' => '#'],
        ];

        $project = $projects[$id] ?? abort(404);

        return view('project_detail', compact('project'));
    }

    public function skills()
    {
        $skills = [
            'Backend'  => ['PHP', 'Laravel', 'Node.js', 'Python', 'REST APIs', 'GraphQL'],
            'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Vue.js', 'React', 'Tailwind CSS'],
            'Database' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis'],
            'DevOps'   => ['Git', 'Docker', 'CI/CD', 'Linux', 'AWS', 'Nginx'],
        ];

        return view('skills', compact('skills'));
    }

    public function experience()
    {
        $jobs = [
            ['role' => 'Senior Full-Stack Developer', 'company' => 'TechNova Inc.',     'period' => '2023 – Present', 'desc' => 'Lead development of microservices and React frontends for fintech clients. Mentored a team of 4 junior developers.'],
            ['role' => 'Full-Stack Developer',        'company' => 'Bright Agency',     'period' => '2021 – 2023',   'desc' => 'Built and maintained Laravel + Vue.js applications for e-commerce and SaaS clients.'],
            ['role' => 'Junior Web Developer',        'company' => 'Freelance',         'period' => '2019 – 2021',   'desc' => 'Delivered 20+ WordPress and PHP projects for small businesses across Europe.'],
        ];

        return view('experience', compact('jobs'));
    }

    public function education()
    {
        $degrees = [
            ['degree' => 'B.Sc. Computer Science', 'school' => 'State University of Technology', 'year' => '2015 – 2019', 'desc' => 'Graduated with honors. Thesis on machine learning-based code review automation.'],
            ['degree' => 'Full-Stack Web Development Bootcamp', 'school' => 'CodePath Academy', 'year' => '2019', 'desc' => 'Intensive 16-week program covering modern JavaScript, React, Node.js, and deployment pipelines.'],
        ];

        $certs = [
            ['name' => 'AWS Certified Developer – Associate', 'issuer' => 'Amazon Web Services', 'year' => '2022'],
            ['name' => 'Laravel Certified Developer',          'issuer' => 'Laravel LLC',         'year' => '2021'],
            ['name' => 'Google Professional Cloud Developer',  'issuer' => 'Google Cloud',        'year' => '2023'],
        ];

        return view('education', compact('degrees', 'certs'));
    }

    public function blog()
    {
        $posts = [
            ['slug' => 'laravel-best-practices-2025', 'title' => 'Laravel Best Practices in 2025',            'date' => 'April 10, 2025', 'excerpt' => 'A deep dive into modern Laravel patterns, service classes, and keeping your codebase clean at scale.'],
            ['slug' => 'vue-vs-react-2025',           'title' => 'Vue.js vs React in 2025: My Take',          'date' => 'March 22, 2025', 'excerpt' => 'After building production apps in both, here is an honest comparison of DX, performance, and ecosystem.'],
            ['slug' => 'docker-for-developers',       'title' => 'Docker for Web Developers: Getting Started', 'date' => 'February 5, 2025', 'excerpt' => 'Everything you need to containerize your Laravel or Node app and ship it confidently.'],
        ];

        return view('blog', compact('posts'));
    }

    public function blogPost($slug)
    {
        $posts = [
            'laravel-best-practices-2025' => [
                'title'   => 'Laravel Best Practices in 2025',
                'date'    => 'April 10, 2025',
                'content' => '<p>Laravel continues to evolve rapidly. In this article we cover service classes, repository patterns, form requests, and how to structure large applications so they remain testable and maintainable as your team grows.</p><p>Key takeaways include using single-action controllers, leveraging Laravel Pint for code style, writing feature tests over unit tests, and leaning on queues for anything that can be deferred.</p>',
            ],
            'vue-vs-react-2025' => [
                'title'   => 'Vue.js vs React in 2025: My Take',
                'date'    => 'March 22, 2025',
                'content' => '<p>After shipping several production applications in both Vue 3 and React 18, here is an honest breakdown. Vue wins on approachability and single-file components. React wins on ecosystem size and job market. Both are excellent choices in 2025.</p><p>The real question is your team and your project constraints — not which framework is objectively better.</p>',
            ],
            'docker-for-developers' => [
                'title'   => 'Docker for Web Developers: Getting Started',
                'date'    => 'February 5, 2025',
                'content' => '<p>Docker removes the "works on my machine" problem forever. In this post we walk through Dockerizing a Laravel application with Nginx, PHP-FPM, MySQL, and Redis — all orchestrated with Docker Compose.</p><p>By the end you will have a reproducible development environment and a production-ready image pipeline.</p>',
            ],
        ];

        $post = $posts[$slug] ?? abort(404);

        return view('blog_post', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:2',
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ]);

        // In production: Mail::to('you@example.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact')->with('success', 'Thanks! Your message has been sent.');
    }
}
