<!-- resources/views/components/frontend/navbar.blade.php -->
<nav class="bg-[#0F172A] py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Brand Name -->
        <div class="text-white font-bold text-lg">
            James Shrestha
        </div>

        <!-- Nav Menu -->
        <ul class="flex space-x-6 text-white items-center">
            <li><a href="{{ route('index') }}" class="hover:text-blue-400 transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition">About</a></li>
            <li><a href="{{ route('project') }}" class="hover:text-blue-400 transition">Projects</a></li>
            <li><a href="{{ route('skill') }}" class="hover:text-blue-400 transition">Skills</a></li>
            <li><a href="{{ route('blog') }}" class="hover:text-blue-400 transition">Blog</a></li>
            <li>
                <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
