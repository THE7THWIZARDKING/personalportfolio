<x-frontend-layout>
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
</x-frontend-layout>
