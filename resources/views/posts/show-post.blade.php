<x-layout>
    <x-slot:post>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </x-slot:post>
</x-layout>
