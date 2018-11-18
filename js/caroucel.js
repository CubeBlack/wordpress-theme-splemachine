var carousel = [];
carousel.atualItem = 0;
carousel.audio = document.getElementById("carousel-audio");
carousel.itemA = document.getElementById("carousel-item-a");
carousel.itemB = document.getElementById("carousel-item-b");
carousel.itemC = document.getElementById("carousel-item-c");
carousel.indicador = [];
carousel.indicador[0] = document.getElementById("carousel-indicador1");
carousel.indicador[1] = document.getElementById("carousel-indicador2");
carousel.indicador[2] = document.getElementById("carousel-indicador3");

carousel.next = function () {
    carousel.indicador[carousel.atualItem].src = pathImg + "valvula-gray.svg";
    carousel.atualItem++;
    if (carousel.atualItem > 2) carousel.atualItem = 0;

    a = carousel.itemA.className;
    b = carousel.itemB.className;
    c = carousel.itemC.className;
    carousel.itemA.className = c;
    carousel.itemB.className = a;
    carousel.itemC.className = b;
    carousel.indicador[carousel.atualItem].src = pathImg + "valvula.svg";
    //audio
    carousel.audio.play()
}
//clearInterval()
window.setInterval(carousel.next, 10000);
console.log("caroucel.js");
