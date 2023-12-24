<header class="banner w-full   bg-opacity-80 z-20 fixed top-0">
  <div class="mx-2 flex items-end justify-between flex-row w-full">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteLogo !!}
  </a>
  <button type="button" aria-label="menu button">
  <x-icon-hamburger  id="menu-toggle" class="h-10 fill-blue-500"/>
  </button>
</div>
</header>
