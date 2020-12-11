window.addEventListener("scroll",function(){
    var header = document.querySelector('#navbarr');
    header.classList.toggle("pengubah",window.scrollY > 0);
});
window.addEventListener("scroll",function(){
    var warna = document.querySelector('.nav-item #atasku');
    warna.classList.toggle("warnanav",window.scrollY > 0);
});