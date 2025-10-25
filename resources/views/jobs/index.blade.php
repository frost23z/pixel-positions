<x-layout>
    <div class="space-y-10">
        <x-page-heading>Let's Find Your Next Job</x-page-heading>

        <x-section>
            <x-search/>
        </x-section>

        <x-section heading="Featured Jobs">
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach($jobs[0] as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </x-section>

        <x-section heading="Tags">
            <div class="flex flex-wrap gap-3">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </x-section>

        <x-section heading="Recent Jobs">
            <div class="flex flex-wrap gap-3">
                @foreach($jobs[1] as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </x-section>
    </div>
</x-layout>
