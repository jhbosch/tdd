<x-guest-layout>
        <ul class="mx-w-lg bg-white border-gray-300 shadow-xl">
            @foreach($repositories as $repository)
            <li class="flex items-center text-black p-2 hover:bg-gray-300">
                <img src="{{ $repository->user->profile_photo_url }}" class="w-12 h-12 rounded-full mr-2">
                <div class="flex justify-between w-full">
                    <div class="flex-1">
                        <h2 class="text-sm font-semibold text-black">{{ $repository->url }}</h2>
                        <p>{{ $repository->description }}</p>
                    </div>
                    <span class="text-xs font-medium text-gray-600"></span>
                </div>
            </li>
                
            @endforeach
        </ul>
</x-guest-layout>
