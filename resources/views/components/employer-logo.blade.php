@props(['width' => 100, 'height' => 100])
<img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{$width}}/{{$height}}" alt="Company Logo"
     class="rounded-xl"/>
