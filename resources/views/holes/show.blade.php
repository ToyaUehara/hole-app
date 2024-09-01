<x-app-layout>
    <x-slot name="header">
        　ホール詳細
    </x-slot>
    <h1 class ='name'>
            {{ $hole->name }}
        </h1>
                <div class='bg-indigo-500'>
                    <div class="content_hole">
                        <h3>キャパシティ</h3>
                        <p>{{ $hole->capacity }}</p>
                        <h4>ホームページ</h4>
                       <a href="{{ $hole->homepage_url }}" target="_blank">ホームページ</a> 
                    </div>
                </div>
        <div class="footer">
            <a href="/holes">戻る</a>
        </div>
</x-app-layout>
       