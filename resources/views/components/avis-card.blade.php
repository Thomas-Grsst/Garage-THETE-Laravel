@props([
    'name' => 'Nom',
    'description' => 'Une petite description',
    'image' => '/images/img1.jpg'
])

<div class="flex items-start gap-5 max-w-xl">
    <img
        src="{{ $image }}"
        alt="{{ $name }}"
        class="w-20 h-20 rounded-full object-cover flex shrink-0"
        onerror="this.src='/images/img1.jpg'"
    >

    <div>
        <h3 class="text-black text-lg font-semibold">
            {{ $name }}
        </h3>

        <p class="text-gray-700 text-sm leading-relaxed mt-1">
            {{ $description }}
        </p>
    </div>
</div>
