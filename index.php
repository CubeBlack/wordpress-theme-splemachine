<?php
get_header();
?>
<div id="background">
    <img src="<?php img_url() ?>background.svg" width="100%">
</div>
<div id="content">
    <header id="header">
        <!----- //////////////////// -->
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
        <img class="carousel-engrenagem" src="<?php img_url()?>enfrenagem2.svg">
    </div>
    <audio id="carousel-audio" controls class="carousel-audio" >
        <source src="<?php mp3_url()?>engrenagem2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
        <!----- /////////////////////// -->
        <hgroup>
            <h1>
                <?php bloginfo('name'); ?>
            </h1>
            <h2>
                <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
            </h2>
        </hgroup>
    </header>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <nav>
        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
    </nav>
    <section>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-loop">
            <header>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a></h2>
                By:
                <?php the_author(); ?>
            </header>
            <?php the_excerpt(); ?>
        </article>
        <?php endwhile; else : ?>
        <article>
            <p>Vish, nun tem nada aqui!</p>
        </article>
        <?php endif; ?>
    </section>
    <footer>
        <?php get_footer(); ?>
    </footer>
    <div id="scroll">
        <img src="<?php img_url() ?>scroll.svg">
    </div>
