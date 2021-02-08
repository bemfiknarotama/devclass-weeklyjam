const navbar = document.querySelector("#navbar");
window.addEventListener('scroll', function (e) {
    let posisi = e.currentTarget.scrollY
    if (posisi < 50) {
        navbar.classList.add('bg-transparent')
    } else {
        navbar.classList.remove("bg-transparent");
    }
});
