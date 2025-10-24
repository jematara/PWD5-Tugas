let btn = document.getElementById("btn");

window.onscroll = function() {
    scrollFunction();
}

function scrollFunction() {
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        btn.style.display = "block";
    }else{
        btn.style.display = "none";
    }
}

function topScroll() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}