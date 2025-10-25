@props(['job'])
<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-wrap gap-2">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="sm"/>
            @endforeach
        </div>
        <x-employer-logo width='42' height="42"/>
    </div>
</x-panel>
