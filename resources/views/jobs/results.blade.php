<x-layout>
    <div class="space-y-10">
        <x-page-heading>Search</x-page-heading>

        <x-section>
            <x-search :query="$query ?? null"/>
        </x-section>

        <x-section :heading="request()->is('*tags*') ? 'Results for tag ' . $tag->name : 'Results for ' . $query">
            <div class="flex flex-wrap gap-3">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </x-section>
    </div>
</x-layout>
