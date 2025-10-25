<x-layout>
    <div class="space-y-10">
        <section class="flex flex-col gap-y-6 text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="">
                <input
                    type="text"
                    placeholder="Job title, keywords, or company"
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 border w-full max-w-lg focus:border-blue-600 placeholder-gray-400 focus:outline-none transition-colors duration-300"
                />
            </form>
        </section>
        <x-section>
            <x-slot:heading>
                Featured Jobs
            </x-slot:heading>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach($jobs[0] as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </x-section>

        <x-section>
            <x-slot:heading>
                Tags
            </x-slot:heading>
            <div class="flex flex-wrap gap-3">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </x-section>

        <x-section>
            <x-slot:heading>
                Recent Jobs
            </x-slot:heading>
            <div class="flex flex-wrap gap-3">
                @foreach($jobs[1] as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </x-section>
    </div>
</x-layout>
