<x-layout>
    <x-slot:postitle>
        <h1 class="font-bold">{{ $post->title }}</h1>
    </x-slot:postitle>
    <x-slot:post>
        <p>{{ $post->content }}</p>
    </x-slot:post>
</x-layout>
