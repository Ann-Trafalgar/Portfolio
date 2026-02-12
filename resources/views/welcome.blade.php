<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Joshua's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        /* INFINITE SCROLL ANIMATION */
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
        .group:hover .animate-marquee {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-black text-gray-300 antialiased selection:bg-blue-500 selection:text-white pb-10">

    <div class="max-w-6xl mx-auto px-4 py-2 md:px-6 md:py-4 space-y-3">

        <header class="flex flex-col md:flex-row gap-6 items-center md:items-start py-4">
            <div class="relative w-32 h-32 md:w-44 md:h-44 rounded-2xl overflow-hidden shrink-0 group cursor-pointer">
                 <img src="{{ asset('images/screenshot-2024-12-01-200228.png') }}"
                      alt="Profile Default"
                      class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
                 <img src="{{ asset('images/ddee1f1a200b24199709ee90c7014a08.jpg') }}"
                      alt="Profile Anime"
                      class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 group-hover:opacity-100">
            </div>
            
            <div class="flex-1 flex flex-col items-center md:items-start text-center md:text-left h-full justify-center py-1">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 flex items-center gap-2">
                    Mark Joshua V. Fabianes
                    <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                </h1>
                
                <p class="text-gray-400 mb-4 flex items-center gap-2 text-sm md:text-base">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Manila, Philippines
                </p>
                
                <p class="text-lg font-medium text-white mb-6 max-w-xl leading-tight">
                    Aspiring Software Engineer | Student | BSCSSE. <br>
                    <span class="text-gray-500 text-base font-normal">Building systems that solve real-world problems.</span>
                </p>

                <div class="flex flex-wrap gap-3 justify-center md:justify-start w-full">
                    <a href="https://teams.microsoft.com/l/chat/0/0?users=mvfabianes@fit.edu.ph" target="_blank" 
                       class="bg-white text-black font-bold px-6 py-2.5 rounded-lg text-sm hover:bg-gray-200 transition inline-block text-center">
                        Schedule a Call
                    </a>
                    
                    <a href="mailto:markfabianes89@gmail.com" 
                       class="bg-black border border-white/20 hover:border-white text-white font-semibold px-6 py-2.5 rounded-lg text-sm transition flex items-center gap-2">
                        Send Email
                    </a>
                </div>
            </div>
        </header>

        <div class="flex flex-col lg:flex-row gap-3">
            
            <div class="flex-1 flex flex-col gap-3">
                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <h2 class="text-lg md:text-xl font-bold text-white mb-4 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        About Me
                    </h2>
                    <div class="text-gray-400 leading-relaxed space-y-4 text-sm md:text-base">
                        <p>Hi! I'm an 2nd Year BSCSSE student at FEUTECH, passionate about building systems that solve real problems.</p>
                        <p>I am now learning to be a fullstack developer. Currently, I'm mastering <span class="text-white">Laravel</span> and <span class="text-white">Supabase</span>.</p>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <h2 class="text-lg md:text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                        Education
                    </h2>
                    <div class="relative pl-6 border-l-2 border-gray-800">
                        <div class="absolute -left-[5px] top-2 w-2 h-2 rounded-full bg-blue-500"></div>
                        <h3 class="text-white font-bold text-base md:text-lg">BS Computer Science (SE)</h3>
                        <p class="text-gray-400 text-sm md:text-base">FEU Institute of Technology</p>
                        <p class="text-sm text-gray-600 mt-1">2024 - Present</p>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg md:text-xl font-bold text-white flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Projects
                        </h2>
                        <span class="text-xs text-gray-400 cursor-pointer hover:text-white transition">View All ></span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="group relative block bg-[#0a0a0a] border border-white/20 rounded-xl overflow-hidden hover:border-white/40 transition">
                            <div class="h-32 bg-gradient-to-br from-orange-50 to-yellow-50 relative overflow-hidden">
                                <img src="https://placehold.co/400x300/FFF5E1/333?text=PawsitiveCare" alt="PawsitiveCare" class="w-full h-full object-cover opacity-90">
                            </div>
                            <div class="bg-black p-4">
                                <h3 class="text-white font-bold text-sm mb-1">PawsitiveCare</h3>
                                <p class="text-gray-400 text-xs mb-3 line-clamp-2">Secure multi-role pet care management via Laravel</p>
                                <button class="px-3 py-1.5 bg-white/5 border border-white/20 rounded-lg text-xs text-white hover:bg-white hover:text-black transition">
                                    View Case Study
                                </button>
                            </div>
                        </div>

                        <div class="group relative block bg-[#0a0a0a] border border-white/20 rounded-xl overflow-hidden hover:border-white/40 transition">
                            <div class="h-32 bg-gradient-to-br from-teal-900 to-teal-700 relative overflow-hidden">
                                <img src="https://placehold.co/400x300/0D9488/FFF?text=Coffee+Co." alt="Mr. Beans Coffee Co." class="w-full h-full object-cover opacity-90">
                            </div>
                            <div class="bg-black p-4">
                                <h3 class="text-white font-bold text-sm mb-1">Mr. Beans Coffee Co.</h3>
                                <p class="text-gray-400 text-xs mb-3 line-clamp-2">E-commerce Coffee Store - UI/UX WordPress & SEO Optimization</p>
                                <button class="px-3 py-1.5 bg-white/5 border border-white/20 rounded-lg text-xs text-white hover:bg-white hover:text-black transition">
                                    mrbeans.online
                                </button>
                            </div>
                        </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8 overflow-hidden group">
                    <h2 class="text-lg md:text-xl font-bold text-white mb-4 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Beyond the Screen
                    </h2>
                    
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        When I step away from the tech world, I focus on the gym, games, and travel to fuel my creativity and well-being.
                    </p>

                    <div class="relative w-full overflow-hidden h-32">
                        <div class="flex gap-4 absolute whitespace-nowrap animate-marquee">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Gym" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Travel" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Gaming" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Gym" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Travel" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                            <img src="https://placehold.co/200x120/1a1a1a/FFF?text=Gaming" class="h-32 w-48 object-cover rounded-xl border border-white/20">
                        </div>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <h2 class="text-lg md:text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        Recommendations
                    </h2>

                    <div class="space-y-4">
                        <div class="bg-[#0a0a0a] border border-white/10 p-5 rounded-xl flex flex-col md:flex-row gap-4 relative">
                            <svg class="w-8 h-8 text-white/10 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <img src="https://ui-avatars.com/api/?name=Sarah+L&background=222&color=fff" class="w-12 h-12 rounded-full object-cover shrink-0 border border-white/20">
                            <div>
                                <h4 class="text-white font-bold text-sm">Beru</h4>
                                <p class="text-gray-500 text-xs mb-3">Lead Developer at TechSolutions Inc.</p>
                                <p class="text-gray-400 text-sm italic leading-relaxed">"Master Mark is so good"</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="flex-1 flex flex-col gap-3">
                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <h2 class="text-lg md:text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Experience
                    </h2>
                    <div class="space-y-8">
                        <div class="group">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-1">
                                <h3 class="text-white font-bold text-base md:text-lg group-hover:text-blue-400 transition">Junior Developer</h3>
                                <span class="text-sm text-gray-500 mt-1 md:mt-0">2025 - Present</span>
                            </div>
                            <p class="text-sm text-gray-400">ACMX</p>
                        </div>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg md:text-xl font-bold text-white flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path></svg>
                            Tech Stack
                        </h2>
                        <span class="text-xs text-gray-400 cursor-pointer hover:text-white">View All ></span>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-white font-bold mb-3">Frontend</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 bg-orange-950/30 border border-orange-500/50 rounded-lg text-sm text-orange-300">HTML</span>
                                <span class="px-3 py-1.5 bg-blue-950/30 border border-blue-500/50 rounded-lg text-sm text-blue-300">CSS</span>
                                <span class="px-3 py-1.5 bg-yellow-950/30 border border-yellow-500/50 rounded-lg text-sm text-yellow-300">JavaScript</span>
                                <span class="px-3 py-1.5 bg-red-950/30 border border-red-500/50 rounded-lg text-sm text-red-300">Blade</span>
                                <span class="px-3 py-1.5 bg-sky-950/30 border border-sky-500/50 rounded-lg text-sm text-sky-300">Tailwind CSS</span>
                                <span class="px-3 py-1.5 bg-purple-950/30 border border-purple-500/50 rounded-lg text-sm text-purple-300">Vite</span>
                                <span class="px-3 py-1.5 bg-blue-950/30 border border-blue-600/50 rounded-lg text-sm text-blue-300">Typescript</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-3">Backend & Database</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 bg-indigo-950/30 border border-indigo-500/50 rounded-lg text-sm text-indigo-300">PHP</span>
                                <span class="px-3 py-1.5 bg-red-950/30 border border-red-600/50 rounded-lg text-sm text-red-400 font-medium">Laravel</span>
                                <span class="px-3 py-1.5 bg-emerald-950/30 border border-emerald-500/50 rounded-lg text-sm text-emerald-300">Python</span>
                                <span class="px-3 py-1.5 bg-green-950/30 border border-green-600/50 rounded-lg text-sm text-green-400">Node.js</span>
                                <span class="px-3 py-1.5 bg-cyan-950/30 border border-cyan-600/50 rounded-lg text-sm text-cyan-300">MySQL</span>
                                <span class="px-3 py-1.5 bg-blue-950/30 border border-blue-600/50 rounded-lg text-sm text-blue-300">PostgreSQL</span>
                                <span class="px-3 py-1.5 bg-teal-950/30 border border-teal-500/50 rounded-lg text-sm text-teal-300">Supabase</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-3">Tools & Specialized</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 bg-orange-950/30 border border-orange-700/50 rounded-lg text-sm text-orange-400">Git & GitHub</span>
                                <span class="px-3 py-1.5 bg-blue-950/30 border border-blue-600/50 rounded-lg text-sm text-blue-400">VS Code</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg md:text-xl font-bold text-white flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Certifications
                        </h2>
                        <span class="text-xs text-gray-400 cursor-pointer hover:text-white transition">View All ></span>
                    </div>

                    <div class="space-y-3">
                        <div class="bg-[#1a1a1a] border border-white/20 rounded-xl p-4">
                            <h3 class="text-white font-bold text-sm mb-1">Associate Data Analyst</h3>
                            <p class="text-gray-500 text-xs">DataCamp • 2025</p>
                        </div>

                        <div class="bg-[#1a1a1a] border border-white/20 rounded-xl p-4">
                            <h3 class="text-white font-bold text-sm mb-1">Intermediate SQL</h3>
                            <p class="text-gray-500 text-xs">DataCamp • 2025</p>
                        </div>

                        <div class="bg-[#1a1a1a] border border-white/20 rounded-xl p-4">
                            <h3 class="text-white font-bold text-sm mb-1">Intermediate Python</h3>
                            <p class="text-gray-500 text-xs">DataCamp • 2025</p>
                        </div>
                    </div>
                </section>

                <section class="bg-black border-2 border-white/20 rounded-2xl p-6 md:p-8">
                    <div class="md:flex md:items-start md:gap-6">
                        <!-- Left: heading + copy + follow icons -->
                        <div class="md:w-2/3">
                            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight">Let's work<br>together.</h2>

                            <p class="text-gray-400 text-sm mb-6 leading-relaxed max-w-xl">
                                Available for UI/UX and WordPress freelance projects, with added support in SEO, Google Search Console (GSC), Google My Business (GMB), and email campaigns. I'm open to discussing new projects, creative ideas, or collaborations.
                            </p>

                            <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-3">Follow Me</p>
                            <div class="flex gap-2">
                                <a href="https://www.linkedin.com/in/mark-joshua-fabianes-7580ab381/" target="_blank" class="w-10 h-10 border border-white/10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition bg-black/40">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>

                                <a href="https://github.com/Ann-Trafalgar" target="_blank" class="w-10 h-10 border border-white/10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition bg-black/40">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>

                                <a href="#" target="_blank" class="w-10 h-10 border border-white/10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition bg-black/40">
                                    <!-- TikTok icon (filled style) -->
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.234 2v6.09a4.63 4.63 0 00-2.92-.99 4.82 4.82 0 100 9.64c2.66 0 4.86-2.07 4.86-4.63V9.5h2.42V7.1c-.92.18-1.86.26-2.77.26-.43 0-.86-.02-1.29-.06V2z"/></svg>
                                </a>
                            </div>
                        </div>

                        <!-- Right: contact cards -->
                        <div class="md:w-1/3 mt-6 md:mt-0">
                            <div class="flex justify-end mb-3">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider px-3 py-1 rounded bg-black/50">GET IN TOUCH</span>
                            </div>

                            <div class="space-y-3 md:space-y-4">
                                <a href="mailto:markfabianes89@gmail.com" class="w-full flex items-center gap-4 p-4 border border-white/10 rounded-xl hover:bg-white/5 transition">
                                    <div class="w-12 h-12 rounded-lg bg-[#0b0b0b] border border-white/6 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Email</p>
                                        <p class="text-white text-sm truncate">send email</p>
                                    </div>
                                </a>

                                <a href="https://teams.microsoft.com/l/chat/0/0?users=mvfabianes@fit.edu.ph" target="_blank" class="w-full flex items-center gap-4 p-4 border border-white/10 rounded-xl hover:bg-white/5 transition">
                                    <div class="w-12 h-12 rounded-lg bg-[#0b0b0b] border border-white/6 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Let's Talk</p>
                                        <p class="text-white text-sm">Schedule a Call</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <footer class="mt-12 pt-8 text-center text-gray-600 text-sm">
            <p>&copy; 2026 Mark Joshua. All Rights Reserved.</p>
            <p class="mt-1">Developed in Manila, Philippines</p>
        </footer>

    </div>
</body>
</html>