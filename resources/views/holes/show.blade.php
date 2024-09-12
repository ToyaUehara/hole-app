<x-app-layout>
    <x-slot name="header">
        　ホール詳細
    </x-slot>
    <h1 class ='name'>
        <a href="{{ $hole->homepage_url }}" target="_blank">{{ $hole->name }}</a>
    </h1>
    

    <div class='bg-red-500'>
        <div class="content_hole">
            <h3>キャパシティ</h3>
            <p>{{ $hole->capacity }}</p>
        </div>
    </div>
    
    <h1>口コミ</h1>
    <div class="posts">
        @foreach($posts as $post)
            <p>{{ $post->user->name }} : {{ $post->evaluation }}</p>
            <div class="post_body">
                {{ $post->body }}
            </div>
        @endforeach
    </div>
     <a href="/holes/{{ $hole->id }}/posts/create">口コミ作成</a>
    <div class="footer">
        <a href="/holes">戻る</a>
    </div>
</x-app-layout>
       