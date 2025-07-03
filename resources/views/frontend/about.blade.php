<x-frontend-layout>
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
</x-frontend-layout>
