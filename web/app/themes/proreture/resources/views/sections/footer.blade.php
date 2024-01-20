<footer class="content-info w-full bg-black grid-col-3 gap-10 py-8 shadow-2xl">
  <div class="w-11/12 grid mx-auto grid-cols-1 lg:grid-cols-3 gap-8 text-white my-4">
    <div>
      <a class="brand" href="{{ home_url('/') }}">
        {!! $siteLogo !!}
      </a><br>
      jakieś dane ?? / kontakt tel/mail/link ? ?
    {{--  @php(dynamic_sidebar('sidebar-footer'))  --}}
    </div>
    <div class="flex flex-col items-start">
      <h5 class="text-2xl  ">Menu name 1 </h5>
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </div>
    <div class="flex flex-col  items-start">
      <h5 class="text-2xl">Menu name 2 </h5>
      {!! wp_nav_menu(['theme_location' => 'footer_navigation_2', 'menu_class' => 'nav', 'echo' => false]) !!}
    </div>
  </div>
</footer>
