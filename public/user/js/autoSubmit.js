document.querySelectorAll('.form-autosubmit').forEach(form => {
    form.querySelectorAll('input').forEach(input => {
        input.addEventListener('change', (event) => {
            console.log(form)
            // debugger
            form.submit()
        })
    })
});