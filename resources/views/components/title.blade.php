@props(['title', 'color'])

<div class="text-center w-full">
    <div class="inline-block">
        <h1 class="text-4xl uppercase font-bold mb-2 text-{{$color}}">{{ $title }}</h1>
        <div class="h-2 w-full bg-amber-300"></div>
    </div>
</div>