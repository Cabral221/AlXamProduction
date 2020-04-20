function onClickBtnLike(event) {
    event.preventDefault();

    const url = this.href;
    const spanCount = this.querySelector('span.js-likes');
    const icon = this.querySelector('i');

    window.axios.get(url).then(function(res) {
        spanCount.textContent = res.data.likes

        if(icon.classList.contains('fas')) {
            icon.classList.replace('fas','far');
            icon.classList.remove('text-danger');
        }else{
            icon.classList.replace('far','fas');
            icon.classList.add('text-danger');
        }
    }).catch(function(error) {
        // Gestion d'erreur
        // *** A completer
        if(error.response.status === 403) {
            window.alert('Vous ne pouvez pas liker un article si vous n etes pas connecté !');
        }else{
            window.alert('Une erreur s est produite , vueillez réessayer plutard !');
        }
    });
    
}

document.querySelectorAll('a.js-like-link').forEach(function(link) {
    link.addEventListener('click', onClickBtnLike);
});