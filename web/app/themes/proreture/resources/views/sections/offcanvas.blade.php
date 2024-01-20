@if (has_nav_menu('primary_navigation'))
<nav id="offcanvas-menu"  class="nav-primary hidden z-50 transition-transform translate-x-full	shadow-xl transform  w-full md:w-5/12   h-full fixed duration-300  right-0 " aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
  <div class="p-4 flex items-center justify-end">
    <button type="button" aria-label="menu close">
      <x-icon-close  id="menu-close" class="w-10 h-10 stroke-white top-0 right-0"/>
    </button>
  </div>
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
</nav>
@endif
