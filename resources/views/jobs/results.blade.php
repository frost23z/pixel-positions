<x-layout>
    <div class="space-y-10">
        <x-page-heading>Search</x-page-heading>

        <section>
            <x-forms.form action="/search" class="w-full">
                <x-forms.input :label="false" name="query" placeholder="Job title, keywords, or company"
                               :value="$query?? null"/>
            </x-forms.form>
        </section>

        <x-section>
            <x-slot:heading>
                @if(request()->is('*tags*'))
                    Results for tag "{{ $tag->name }}"
                @else
                    Results for "{{ $query }}"
                @endif
            </x-slot:heading>
            <div class="flex flex-wrap gap-3">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </x-section>
    </div>
</x-layout>
