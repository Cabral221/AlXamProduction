{{-- Afficher le partage de media --}}
<div class="modal fade" id="showShareModal" tabindex="-1" role="dialog" aria-labelledby="showShareModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="showShareModalLongTitle">Partager sur les réseaux sociaux</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row share-info bg-dark text-white pt-3 pb-3 mr-1 ml-1">
                <div class="col-sm-3">
                    <img src="" alt="" width="100%" class="song-thumbnail">
                </div>
                <div class="col-sm-9">
                    <h4 class="header share-info_artist_name"></h4>
                    <h6 class="content share-info_song_name"></h6>
                </div>
            </div>
            <hr>
            {!! Share::page('', 'Share title')->facebook()->twitter()->whatsapp() !!}
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </div>
</div>
{{-- end Modal --}}