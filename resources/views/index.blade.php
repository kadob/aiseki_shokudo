<x-layout>
    <x-slot name="title">
        相席食堂いっただっきまーす
    </x-slot>
        <div class="row">
            <div id="map" class="col-12"></div>
            <script src="{{ asset('/mapSpot/mapSpot.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{config('services.map_key')}}&callback=initMap" async defer></script>
        </div>
</x-layout>
