<x-frontend-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#0f172a] to-[#0b1120] text-white py-20">
        <div class="container mx-auto px-6 flex flex-col-reverse lg:flex-row items-center justify-between gap-12">

            <!-- Left Content -->
            <div class="max-w-xl text-center lg:text-left">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    <span class="text-white">James Shrestha</span><br>
                    <span class="text-blue-500">Full-Stack Developer & AI Enthusiast</span>
                </h1>
                <p class="text-gray-300 text-lg mb-8">
                    I build intelligent, real-world digital solutions using <br class="hidden sm:inline"> Laravel, React, and AI.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('project') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-semibold transition duration-300">
                        View Projects &rarr;
                    </a>
                    <a href="{{ route('contact') }}" class="border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-6 py-3 rounded-md font-semibold transition duration-300">
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="flex justify-center lg:justify-end">
                <img src="{{ asset('pic profile.jpg') }}" alt="Profile" class="w-52 h-52 rounded-full object-cover shadow-lg border-4 border-white">

            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="bg-[#111827] text-white py-16 px-6 md:px-20">
        <div class="bg-[#1F2937] rounded-xl shadow-lg px-8 py-12">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 items-start">

                <!-- Left: Profile Image -->
                {{-- <div class="w-full md:w-1/3 flex justify-center"> --}}
                {{-- <div class="w-full md:w-1/3 flex justify-center items-center">

        <img src="{{ asset('pic profile.jpg') }}" alt="Profile"
                class="rounded-xl shadow-md w-full md:max-w-xs max-h-[500px] object-cover" />
            </div> --}}
            <!-- Left: Profile Image -->
            <div class="w-full md:w-1/3 flex justify-center items-center">
                <img src="{{ asset('pic profile.jpg') }}" alt="Profile" class="rounded-xl shadow-md w-full md:max-w-xs max-h-[500px] object-cover" />
            </div>


            <!-- Right: Content -->
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl font-bold mb-6">About Me</h2>

                <!-- Who I Am -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-2">Who I Am</h3>
                    <p class="text-gray-300 leading-relaxed">
                        I'm a passionate full-stack developer with a strong focus on building practical, user-friendly applications
                        that solve real-world problems. With over 5 years of experience in web and mobile development, I've worked
                        on a diverse range of projects from news portals to AI-powered applications.
                    </p>
                </div>

                <!-- What I Love -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-4">What I Love</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div>
                            <p class="font-semibold mb-1">Backend</p>
                            <p class="text-gray-300">Laravel, Filament, .NET Core</p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Frontend</p>
                            <p class="text-gray-300">Nuxt, Tailwind CSS</p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">AI/ML</p>
                            <p class="text-gray-300">Python, scikit-learn, TensorFlow</p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Tools</p>
                            <p class="text-gray-300">Git, VS Code, Docker</p>
                        </div>
                    </div>
                </div>

                <!-- Career Goals -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-2">Career Goals</h3>
                    <p class="text-gray-300 leading-relaxed">
                        My aim is to create technology that makes a positive impact on people’s lives. I'm particularly interested
                        in working on projects that combine web technologies with AI to solve complex problems in fields like
                        healthcare, education, and sustainability.
                    </p>
                </div>

                <!-- Resume Button -->
                <a href="{{asset('james.cv.pdf')}}" download class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded transition">
                    ⬇️ Download Resume
                </a>
            </div>
        </div>
        </div>
    </section>



    {{-- project --}}
    <section class="bg-gray-900 text-white py-16 px-6 md:px-20">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>

            <!-- Project Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Project Card 1 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Samachar Hub" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2">Samachar Hub</h3>
                        <p class="text-gray-300 mb-4 text-sm">
                            A comprehensive news portal built with Laravel backend and React frontend. Features include content management, user authentication, and personalized news recommendations.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs mb-4">
                            <span class="bg-blue-600 px-2 py-1 rounded">Laravel</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">React</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">MySQL</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">Tailwind CSS</span>
                        </div>
                        {{-- <div class="flex justify-between text-sm text-blue-400">
                            <a href="#" class="hover:underline">🔗 Live Demo</a>
                            <a href="#" class="hover:underline">🐙 GitHub</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Spam Detection System" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2">Spam Email Detection System</h3>
                        <p class="text-gray-300 mb-4 text-sm">
                            An AI-powered spam detection system that uses machine learning algorithms to identify and filter unwanted emails with high accuracy.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs mb-4">
                            <span class="bg-blue-600 px-2 py-1 rounded">Python</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">scikit-learn</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">Flask</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">NLP</span>
                        </div>
                        {{-- <div class="flex justify-between text-sm text-blue-400">
                            <a href="#" class="hover:underline">🔗 Live Demo</a>
                            <a href="#" class="hover:underline">🐙 GitHub</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Learning Profile App" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2">Learning Profile App</h3>
                        <p class="text-gray-300 mb-4 text-sm">
                            A React Native mobile application for tracking learning progress, setting goals, and connecting with mentors. Features offline support and personalized learning paths.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs mb-4">
                            <span class="bg-blue-600 px-2 py-1 rounded">React Native</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">Firebase</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">Redux</span>
                            <span class="bg-blue-600 px-2 py-1 rounded">Expo</span>
                        </div>
                        {{-- <div class="flex justify-between text-sm text-blue-400">
                            <a href="#" class="hover:underline">🔗 Live Demo</a>
                            <a href="#" class="hover:underline">🐙 GitHub</a>
                        </div> --}}
                    </div>
                </div>

            </div>

            <!-- View All Projects Button -->
            <div class="mt-12 text-center">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded transition">
                    View All Projects
                </a>
            </div>
        </div>
    </section>


    {{-- skill --}}
    <section class="bg-gray-900 text-white py-16 px-6 md:px-20">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">My Skills</h2>

            <!-- Backend Skills -->
            <div class="bg-gray-800 p-6 rounded-lg mb-8 shadow-md">
                <h3 class="text-lg font-semibold mb-4">Backend Development</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>Laravel</span><span>90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>.NET Core</span><span>85%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>PHP</span><span>90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>C#</span><span>80%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>Node.js</span><span>75%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Frontend Skills -->
            <div class="bg-gray-800 p-6 rounded-lg mb-10 shadow-md">
                <h3 class="text-lg font-semibold mb-4">Frontend Development</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>React</span><span>90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>Tailwind CSS</span><span>95%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 95%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>JavaScript</span><span>90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>TypeScript</span><span>85%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm">
                            <span>HTML/CSS</span><span>95%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded h-2 mt-1">
                            <div class="bg-blue-500 h-2 rounded" style="width: 95%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Skills Button -->
            <div class="text-center">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded transition">
                    View All Skills
                </a>
            </div>
        </div>
    </section>

    {{-- get in touch  --}}
    <section class="p-10 bg-[#121C31] flex items-center justify-center ">
        <div class="w-full max-w-xl bg-[#1e293b] rounded-lg p-8 shadow-md text-white">
            <h2 class="text-2xl font-bold text-center mb-2">Get In Touch</h2>
            <p class="text-center text-gray-300 mb-6">
                Interested in working together? Fill out the form below or reach out through my social channels.
            </p>

            <form action="#" method="POST" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-300">Name</label>
                        <input type="text" placeholder="Your name" class="w-full px-4 py-2 rounded bg-[#334155] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-300">Email</label>
                        <input type="email" placeholder="your.email@example.com" class="w-full px-4 py-2 rounded bg-[#334155] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-300">Subject</label>
                    <select class="w-full px-4 py-2 rounded bg-[#334155] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Select a subject</option>
                        <option>Project Inquiry</option>
                        <option>Job Opportunity</option>
                        <option>Collaboration</option>
                        <option>Other</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-300">Message</label>
                    <textarea rows="5" placeholder="Your message here..." class="w-full px-4 py-2 rounded bg-[#334155] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-medium transition duration-300">
                    Send Message
                </button>
            </form>

            <p class="mt-6 text-center text-gray-300 text-sm">
                Want to see more ways to connect?<br />
                <a href="#" class="text-blue-400 hover:underline">Visit the contact page →</a>
            </p>
        </div>
    </section>

</x-frontend-layout>
