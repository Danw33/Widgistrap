<form class="form search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="form-group">
        <input type="text" class="form-control search-field" value="" name="s" placeholder="<?php echo __('Search', 'widgistrap'); ?>">
    </div>
    <button type="submit" class="btn btn-default search-submit"><?php echo __('Search', 'widgistrap'); ?></button>
</form>