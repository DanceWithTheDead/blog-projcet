<x-layout>
    Post-page
    <x-slot:abb>
        @foreach( $posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    </x-slot:abb>
</x-layout>




