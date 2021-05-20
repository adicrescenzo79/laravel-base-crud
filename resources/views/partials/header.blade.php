<header>
  <nav>

    <div class="up">
      <div class="container flex">
        <ul class="flex">
          <li class="txt-uppercase"><a href="#">dc power&#8480; visa&#174;</a></li>
          <li class="txt-uppercase">
          <a href="#">additional dc series ▼</a></li>
        </ul>
      </div>
    </div>

    <div class="menu">
      <div class="container flex">
        <img class="logo" src="/img/dc-logo.png" alt="logo">
        <ul class="txt-uppercase flex">
          <li><a href="#">characters</a></li>
          <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{route('comics.index')}}">comics</a></li>
          <li><a href="#">movies</a></li>
          <li><a href="#">tv</a></li>
          <li><a href="#">games</a></li>
          <li><a href="#">collectibles</a></li>
          <li><a href="#">videos</a></li>
          <li><a href="#">fans</a></li>
          <li><a href="#">news</a></li>
          <li><a href="#">shop <i class="fas fa-caret-down"></i></a></li>
        </ul>
        <div class="search flex">
          <input type="text" name="" value="" placeholder="Search">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </div>

  </nav>

  <div class="jumbo"></div>

</header>
