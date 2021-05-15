<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline">
  <div class="form-group mb-2">
    <!--<label for="s" class="assistive-text"><?php _e( 'Search', 'zed_bc' ); ?></label>-->
    <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Type to Search ...', 'zed_bc' ); ?>" />
    <button type="submit" class="btn btn-primary" name="submit" id="searchsubmit"><i class="lni lni-search-alt"></i></button>
  </div>
</form>