
// let loginShow = document.getElementById("show_login");
// let modelContent = document.getElementById("sec1");
// loginShow.addEventListener('click',()=>{
//     modelContent.style.visibility ='visible';
// });//////////////////////login
let modal = document.getElementById("modal");
let btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {

    modal.style.display = "flex";
    // modal.style.visibility = "visible";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
    // modal.style.visibility = "hidden";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        // modal.style.visibility = "hidden";
    }
}
/////////////////////////model2//////////// sign in
let modal2 = document.getElementById("modal2");
let btn2 = document.getElementById("btn2");
var span2 = document.getElementsByClassName("close2")[0];
var return1 = document.getElementById("return1");

btn2.onclick = function () {

    modal2.style.display = "block";
    modal.style.display = "none";
    // modal.style.visibility = "visible";
    //  modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function () {
    modal2.style.display = "none";
    modal.style.display = "none";
    // modal.style.visibility = "hidden";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
        // modal.style.visibility = "hidden";
    }
}
return1.onclick = function () {
    modal2.style.display = "none";
    modal.style.display = "flex";
}
////////////////////////// sllider///////////////////
var slideIndex2 = 0;
showSlides_he(slideIndex2);

function plusSlides_he(n) {
    showSlides_he(slideIndex2 += n);
}

function currentSlide_he(n) {
    showSlides_he(slideIndex2 = n);
}

function showSlides_he(n) {
    var i;
    var slides = document.getElementsByClassName("slider");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex2 = 1 }
    if (n < 1) { slideIndex2 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex2++;
    if (slideIndex2 > slides.length) { slideIndex2 = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex2 - 1].style.display = "block";
    dots[slideIndex2 - 1].className += " active";
    setTimeout(showSlides_he, 3000);
}
////////////////////////////////countsown timer


/////////////////////////////
const countdown = () => {
    const upperDate = new Date('Jan 26, 2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;


    const second = 1000;
    const minutes = second * 60;
    const hours = minutes * 60;
    const days = hours * 24;

    const remain_days = Math.floor(diffDate / days);
    const remain_hours = Math.floor((diffDate % days) / hours);
    const remain_minutes = Math.floor((diffDate % hours) / minutes);
    const remain_second = Math.floor((diffDate % minutes) / second);
    var d = document.getElementsByClassName('days');
    var h = document.getElementsByClassName('hours');
    var m = document.getElementsByClassName('minutes');
    var s = document.getElementsByClassName('seconds');
    for (var x = 0; x < d.length; x++) {
        d[x].innerHTML = remain_days;
    }
    for (var y = 0; y < h.length; y++) {
        h[y].innerHTML = remain_hours;
    }
    for (var z = 0; z < m.length; z++) {
        m[z].innerHTML = remain_minutes;
    }
    for (var r = 0; r < s.length; r++) {
        s[r].innerHTML = remain_second;
    }

}

setInterval(countdown, 1000);

/////////////////////// drop down
let tmenu = document.querySelector(".toggle-menue");
let tdropmenue = document.getElementById("dropmenue");
tmenu.addEventListener('click', () => {
    if (tdropmenue.style.display === "none") {
        tdropmenue.style.display = "flex";
    }
    else {
        tdropmenue.style.display = "none";
    }

});
