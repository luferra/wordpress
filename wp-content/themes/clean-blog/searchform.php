<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">


        <input type="search" class="form-control"
            placeholder="<?php echo esc_attr_x( 'Cerca …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              <button class="rounded-right btn btn-info my-2 my-sm-0 " type="submit">Search</button>

          </div>


</form>
