<header class="navbar w-full p-2  bg-opacity-80 z-20 fixed top-0 transition-opacity duration-300 ">
  <div class="flex items-end pr-1 my-1 pl-3 justify-between items-center flex-row w-full">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteLogo !!}
  </a>
  <button type="button" aria-label="menu button">
  <x-icon-hamburger  id="menu-toggle" class="h-10 fill-white"/>
  </button>
</div>
</header>
