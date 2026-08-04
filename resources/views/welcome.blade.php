<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ayomi | Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       <style>
            html{
                scroll-behavior: smooth;
            }
       </style>
    </head>
    <body class="bg-[#070914] font-sans text-white antialiased">
    
       <!-- nav bar -->
        <nav  x-data="{ open: false }" class= "sticky top-0 z-50 border-b border-white/20 backdrop-blur">
            <div class="flex items-center justify-between h-20 px-6 mx-auto lg:px-20">
                <!-- logo -->
                <p class="text-2xl font-bold text-[#A680FF]">AYOMI</P>
                <div class="items-center hidden gap-8 md:flex">
                    <a href="#" class="text-base font-medium text-gray-300 transition hover:text-purple-400">Home</a>
                    <a href="#about" class="text-base font-medium text-gray-300 transition hover:text-purple-400">About</a>
                    <a href="#skills" class="text-base font-medium text-gray-300 transition hover:text-purple-400">Skills</a>
                    <a href="#projects" class="text-base font-medium text-gray-300 transition hover:text-purple-400">Projects</a>
                    <a href="#contact" class="text-base font-medium text-gray-300 transition hover:text-purple-400">Contact</a>
                </div>
                <div class="hidden md:flex">
                    <a href="{{ asset('files/AyomiCV.pdf') }}" download="Ayomi-Pabasara-CV.pdf"
                    class="px-5 py-3 text-sm font-semibold text-white transition bg-purple-600 rounded-xl hover:bg-purple-500">Download CV</a>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" @click="open = !open" class="p-2 rounded-lg hover:bg-white/10 md:hidden" aria-label="Open menu">

                    <!-- Hamburger Icon -->
                    <svg
                        x-show="!open"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>

                    <!-- Close Icon -->
                    <svg
                        x-show="open"
                        x-cloak
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>

            {{-- mobile nav --}}
            <div  x-show="open" x-transition x-cloak
                class="px-4 pb-4 border-t border-white/10 md:hidden">

                <div class="flex flex-col items-center gap-2 pt-3">
                    <a href="#" class="px-3 py-2 rounded-lg hover:bg-white/10">Home</a>
                    <a href="#about" class="px-3 py-2 rounded-lg hover:bg-white/10">About</a>
                    <a href="#skills" class="px-3 py-2 rounded-lg hover:bg-white/10">Skills</a>
                    <a href="#projects" class="px-3 py-2 rounded-lg hover:bg-white/10">Projects</a>
                    <a href="#contact" class="px-3 py-2 rounded-lg hover:bg-white/10">Contact</a>
                </div>

                <div class="flex justify-center mt-3">
                    <a href="{{ asset('files/Ayomi-Pabasara-CV.pdf') }}" download="Ayomi-Pabasara-CV.pdf"
                    class="px-5 py-3 text-sm font-semibold text-white transition bg-purple-600 rounded-xl hover:bg-purple-500">Download CV</a>
                </div>

            </div>
        </nav>    

        <!-- Hero Section -->
        <section id="home"
            class="mx-auto flex min-h-[calc(80vh-80px)] w-full px-6 lg:px-20 flex-col items-center gap-50  pb-24 pt-24 lg:flex-row">

            <!-- Left Content -->
            <div class="w-full max-w-2xl">
                <p class="mb-5 text-s font-bold uppercase tracking-[0.25em] text-purple-400">HELLO, I’M</p>
                <h1 class="text-5xl font-bold leading-tight text-white sm:text-6xl lg:text-7xl">A.P.A. Pabasara</h1>
                <p class="mt-5 text-xl font-semibold text-sky-400 sm:text-2xl">IT Undergraduate • QA & Web Development</p>
                <p class="max-w-2xl text-base leading-8 text-gray-400 mt-7 sm:text-lg">
                    I build simple, responsive and user-friendly digital products.
                    Currently seeking an IT internship where I can contribute through
                    software quality assurance, web development and practical
                    problem-solving.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mt-8">
                    <a href="#projects"
                        class="py-4 font-semibold text-white transition duration-300 bg-purple-600 rounded-xl px-7 hover:-translate-y-1 hover:bg-purple-500">
                        View My Work
                    </a>

                    <a href="#contact"
                        class="py-4 font-semibold text-white transition duration-300 border border-gray-600 rounded-xl px-7 hover:-translate-y-1 hover:border-purple-400 hover:text-purple-400">
                        Contact Me
                    </a>
                </div>

                <p class="text-gray-500 mt-7 text-s">
                    Based in Sri Lanka
                    <span class="mx-2">•</span>
                    Available for internship opportunities
                </p>
            </div>

            <!-- Right Profile Card -->
            <div class="flex w-full justify-center lg:w-[390px] lg:shrink-0 lg:justify-end">
                <div
                    class="relative h-[390px] w-full max-w-[390px] overflow-hidden rounded-[2rem] border-2 border-purple-500/40
                    bg-[#111426] shadow-2xl shadow-purple-900/30 sm:h-[430px]">

                    <!-- Profile Image -->
                    <img
                        src="{{ asset('images/profile.jpeg') }}"
                        alt="A.P.A. Pabasara"
                        class="absolute inset-0 object-cover object-top w-full h-full"
                    >

                    <!-- Dark Gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t
                        from-[#070914] via-transparent to-transparent">
                    </div>

                    <!-- Availability Card -->
                    <div class="absolute bottom-6 left-6 right-6 rounded-2xl border border-white/10 bg-[#070914]/90 p-5 backdrop-blur-md">
                        <div class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 shrink-0 rounded-full bg-green-400"></span>
                            <p class="font-semibold text-white">
                                Open to Work
                            </p>
                        </div>

                        <p class="mt-2 text-s text-sky-400">
                            QA Intern • Web Developer Intern
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- about section -->
        <section id="about" class="bg-[#0B0E1C] px-6 py-24 lg:px-20">
            <p class="mb-3 text-s font-bold uppercase tracking-[0.25em] text-purple-400">ABOUT ME</p>
            <h2 class="max-w-4xl text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Learning, building and testing with purpose.</h2>
            <div class="grid gap-6 lg:grid-cols-2 xl:grid-cols-3 mt-14">
                <div class="rounded-2xl border border-white/10 bg-[#111426] p-7 transition duration-300
                    hover:-translate-y-1 hover:border-purple-500/40">
                    <h3 class="text-xl font-bold text-white">My Story</h3>
                    <p class="mt-4 leading-7 text-gray-400">Higher National Diploma in Information Technology undergraduate at SLIATE, Advanced Technological Institute – Kurunegala. I enjoy turning requirements into useful systems and improving software through careful testing and thoughtful UI design.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-[#111426] p-7 transition duration-300
                     hover:-translate-y-1 hover:border-purple-500/40">
                    <h3 class="text-xl font-bold text-white">Education</h3>
                    <p class="mt-4 leading-7 text-gray-400">Higher National Diploma in Information Technology SLIATE — ATI Kurunegala Expected completion: 2026</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-[#111426] p-7 transition duration-300
                       hover:-translate-y-1 hover:border-purple-500/40">
                    <h3 class="text-xl font-bold text-white">What I Bring</h3>
                    <p class="mt-4 leading-7 text-gray-400">Quality-focused mindset Strong problem-solving skillsTeam collaboration & communicationFast learner with practical project experience</p>
                </div>
            </div>
        </section>

        <!-- Technical Skills Section -->
        <section id="skills" class="scroll-mt-20 bg-[#070914] px-6 py-24 lg:px-20">
            <div class="w-full">

                <!-- Section Heading -->
                <div class="mb-14">
                    <p class="mb-3 text-s font-bold uppercase tracking-[0.25em] text-purple-400">
                        Technical Skills
                    </p>

                    <h2 class="text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                        Tools and technologies I work with.
                    </h2>

                    <p class="max-w-2xl mt-5 text-base leading-7 text-gray-400 sm:text-lg">
                        Technologies and skills developed through my academic projects,
                        practical work and continuous learning.
                    </p>
                </div>

                <!-- Skill Categories -->
                <div class="grid gap-6 lg:grid-cols-3">

                    <!-- Development -->
                    <div class="rounded-2xl border border-white/10 bg-[#111426] p-7
                        transition duration-300 hover:-translate-y-1 hover:border-purple-500/40">

                        <div class="flex items-center justify-center w-12 h-12 mb-6 text-xl text-purple-400 rounded-xl bg-purple-500/10">
                            &lt;/&gt;
                        </div>

                        <h3 class="text-xl font-bold text-white">
                            Development
                        </h3>

                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl ">PHP</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">Laravel</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">Android Studio</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">Java</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">JavaScript</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">HTML</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">CSS</span>
                        </div>
                    </div>

                    <!-- UI & Database -->
                    <div class="rounded-2xl border border-white/10 bg-[#111426] p-7 transition duration-300 hover:-translate-y-1
                        hover:border-sky-500/40">
                        <div class="flex items-center justify-center w-12 h-12 mb-6 text-xl font-bold rounded-xl bg-sky-500/10 text-sky-400">
                            UI
                        </div>

                        <h3 class="text-xl font-bold text-white">
                            UI & Database
                        </h3>

                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="p-3 border skill-chip border-sky-500/20 bg-sky-500/10 text-s rounded-xl">Tailwind CSS</span>
                            <span class="p-3 border skill-chip border-sky-500/20 bg-sky-500/10 text-s rounded-xl">Figma</span>
                            <span class="p-3 border skill-chip border-sky-500/20 bg-sky-500/10 text-s rounded-xl">MySQL</span>
                            <span class="p-3 border skill-chip border-sky-500/20 bg-sky-500/10 text-s rounded-xl">Fire Base</span>
                            <span class="p-3 border skill-chip border-sky-500/20 bg-sky-500/10 text-s rounded-xl">Responsive Design</span>
                        </div>
                    </div>

                    <!-- QA & Tools -->
                    <div class="rounded-2xl border border-white/10 bg-[#111426] p-7
                        transition duration-300 hover:-translate-y-1 hover:border-purple-500/40">
                        <div class="flex items-center justify-center w-12 h-12 mb-6 text-xl text-purple-400 rounded-xl bg-purple-500/10">
                            ✓
                        </div>

                        <h3 class="text-xl font-bold text-white">
                            QA & Tools
                        </h3>

                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">Manual Testing</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">SDLC</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">Git</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">GitHub</span>
                            <span class="p-3 border skill-chip border-purple-500/20 bg-purple-500/10 text-s rounded-xl">VS Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- My projects -->
        <section id="projects" class="scroll-mt-20 bg-[#0B0E1C] px-6 py-24 lg:px-20">
            <div class="mb-14">
                <p class="mb-3 text-s font-bold uppercase tracking-[0.25em] text-purple-400">
                    Selected Work
                </p>

                <h2 class="text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    Projects that turned ideas into working systems.
                </h2>

                <p class="max-w-2xl mt-5 text-base leading-7 text-gray-400 sm:text-lg">
                    Academic projects developed using modern web technologies,
                    practical workflows and user-focused interfaces.
                </p>
            </div>

            <!-- CSMS & Welfare Projects -->
            <div class="grid w-full grid-cols-1 gap-8 lg:grid-cols-2">

                <!-- Construction Site Management System -->
                <article
                    class="group flex h-full min-w-0 flex-col overflow-hidden
                    rounded-2xl border border-white/10 bg-[#111426]
                    transition duration-300 hover:-translate-y-1
                    hover:border-purple-500/50 hover:shadow-2xl
                    hover:shadow-purple-950/30">

                    <!-- CSMS Project Image -->
                    <div class="relative h-64 shrink-0 overflow-hidden bg-[#111426]">
                        <img
                            src="{{ asset('images/csms.png') }}"
                            alt="Construction Site Management System"
                            class="object-cover object-top w-full h-full transition duration-500 group-hover:scale-105"
                        >

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t
                            from-[#111426]/80 via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- CSMS Content -->
                    <div class="flex flex-col flex-1 p-7">
                        <p class="text-xs font-bold tracking-widest text-orange-400 uppercase">
                            Featured Project
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-white">
                            Construction Site Management System
                        </h3>

                        <p class="mt-4 leading-7 text-gray-400">
                           A workflow system for client requests, technical reports, manager proposals, PDF generation and project tracking. Clients can review, approve or reject proposals through a structured process.
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="project-tech">Laravel</span>
                            <span class="project-tech">MySQL</span>
                            <span class="project-tech">DomPDF</span>
                            <span class="project-tech">Excel</span>
                        </div>

                        <!-- Links -->
                        <div class="flex flex-wrap gap-5 mt-auto pt-7">
                            <a
                                href="https://csms-2026-production.up.railway.app/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="font-semibold text-purple-400 transition hover:text-purple-300">
                                    Live Demo →
                            </a>

                            <a
                                href="https://github.com/ambagalaayomi-collab/csms-2026"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="font-semibold text-gray-400 transition hover:text-white">
                                    GitHub ↗
                            </a>
                        </div>
                    </div>
                </article>


                <!-- Welfare Membership Management App -->
                <article
                    class="group flex h-full min-w-0 flex-col overflow-hidden
                    rounded-2xl border border-white/10 bg-[#111426]
                    transition duration-300 hover:-translate-y-1
                    hover:border-purple-500/50 hover:shadow-2xl
                    hover:shadow-purple-950/30">

                    <!-- Mobile UI Screens -->
                    <div class="relative h-64 shrink-0 overflow-hidden  bg-gradient-to-br from-green-950 to-[#111426] p-4">
                        <div class="grid items-center h-full grid-cols-4 gap-2">

                            <!-- Dashboard -->
                            <img
                                src="{{ asset('images/welfare-app.png') }}"
                                alt="Welfare App Dashboard"
                                class="object-contain w-full h-full transition duration-500 drop-shadow-2xl group-hover:-translate-y-1">

                            <!-- Members -->
                            <img
                                src="{{ asset('images/members.png') }}"
                                alt="Welfare App Members"
                                class="object-contain w-full h-full transition duration-500 delay-75 drop-shadow-2xl group-hover:-translate-y-1">

                            <!-- Fee Management -->
                            <img
                                src="{{ asset('images/fees.png') }}"
                                alt="Welfare App Fee Management"
                                class="object-contain w-full h-full transition duration-500 delay-100 drop-shadow-2xl group-hover:-translate-y-1">

                            <!-- Meetings -->
                            <img
                                src="{{ asset('images/meetings.png') }}"
                                alt="Welfare App Meetings"
                                class="object-contain w-full h-full transition duration-500 delay-150 drop-shadow-2xl group-hover:-translate-y-1">
                        </div>

                        <!-- Overlay -->
                        <div
                            class="pointer-events-none absolute inset-0
                            bg-gradient-to-t from-[#111426]/40
                            via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Welfare App Content -->
                    <div class="flex flex-col flex-1 p-7">
                        <p class="text-xs font-bold tracking-widest text-pink-400 uppercase">
                            Mobile Application
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-white">
                            Welfare Membership Management App
                        </h3>

                        <p class="mt-4 leading-7 text-gray-400">
                            An Android mobile application developed for a welfare society
                            to manage member registrations, monthly fee collections and
                            meeting announcements. The application supports CRUD operations,
                            input validation and meeting reminder notifications.
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="project-tech">Android Studio</span>
                            <span class="project-tech">Kotlin</span>
                            <span class="project-tech">Firebase</span>
                            <span class="project-tech">CRUD</span>
                            <span class="project-tech">SMS Notifications</span>
                        </div>

                        <!-- GitHub Link -->
                        <div class="mt-auto pt-7">
                            <a
                                href="https://github.com/ambagalaayomi-collab/WelfareManagementSystem"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="font-semibold text-purple-400 transition hover:text-purple-300">
                                View on GitHub →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Personal Portfolio Website -->
                <article
                    class="group flex h-full min-w-0 flex-col overflow-hidden
                        rounded-2xl border border-white/10 bg-[#111426]
                        transition duration-300 hover:-translate-y-1
                        hover:border-purple-500/50 hover:shadow-2xl
                        hover:shadow-purple-950/30">

                    <!-- Portfolio Project Image -->
                    <div class="relative h-64 shrink-0 overflow-hidden bg-[#111426]">
                        <img
                            src="{{ asset('images/portfolio.png') }}"
                            alt="Personal Portfolio Website"
                            class="object-cover object-top w-full h-full transition duration-500 group-hover:scale-105">

                        <!-- Image Overlay -->
                        <div
                            class="pointer-events-none absolute inset-0
                                bg-gradient-to-t from-[#111426]/80
                                via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Portfolio Content -->
                    <div class="flex flex-col flex-1 p-7">
                        <p class="text-xs font-bold tracking-widest text-purple-400 uppercase">
                            Personal Project
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-white">
                            Personal Portfolio Website
                        </h3>

                        <p class="mt-4 leading-7 text-gray-400">
                            A modern and responsive personal portfolio website designed in
                            Figma and developed using Laravel and Tailwind CSS. The website
                            showcases my technical skills, education, academic projects and
                            professional information.
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="project-tech">Laravel</span>
                            <span class="project-tech">Blade</span>
                            <span class="project-tech">Tailwind CSS</span>
                            <span class="project-tech">JavaScript</span>
                            <span class="project-tech">Figma</span>
                            <span class="project-tech">Responsive Design</span>
                        </div>

                        <!-- Project Links -->
                        <div class="flex flex-wrap gap-5 mt-auto pt-7">

                            <a
                                href="https://github.com/ambagalaayomi-collab/ayomi-portfolio"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="font-semibold text-purple-400 transition hover:text-purple-300">
                                View on GitHub →
                            </a>
                        </div>
                    </div>
                </article>  
            </div>       
        </section>

        <!-- Contact Section -->
        <section id="contact" class="scroll-mt-20 bg-[#070914] px-6 py-24 lg:px-20">
            <div class="w-full">

                <div
                    class="grid overflow-hidden rounded-3xl border border-purple-500/20
                    bg-[#111426] lg:grid-cols-2">

                   <!-- Left Contact Content -->
                    <div
                        class="flex flex-col justify-center border-b border-white/10
                            bg-gradient-to-br from-[#17112C] via-[#111426] to-[#0B0E1C]
                            p-8 sm:p-12 lg:border-b-0 lg:border-r lg:p-16"
                    >
                        <p class="text-sm font-bold uppercase tracking-[0.25em] text-purple-400">
                            Get In Touch
                        </p>

                        <h2 class="mt-5 text-3xl font-bold leading-tight text-white sm:text-4xl">
                            Let’s build something useful together.
                        </h2>

                        <p class="max-w-xl mt-6 leading-7 text-gray-400">
                            I am currently looking for Quality Assurance and Web Development
                            internship opportunities. Feel free to contact me about an
                            opportunity, collaboration or project.
                        </p>

                        <!-- Contact Details -->
                        <div class="mt-10 space-y-5">

                            <!-- Email -->
                            <a
                                href="mailto:your-email@gmail.com"
                                class="flex items-center gap-4 group"
                            >
                                <span
                                    class="flex items-center justify-center w-12 h-12 text-xl text-purple-400 transition border shrink-0 rounded-xl border-purple-500/20 bg-purple-500/10 group-hover:bg-purple-500/20"
                                >
                                    ✉
                                </span>

                                <div>
                                    <p class="text-sm text-gray-400">
                                        Email
                                    </p>

                                    <p class="font-semibold text-white transition group-hover:text-purple-300">
                                       pabasaraayomi30@gmail.com
                                    </p>
                                </div>
                            </a>

                            <!-- Location -->
                            <div class="flex items-center gap-4">
                                <span
                                    class="flex items-center justify-center w-12 h-12 text-xl border shrink-0 rounded-xl border-sky-500/20 bg-sky-500/10 text-sky-400"
                                >
                                    ●
                                </span>

                                <div>
                                    <p class="text-sm text-gray-400">
                                        Location
                                    </p>

                                    <p class="font-semibold text-white">
                                        Sri Lanka
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="flex flex-wrap gap-4 mt-10">
                            <a
                                href="https://www.linkedin.com/in/ayomi-pabasara-b06551381?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="px-5 py-3 font-semibold text-gray-300 transition border rounded-xl border-white/10 bg-white/5 hover:border-purple-400/50 hover:bg-purple-500/10 hover:text-purple-300"
                            >
                                LinkedIn ↗
                            </a>

                        </div>
                    </div>

                    <!-- Right Contact Form -->
                    <div class="p-8 sm:p-12 lg:p-16">
                        <h3 class="text-2xl font-bold text-white">
                            Send Me a Message
                        </h3>

                        <p class="mt-3 text-gray-400">
                            Complete the form and I will respond as soon as possible.
                        </p>

                        <form action="{{ route('contact.store') }}" method="POST" class="mt-8 space-y-6">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-semibold text-gray-300"
                                >
                                    Your Name
                                </label>

                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    placeholder="Enter your name"
                                    class="w-full rounded-xl border border-white/10
                                        bg-[#070914] px-5 py-4 text-white
                                        outline-none transition
                                        placeholder:text-gray-600
                                        focus:border-purple-500
                                        focus:ring-2 focus:ring-purple-500/20"
                                >
                            </div>

                            <!-- Email -->
                            <div>
                                <label
                                    for="email"
                                    class="block mb-2 text-sm font-semibold text-gray-300"
                                >
                                    Email Address
                                </label>

                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    class="w-full rounded-xl border border-white/10
                                        bg-[#070914] px-5 py-4 text-white
                                        outline-none transition
                                        placeholder:text-gray-600
                                        focus:border-purple-500
                                        focus:ring-2 focus:ring-purple-500/20"
                                >
                            </div>

                            <!-- Message -->
                            <div>
                                <label
                                    for="message"
                                    class="block mb-2 text-sm font-semibold text-gray-300"
                                >
                                    Message
                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Write your message"
                                    class="w-full resize-none rounded-xl
                                        border border-white/10 bg-[#070914]
                                        px-5 py-4 text-white outline-none
                                        transition placeholder:text-gray-600
                                        focus:border-purple-500
                                        focus:ring-2 focus:ring-purple-500/20"
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full py-4 font-semibold text-white transition duration-300 bg-purple-600 rounded-xl px-7 hover:-translate-y-1 hover:bg-purple-500"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-white/10 bg-[#050711] px-6 py-10 lg:px-20">
            <div class="w-full">

                <!-- Footer Top -->
                <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
                    <!-- Brand -->
                    <div class="text-center md:text-left">
                        <a href="#home" class="text-2xl font-bold text-purple-400">
                            AYOMI
                        </a>

                        <p class="max-w-md mt-3 leading-6 text-gray-500 text-s">
                            IT Undergraduate interested in Software Quality Assurance
                            and Web Development.
                        </p>
                    </div>

                    <!-- Footer Navigation -->
                    <nav class="flex flex-wrap justify-center gap-6">
                        <a href="#home"
                            class="text-base font-medium text-gray-400 transition hover:text-purple-400">
                            Home
                        </a>

                        <a
                            href="#about"
                            class="text-base font-medium text-gray-400 transition hover:text-purple-400"
                        >
                            About
                        </a>

                        <a
                            href="#skills"
                            class="text-base font-medium text-gray-400 transition hover:text-purple-400"
                        >
                            Skills
                        </a>

                        <a
                            href="#projects"
                            class="text-base font-medium text-gray-400 transition hover:text-purple-400"
                        >
                            Projects
                        </a>

                        <a
                            href="#contact"
                            class="text-base font-medium text-gray-400 transition hover:text-purple-400"
                        >
                            Contact
                        </a>
                    </nav>

                    <!-- Social Links -->
                    <div class="flex items-center gap-3">
                        <a
                            href="https://www.linkedin.com/in/ayomi-pabasara-b06551381?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn profile"
                            class="flex items-center justify-center text-sm font-bold text-gray-400 transition border h-11 w-11 rounded-xl border-white/10 bg-white/5 hover:border-purple-400/50 hover:bg-blue-500/10 ">
                             <img src="{{ asset('images/linkedin.png') }}"alt="LinkedIn" class="object-contain h-11 w-11">
                        </a>

                        <a
                            href="YOUR_GITHUB_PROFILE_LINK"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="GitHub profile"
                            class="flex items-center justify-center text-sm font-bold text-gray-400 transition border h-11 w-11 rounded-xl border-white/10 bg-white/5 hover:border-purple-400/50 hover:bg-purple-500/10 hover:text-purple-300"
                        >
                            <img src="{{ asset('images/github.png') }}"alt="github" class="object-contain h-11 w-11">
                        </a>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div
                    class="flex flex-col items-center justify-center gap-3 pt-6 mt-10 text-center border-t border-white/10 sm:flex-row sm:text-left">
                    <p class="text-gray-600 text-s">
                        © {{ date('Y') }} Ayomi Pabasara. All rights reserved.
                    </p>

                </div>
            </div>
        </footer>
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: @json(session('success')),
                        confirmButtonText: 'Done',
                        background: '#111426',
                        color: '#ffffff',
                        confirmButtonColor: '#9333ea',
                    });
                });
            </script>
        @endif

        @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Unable to Send Message',
                        text: 'Please check the form and try again.',
                        confirmButtonText: 'Check Form',
                        background: '#111426',
                        color: '#ffffff',
                        confirmButtonColor: '#dc2626',
                    });
                });
            </script>
        @endif
    </body>
</html>