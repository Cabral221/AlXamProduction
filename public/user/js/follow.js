$('#follow-btn').click(function(event) {
    event.preventDefault();
    var link = $(this).attr('href');
    var spanCount = this.querySelector('.follower-count')
    var spanWord = this.querySelector('.follower-word')
    var icon = this.querySelector('i');

    window.axios.post(link).then(function (response) {
        spanCount.textContent = response.data.followers
        
        if (spanWord.innerHTML == "S'abonner") {
            spanWord.textContent = "Se désabonner"
            icon.classList.replace('far','fas')
        }else{
            spanWord.textContent = "S'abonner"
            icon.classList.replace('fas','far')
        }
        
    }).catch(function (error) {
        console.log(error.response.status)
        if(error.response.status === 403) {
            window.alert('Vous ne pouvez pas follower un artiste si vous n etes pas connecté !');
        }else{
            window.alert('Une erreur s est produite , vueillez réessayer plutard !');
        }
    })
})