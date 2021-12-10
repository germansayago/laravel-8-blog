@props(['post'])

<article class="mb-8 pb-2 bg-white shadow-lg rounded-lg overflow-hidden">
  <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">

  <div class="px-6 py-4">
    <h2 class="font-bold text-xl mb-2">
      <a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a>
    </h2>
    <div class="text-gray-600 text-base">{{ $post->extract }}</div>
  </div>
  <div class="px-4 pt-4 pb-2">
    @foreach ($post->tags as $tag)
        <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full" href="{{ route('posts.tag', $tag->id) }}">{{ $tag->name }}</a>
    @endforeach
  </div>
</article>