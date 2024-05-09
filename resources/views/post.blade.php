<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="max-w-screen-md py-8 border border-gray-300 bg-white p-4 rounded-md mb-4">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 May 2024
        </div>
        <p class="my-4 font-light">{{ $post['body']}}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts</a>
    </article>
</x-layout>