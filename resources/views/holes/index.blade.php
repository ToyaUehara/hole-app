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
</x-app-layout>
       
    