<x-app-layout>
    <x-slot name="header">
        　口コミ
    </x-slot>
   <h1>口コミ一覧</h1>
        <div class='posts'>
              @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='evaluation'>
                        <a href="/posts/{{ $post->evaluation }}">{{ $post->body }}</a>
                        </h2>
                </div>
              @endforeach
        </div>
</x-app-layout>
