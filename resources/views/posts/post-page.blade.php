<x-layout>
    Post-page
    <x-slot:posts>
        @foreach( $posts as $post)
            <div class="card mt-2">
                <h5 class="card-header text-bg-primary">{{ $post->title }}</h5>
                <div class="card-body">
                    <h1 class="card-title">Special title treatment</h1>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-dark mt-2">Open post</a>
                </div>
            </div>
        @endforeach
    </x-slot:posts>
</x-layout>




