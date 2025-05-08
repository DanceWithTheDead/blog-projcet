<x-layout>
    Post-page
    <x-slot:abb>
        @foreach( $posts as $post)
        <div class="card mt-2" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="/post" class="btn btn-primary">{{ $post->title }}</a>
            </div>
        </div>
        @endforeach
    </x-slot:abb>
</x-layout>




