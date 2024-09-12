<x-app-layout>
    <x-slot name="header">
        　口コミ詳細
    </x-slot>
    <h1 class ='evaluation'>
            {{ $hole->evaluation }}
        </h1>
                <div class='bg-indigo-500'>
                    <div class="content_post">
                        <h3>説明</h3>
                        <p>{{ $post->body }}</p>
                        <h4>ホームページ</h4>
                       <a href="{{ $hole->image_url }}" target="_blank">ホームページ</a> 
                    </div>
                </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
</x-app-layout>
       