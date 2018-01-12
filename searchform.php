<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get" class="navbar-form navbar-right navbar-form-search formSearch hidden-md hidden-sm hidden-xs">
    <div class="search-form-container hdn" id="search-input-container">
        <div class="search-input-group">
            <button type="button" class="btn btn-default" id="hide-search-input-container">
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            </button>
            <div class="form-group">
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="form-control" id="search_input" placeholder="Search for..." autofocus>
            </div>

        </div>
    </div>
    <a role="button" type="submit" class="btn btn-default" id="search-button">
        <i class="fa fa-search" aria-hidden="true" id="search_icon"></i>
    </a>
</form>