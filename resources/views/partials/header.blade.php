<header class="banner">
  <div class="container">
    <div class="sub-header">
      <div class="top-left">
        {{ the_custom_logo() }}
      </div>
      <div class="top-right">
        <a class="button" target="blank" href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=5035">Dona Aqui!</a>
      </div>
    </div>
    
    
    
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
