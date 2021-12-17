      <div id="search-wrap">
      <form class="l-search__form" role="search" method="get" action="/">
        <label for="search-text"></label>
        <div class="input-border">
          <input type="text" value="" id="search-text" name="s">
        </div>
        <button type="submit" name="search" value="<?php echo the_search_query(); ?>">検索</button>
      </form>
      </div>