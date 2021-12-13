<x-app-layout>

  <div class="container py-8">
    <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
    <div class="text-lg text-gray-500 mb-2">
      {{ $post->extract }}
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="md:col-span-2">
        <figure>
          <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url)}}" alt="">
        </figure>
        <div class="text-base text-gray-500 mt-4">
          {{ $post->body }}
        </div>
      </div>
      <aside>
        <h1 class="text-xl font-bold text-gray-600 mb-4">Mas en <span class="text-gray-800">{{ $post->category->name }}</span></h1>
        <ul>
          @foreach ($similars as $similar)
              <li class="mb-4">
                <a class="flex" href="{{ route('posts.show', $similar->id) }}">
                  <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($similar->image->url)}}" alt="">
                  <span class="ml-2">{{ $similar->name }}</span>
                </a>
              </li>
          @endforeach
        </ul> 
        <hr class="mt-8 mb-6">
        <h1 class="text-xl font-bold text-gray-600 mb-4">Categorías</h1>
        <div>
          @foreach ($categories as $category)
          <a class="inline-block px-3 h-6 bg-gray-300 text-gray-800 rounded-full mb-3" href="{{ route('posts.category', $category) }}">
            {{ $category->name }}
          </a>
          @endforeach
        </div>
        <hr class="mt-8 mb-6">

        <h1 class="text-xl font-bold text-gray-600 mb-4">Etiquetas</h1>
        <div>
          @foreach ($tags as $tag)
            <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full mb-3" href="{{ route('posts.tag', $tag->id) }}">
              {{ $tag->name }}
            </a>
          @endforeach
        </div>
      </aside>
    </div>
  </div>

</x-app-layout>