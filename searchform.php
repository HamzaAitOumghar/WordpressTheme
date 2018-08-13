<form role="search" method="get" action="<?php home_url('/'); ?>">


      <div class="input-group" >
        
        <input type="search" class="form-control" placeholder="Rechercher" value="<?php echo get_search_query() ?>" name="s" title="Rechercher" >
        <div class="input-group-append">
          <div class="input-group-text"><span class="oi oi-magnifying-glass"></span></div>
        </div>
      </div>


</form>