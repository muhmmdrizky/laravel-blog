<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
    <article class="max-w-screen-md py-8 border border-gray-300 bg-white p-4 rounded-md mb-4">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 May 2024
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>