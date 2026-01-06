@props(['titre' => 'Title', 'description' => 'description', 'image' => '/images/img1.jpg'])

<div class="flex shrink-0 w-64 h-90 bg-amber-300 shadow-md flex-col justify-center items-center text-center">
    <!-- Image en haut -->
    <div class="mb-3">
        <img
            src="{{$image}}"
            alt="{{ $titre }}"
            class="w-full h-60 object-cover"
            onerror="this.src='/images/img1.jpg'; this.alt='Image non disponible'"
        >
    </div>
    
    <!-- Titre et description -->
    <h3 class="text-lg font-bold text-white mb-2">{{ $titre }}</h3>
    <p class="text-white text-sm flex grow pl-1 pr-1">{{ $description }}</p>
</div>