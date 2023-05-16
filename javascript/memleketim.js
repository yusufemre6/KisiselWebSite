function resizeDiv() {
    var div = document.getElementById("carouselExampleIndicators");
    div.style.width = window.innerWidth + "px";
    div.style.height = window.innerHeight + "px";
}

window.addEventListener("resize", resizeDiv);