@props(['heading' => null])

<section class="space-y-5">
    @if($heading)
        <x-section-heading :heading="$heading"/>
    @endif
    {{$slot}}
</section>
