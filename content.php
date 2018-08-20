
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="card m-2">
  <div class="card-header">
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'shape' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
  </div>
  <div class="card-body">

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'shape' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
  </div>

  <div class="card-footer">
    <div class="row">
        <div class="col-6"><?php the_date(); ?></div>
          <div class="col-6 text-right">
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary"> <span class="oi oi-plus"></span> Voir l'article </a>  
          </div>
        </div>
  </div>
</div>

   
</article><!-- #post-<?php the_ID(); ?> -->