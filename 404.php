<style>
    l {
        border: 1px solid black;
    }

    body {
        padding: 0;
        margin: 0;
    }

    #carousel {
        width: 100%
    }

    .carousel-item {
        position: absolute;
        width: 100%;
    }

    .carousel-item-a {
        left: 0;
        -webkit-transition: left 2s;
        /* Safari */
        transition: left 2s;
        transition-timing-function: linear;
    }

    .carousel-item-b {
        left: 100%;
        transition: width 2s;
        transition-timing-function: linear;
    }

    .carousel-item-c {
        left: -100%;
        -webkit-transition: left 2s;
        /* Safari */
        transition: left 2s;
        transition-timing-function: linear;
    }

    #carousel-item-base {
        position: absolute;
        width: 100%;
    }

    #carousel-item-img {
        position: absolute;
        left: 5%;
        width: 90%;
        height: 200px;
    }

    .carousel-indicadores {
        top: 10%;
        right: 10%;
        position: absolute;
    }

    .carousel-indicadores-base {
        position: absolute;
        top: 40px;
        background: gray;
        height: 10px;
        width: 100%;
    }

    .carousel-indicadores-img {
        height: 50px;
    }
    .carousel-engrenagem{
   animation-name: girando;
   animation-duration: 2s;
   animation-iteration-count: infinite;
    animation-timing-function: linear;
    }
    @keyframes girando {
   from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
    .carousel-audio{
        position: absolute;
        right: 0;
        top: 0;
    }

</style>
<?php $crouselImgs = array(
    "12802897_895146337269325_3378660579741889715_n.jpg",
    "12802897_895146337269325_3378660579741889715_n.jpg",
    "12802897_895146337269325_3378660579741889715_n.jpg"
) ?>
<div id="carousel" Onclick="carousel.next()">
    <div id="carousel-item-a" class="carousel-item carousel-item-a">
        <img id="carousel-item-base" src="<?php img_url()?>caroseu-imgbase.svg">
        <img id="carousel-item-img" src="<?php img_url()?>a.png">
    </div>
    <div id="carousel-item-b" class="carousel-item carousel-item-b">
        <img id="carousel-item-base" src="<?php img_url()?>caroseu-imgbase.svg">
        <img id="carousel-item-img" src="<?php img_url()?>b.png">
    </div>
    <div id="carousel-item-c" class="carousel-item carousel-item-c">
        <img id="carousel-item-base" src="<?php img_url()?>caroseu-imgbase.svg">
        <img id="carousel-item-img" src="<?php img_url()?>c.png">
    </div>
    <div class="carousel-indicadores">
        <img id="carousel-indicador1" src="<?php img_url()?>valvula.svg" class="carousel-indicadores-img">
        <img id="carousel-indicador2" src="<?php img_url()?>valvula-gray.svg" class="carousel-indicadores-img">
        <img id="carousel-indicador3" src="<?php img_url()?>valvula-gray.svg" class="carousel-indicadores-img">
        <div class="carousel-indicadores-base"></div>
    </div>
    <div class="carousel-adicioinal">
        <img class="carousel-engrenagem" src="<?php img_url()?>enfrenagem1.svg">
    </div>
    <audio id="carousel-audio" controls class="carousel-audio" >
        <source src="<?php img_mp3()?>engrenagem2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
<script>
    var carousel = [];
    var pathImg = "<?php img_url()?>";
    carousel.atualItem = 0;
    carousel.audio = document.getElementById("carousel-audio");
    carousel.itemA = document.getElementById("carousel-item-a");
    carousel.itemB = document.getElementById("carousel-item-b");
    carousel.itemC = document.getElementById("carousel-item-c");
    carousel.indicador = [];
    carousel.indicador[0] = document.getElementById("carousel-indicador1");
    carousel.indicador[1] = document.getElementById("carousel-indicador2");
    carousel.indicador[2] = document.getElementById("carousel-indicador3");
    carousel.next = function() {
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

</script>
