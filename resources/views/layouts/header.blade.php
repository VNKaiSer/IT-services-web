<header>
    <div class="header">
      <div class="container">
        <div class="header-container">
          <div class="header-logo">
            <a href="{{ route('home') }}">
              <img srcset="./Images/logo.png 2x" alt=""
            /></a>
          </div>
          <ul class="menu">
            <li class="menu-item">
              <a href="{{ route('home') }}" class="menu-link">Home</a>
            </li>
            <li class="menu-item">
              <a href="{{ route('about') }}" class="menu-link">About us</a>
            </li>
            <li class="menu-item">
              <a href="{{ route('services') }}" class="menu-link">Services</a>
            </li>
            <li class="menu-item">
              <a href="{{ route('news') }}" class="menu-link">News</a>
            </li>
            <a href="{{ route('contact') }}"
              ><button class="button button-border">Contact us</button></a
            >
          </ul>
        </div>
      </div>
    </div>
</header>
