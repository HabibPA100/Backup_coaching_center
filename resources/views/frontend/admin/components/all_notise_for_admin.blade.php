<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @if($posts->isNotEmpty())
        <!-- Card Loop -->
        @foreach ($posts as $post)
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
            <!-- Image Section -->
            @if ($post->image)
            <div class="h-48">
                <img src="{{ asset('storage/' . $post->image) }}" 
                     alt="Post Image" 
                     class="w-full h-full p-2">
            </div>
            @endif
            
            <!-- Content Section -->
            <div class="p-4">
                <!-- Title -->
                <h2 class="text-lg font-bold text-gray-800 mb-2">
                    {{ $post->title}}
                </h2>
                
                <!-- Description -->
                <p class="text-gray-600 leading-relaxed">
                    {{ $post->description}}
                </p>
            </div>
        </div>
        @endforeach
        @else
        <p class="text-center text-2xl text-red-800">No Data Found For You</p>
        @endif
    </div>
</div>

  