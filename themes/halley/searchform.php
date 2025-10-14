<?php

if(is_home()){
    $value = 'post';
    $name = 'post_type';
}

if(is_category()){
    $value = str_replace(' ', '-', strtolower(get_the_archive_title()) );
    $name = 'category_name';
}



?>

<form role="search" method="get" id="searchform" class="align-items-center bg-light px-3 py-2 rounded-3 mx-0 row"  action="<?= bloginfo( 'url' ); ?>/">
    <input type="text" class="col border-0 py-2 px-0 form-control" style="background: none;" name="s" id="search" placeholder="Pesquisar por..." value="<?= the_search_query(); ?>"/>
    <label for="send" class="col-auto"> <i class="fa-solid fa-magnifying-glass text-primary"></i> </label>
    <input type="submit" value="<?= $value; ?>" name="<?= $name; ?>" id="send" class="d-none"/>
</form>
