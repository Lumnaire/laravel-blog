<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4 items-center">
                    @if ($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}"
                            class="w-16 h-16 rounded-full">
                    @else
                        <img src="{{ asset('/default-avatar.jpg') }}" alt="Default Avatar" class="w-16 h-16 rounded-full">
                    @endif
                    <div>
                        <div class="flex gap-2">
                               <h3>{{ $post->user->name }}</h3>
                               &middot;
                               <a href="" class="text-emerald-500">Follow</a>
                        </div>
                     
                        <div class="flex gap-2 text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
