@props(['job'])
<x-panel class="gap-x-6 w-full">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col gap-y-1">
        <a href="#" class="text-sm text-gray-400">{{$job->employer->name}}</a>
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">{{$job->title}}</a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>

    <div class="flex gap-2 self-start">
        @foreach($job->tags as $tag)
            <x-tag :$tag size="sm"/>
        @endforeach
    </div>

</x-panel>
