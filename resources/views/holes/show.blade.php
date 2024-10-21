<x-app-layout>
    <x-slot name="header">
        　ホール詳細
    </x-slot>
    <h1 class ='name border-t-2 border-black text-xl font-mono'>
        <a href="{{ $hole->homepage_url }}" target="_blank">{{ $hole->name }}</a>
    </h1>
    

    <div class='border-t-2 border-b-2 border-black'>
        <div class="content_hole">
            <h3 class = "text-lg font-mono">キャパシティ</h3>
            <p class = "text-base font-mono">{{ $hole->capacity }}</p>
        </div>
    </div>
    
    <h1 class = "text-lg font-mono">地図</h1>
     <div id="map" style="height:500px; border-bottom-width: 2px; border-color: #000000 ">
        </div>
    <script>
         function initMap() {
            var location = { lat: {{ $hole->latitude }}, lng: {{ $hole->longitude}} }; // ここに表示したい緯度・経度を入力
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
        <script src="https://maps.googleapis.com/maps/api/js?lnguage=ja&region=JP&key=AIzaSyDoY9BC-HA8Hs7lXIRYUauqgVZyKt3i4GI&callback=initMap" async defer>
         </script>
    
    <h1 class = "text-lg font-mono">口コミ</h1>
    <div class="posts">
        @foreach($posts as $post)
            <p class = "text-base font-mono ">{{ $post->user->name }} : {{ $post->evaluation }}</p>
            <div class="post_body text text-base font-mono border-b border-black">
                {{ $post->body }}
            </div>
        @endforeach
    </div>
     <a href="/holes/{{ $hole->id }}/posts/create">口コミ作成</a>
    <div class="footer text-sm font-mono">
        <a href="/holes">戻る</a>
    </div>
</x-app-layout>
       