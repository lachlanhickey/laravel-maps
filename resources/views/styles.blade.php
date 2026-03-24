@if ($enabled)
    @if ($service == 'osm' || $service == 'bing' || $service == 'mapquest')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" type="text/css">
    @endif
    @if ($service == 'mapquest')
        <link rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest-core.css" type="text/css">
    @endif
    <link rel="stylesheet" href="{{ asset('vendor/maps/css/index.css') }}" type="text/css">
@endif
