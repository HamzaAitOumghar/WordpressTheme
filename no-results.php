<article id="post-0" class="post no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Résultat introuvable', 'shape' ); ?></h1>
    </header><!-- .entry-header -->
 
    <div class="entry-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
 
            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'shape' ), admin_url( 'post-new.php' ) ); ?></p>
 
        <?php elseif ( is_search() ) : ?>
 
            <p><?php printf( __( 'résultats non trouvés pour : %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></p>

 
        <?php else : ?>
 
            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'shape' ); ?></p>
 
        <?php endif; ?>
    </div><!-- .entry-content -->
</article>