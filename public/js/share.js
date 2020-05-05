var popupSize = {
    width: 780,
    height: 550
};

$(document).on('click', '.social-button', function (e) {
    var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
        horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

    var popup = window.open($(this).prop('href'), 'social',
        'width=' + popupSize.width + ',height=' + popupSize.height +
        ',left=' + verticalPos + ',top=' + horisontalPos +
        ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

    if (popup) {
        popup.focus();
        e.preventDefault();
    }

})

// Share song
$('.showShareModal').each(function () {
    $('#showShareModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url')
        var artist = button.data('artist')
        var songTitle = button.data('title')
        var thumbnail = button.data('thumbnail')


        $(this).find('#social-links ul li').each(function () {
            var socialUrl = $(this).find('a.social-button').attr('href')
            $(this).find('a.social-button').attr('href',socialUrl+url)            
        })
        
        // Afficher les donnees comme avatar, titre, artiste
        $('.share-info').find('.share-info_artist_name').text(artist)
        $('.share-info').find('.share-info_song_name').text(songTitle)
        $('.share-info').find('.song-thumbnail').attr('src', thumbnail)
    });
})

// Artist Add song
$('#form-add-song').submit(function(event) {
    event.preventDefault();
    var url = $(this).attr('action')
    var data  = new FormData(this);
    // console.log(data.v;
    var config = {
        onUploadProgress: function (e) {
            var percent = Math.round((e.loaded * 100) / e.total);
            $('#progress__song')
                        .attr('aria-valuenow',percent)
                        .css('width',percent + '%')
                        .css('height','30px')
                        .text(percent + '%')
                        .parent().removeClass('d-none').addClass('mb-5');

            $('#form-add-song').addClass('d-none')
        }
    }

    window.axios.post(url,data,config)
    .then( function(response) {
        console.log(response.data)
        window.location.reload(true);
        // Actualiser la page  
    })
    .catch( function (error) {
        console.log(error)
    })
})

// Login Manager
$('#loginArtist').on('click', function () {
    $('#loginModal').modal('hide');
    $('#loginArtistModal').modal('show');
})
$('#loginUser').on('click', function () {
    $('#loginModal').modal('hide');
    $('#loginUserModal').modal('show');
})