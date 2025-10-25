@props(['query' => null])

<x-forms.form action="/search" {{ $attributes->class(['w-full']) }}>
    <x-forms.input :label="false" name="query" placeholder="Job title, keywords, or company" :value="$query"/>
</x-forms.form>
