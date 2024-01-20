<header class="navbar py-4  bg-opacity-80 z-20 fixed top-0 transition-opacity w-full  duration-300 justify-between  flex ">
  <div class="w-11/12 mx-auto flex justify-between items-center">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteLogo !!}
  </a>
  <div class="sm:absolute mr-[0.33rem] md:right-0 sm:w-[4.1666%] flex items-center justify-center">
  <button type="button" aria-label="menu button">
    <x-icon-hamburger  id="menu-toggle" class="h-10 fill-white"/>
    </button>
  </div>
  </div>
</header>
