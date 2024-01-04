<header class="banner w-full p-2  bg-opacity-80 z-20 fixed top-0">
  <div class="flex items-end pr-1 pl-3 pt-3 justify-between flex-row w-full">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteLogo !!}
  </a>
  <button type="button" aria-label="menu button">
  <x-icon-hamburger  id="menu-toggle" class="h-10 fill-blue-500"/>
  </button>
</div>
</header>
