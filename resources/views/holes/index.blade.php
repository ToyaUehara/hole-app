<x-app-layout>
    <x-slot name="header">
        　ホール一覧
    </x-slot>
   <p class="text-lg">ホール一覧</p>
        <div class='holes'>
              @foreach ($holes as $hole)
                <div class='hole'>
                    <h2 class='name'>
                        <a href="/holes/{{ $hole->id }}">{{ $hole->name }}</a>
                        </h2>
                </div>
              @endforeach
        </div>
        <div id="map" style="height:500px">
        </div>
           <script>
        function initMap() {
            var location = { lat: 35.693352152485296, lng: 139.74987110053527 }; // ここに表示したい緯度・経度を入力
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
</x-app-layout>
       
    
