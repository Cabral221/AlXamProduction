<section class="section needed">
    <div class="container">
        <div class="menu-artist">
            <ul class="">
                <li class="active"><a href="#" class="">Videos</a></li>
                <li class="">
                    <a href="#" class="">mix <span class="float-right">({{ $artist->songs->count() }})</span></a>
                </li>
                <li class=""><a href="#" class="">Photos</a></li>
                <li class=""><a href="#" class="">Spectacles</a></li>
                <li class=""><a href="{{ route('artist.opportinuite') }}" class="">Opportinuités</a></li>
            </ul>
        </div>
    </div>
</section>