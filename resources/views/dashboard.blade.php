<x-app-layout>
    @section('title','Top')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-400">
                    {{ __("ようこそ! このアプリではホールのさまざまな情報について知ることができます！") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
