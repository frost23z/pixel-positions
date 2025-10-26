@props(['employer', 'width' => 100, 'height' => 100])
<img src="{{asset('storage/' . $employer->logo)}}" alt="Company Logo" class="rounded-xl" width="{{$width}}"/>
