<x-frontend-layout>
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
