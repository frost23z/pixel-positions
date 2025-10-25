<x-layout>
    <div class="space-y-10">
        <x-page-heading>Let's Find Your Next Job</x-page-heading>

        <section>
            <x-forms.form action="/search" class="w-full">
                <x-forms.input :label="false" name="query" placeholder="Job title, keywords, or company"/>
            </x-forms.form>
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
