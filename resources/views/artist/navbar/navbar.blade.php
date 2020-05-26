@if ($artist->typeArtist->libele === 'Musicien')
    {{-- Navbar Musicien --}}
    @include('artist.navbar.musicien')
@elseif($artist->typeArtist->libele === 'Danseur')
    {{-- Navbar Danseur --}}
    @include('artist.navbar.danseur')
@elseif($artist->typeArtist->libele === 'Designer')
    {{-- Navbar Designer --}}
    @include('artist.navbar.designer')
@endif