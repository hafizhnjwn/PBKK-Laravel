<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  @foreach ($posts as $post)
  <article class= "py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
      <h3 class= "mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h3>
    </a>
    <div class= "text-base text-gray-500">
      <a href="#">{{$post['author']}}</a> | {{ $post->created_at->format('j F Y')}}
    </div>
    <p class="my-4 font-light">{{Str::limit($post['body'])}}
      </p>
      <a href="/posts/{{ $post['slug'] }}" class="text-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>  
  @endforeach
</x-layout>