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
$('.showShareModal').each(function (index, link) {
    $('#showShareModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url')
        var artist = button.data('artist')
        var songTitle = button.data('title')
        var thumbnail = button.data('thumbnail')

        $(this).find('#social-links ul li').each(function () {
            var socialUrl = $(this).find('a.social-button').attr('href')
            $(this).find('a.social-button').attr('href', socialUrl + url)
        })

        // Afficher les donnees comme avatar, titre, artiste
        $('.share-info').find('.share-info_artist_name').text(artist)
        $('.share-info').find('.share-info_song_name').text(songTitle)
        $('.share-info').find('.song-thumbnail').attr('src', thumbnail)
    });
})
