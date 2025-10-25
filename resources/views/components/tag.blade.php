@props(['size' => 'base'])
@php
    $classes = "bg-white/10 hover:bg-white/30 transition-colors duration-300 font-bold rounded-xl"
        . ($size === 'sm' ? ' text-2xs px-3 py-1' : '')
        . ($size === 'base' ? ' text-sm px-4 py-1' : '')
@endphp

<a href="#" class="{{$classes}}">{{$slot}}</a>
