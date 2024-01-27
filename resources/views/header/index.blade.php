    <header class="header">
     <div class="container">
      <div class="row">
       <div class="col-lg-2">
        <div class="header__logo">
         <a href="./index.html">
          <img src="img/logo.png" alt="">
         </a>
        </div>
       </div>
       <div class="col-lg-8">
        <div class="header__nav">
         <nav class="header__menu mobile-menu">
          <ul>
           <li class="active"><a href="{{ route('home') }}">Home</a></li>
           <li><a href="">Categories <span class="arrow_carrot-down"></span></a>
            <ul class="dropdown">
             <li><a href="">Categories</a></li>
             <li><a href="">Anime Details</a></li>
             <li><a href="">Anime Watching</a></li>
             <li><a href="">Blog Details</a></li>
             <li><a href="">Sign Up</a></li>
             <li><a href="">Login</a></li>
            </ul>
           </li>
           <li><a href="">Our Blog</a></li>
           <li><a href="#">Contacts</a></li>
          </ul>
         </nav>
        </div>
       </div>
       <div class="col-lg-2">
        <div class="header__right">
         <a href="#" class="search-switch"><span class="icon_search"></span></a>
         <a href=""><span class="icon_profile"></span></a>
        </div>
       </div>
      </div>
      <div id="mobile-menu-wrap"></div>
     </div>
    </header>
    <div class="search-model">
     <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
       <input type="text" id="search-input" placeholder="Search here.....">
      </form>
     </div>
    </div>
