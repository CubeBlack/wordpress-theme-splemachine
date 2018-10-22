<?php
get_header();
?>
<div id="background">
    <img src="<?php img_url() ?>background.svg" width="100%">
</div>
<div id="content">
    <header id="header">
        <!--img src="<?php img_url() ?>header.svg" width="100%"-->
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
            <?php the_content(); ?>
        </article>
        <?php endwhile; else : ?>
        <article>
            <p>Sorry, no posts were found!</p>
        </article>
        <?php endif; ?>
    </section>
    <footer>
        get_footer();
    </footer>
    <div id="scroll">
        <img src="<?php img_url() ?>scroll.svg">
    </div>
