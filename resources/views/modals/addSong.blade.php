{{-- Ajout de son --}}
<div class="modal fade" id="addSongModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un nouveau son</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="posR">
                <div class="progress d-none">
                    <div id="progress__song" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
            </div>
            <form id="form-add-song" action="{{ route('artist.addSong') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="audiName">Titre du son</label>
                    <input type="text" name="audioName" id="audioName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="audioFile">fichiers audios autorisés (mp3,wav) </label>
                    <input name="audioFile" type="file" class="form-control-file" id="audioFile">
                </div>
                <div class="form-group">
                    <label for="thumbnail">Ajouter une pochette <small class="muted">Ceci n'est pas obigatoire</small></label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </div>
</div>
{{-- end Modal --}}