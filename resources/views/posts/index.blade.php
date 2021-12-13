<x-app-layout>

  <div class="container py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      @foreach ($posts as $post)
          <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2  @endif" style="background-image: url({{ Storage::url($post->image->url) }})">
            <div class="w-full h-full px-8 flex flex-col justify-center">
              <div class="mb-3">
                @foreach ($post->tags as $tag)
                  <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full" href="{{ route('posts.tag', $tag)}}">{{ $tag->name }}</a>
                @endforeach
              </div>
              <h1 class="mb-3">
                <a class="text-4xl text-white leading-8 font-bold" href="{{ route('posts.show', $post->id) }}">
                  {{ $post->name }}
                </a>
              </h1>
              <div>

                <a class="inline-block px-3 h-6 bg-gray-300 text-gray-800 rounded-full mb-3" href="{{ route('posts.category', $post->category)}}">{{ $post->category->name }}</a>
              </div>
            </div>
          </article>
      @endforeach
    </div>
    <div class="mt-4">
      {{$posts->links()}}
    </div>
  </div>

</x-app-layout>