// Artist Add song
$('#form-add-song').submit(function (event) {
    event.preventDefault();
    var url = $(this).attr('action')
    var data = new FormData(this);
    // console.log(data.v;
    var config = {
        onUploadProgress: function (e) {
            var percent = Math.round((e.loaded * 100) / e.total);
            $('#progress__song')
                .attr('aria-valuenow', percent)
                .css('width', percent + '%')
                .css('height', '30px')
                .text(percent + '%')
                .parent().removeClass('d-none').addClass('mb-5');

            $('#form-add-song').addClass('d-none')
        }
    }

    window.axios.post(url, data, config)
        .then(function (response) {
            console.log(response.data)
            window.location.reload(true);
        })
        .catch(function (error) {
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