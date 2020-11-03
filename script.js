let cnv = document.querySelector('canvas');
let formBtn = document.querySelector('.form__btn');

formBtn.addEventListener('click', function(e) {
e.preventDefault();
let form = document.getElementById('form');
let formData = new FormData(form);
let request = new XMLHttpRequest();
request.open("Post", "form.php" );
request.send(formData);
request.onreadystatechange = function () {
    if (request.readyState == 4) {
        alert(request.responseText);
    }

}
})


