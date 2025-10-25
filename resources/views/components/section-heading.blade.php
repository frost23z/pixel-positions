@props(['heading'])

<div {{ $attributes->class(['inline-flex items-center gap-x-2']) }}>
    <span class="w-2 h-2 bg-white inline-block"></span>
    <h3 class="font-black text-lg">{{$heading}}</h3>
</div>
