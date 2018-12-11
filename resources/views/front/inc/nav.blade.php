<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bg navbar-gb">
    <a href="/"><img class="navbar-logo" src="/img/LS_LOGO.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('products') ? 'active' : '' }}">
                <a class="nav-link" href="/products">PRODUCTS</a>
            </li>
            <li class="nav-item {{ request()->is('brands') ? 'active' : '' }}">
                <a class="nav-link" href="/brands">BRANDS</a>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>
