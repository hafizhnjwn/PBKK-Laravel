<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <!-- <article class= "py-8 max-w-screen-md ">
      <h3 class= "mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h3>
    <div>
      By
      <a href="/authors/{{$post->author->username}}" class="hover:underline text-base text-gray-500">{{$post->author->name}}</a> 
      in
      <a href="/categories/{{$post->category->slug}}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a>
      | {{ $post->created_at->format('j F Y')}}
    </div>
    <p class="my-4 font-light">{{ $post->body }}
      </p>
      <a href="/posts" class="text-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
  </article>   -->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <div>
                          <a href="/authors/{{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author->name}}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->format('j F Y')}}</p>
                          <a href="/categories/{{$post->category->slug}}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          <p>{{$post->body}}</p>
          <a href="/posts" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                      &laquo; Back to posts
                  </a>
      </article>
  </div>
</main>    
</x-layout>