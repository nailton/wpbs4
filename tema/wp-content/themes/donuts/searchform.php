<form role="search" action="<?php echo home_url('/'); ?>" method="get" accept-charset="utf-8">

  <div class="input-group">

    <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>">

    <div class="input-group-append">

      <button type="submit" class="btn btn-success">Buscar</button>

    </div>

  </div>

</form>
