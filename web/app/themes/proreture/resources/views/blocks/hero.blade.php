<div class="{{ $block->classes }}">
  <div class="relative grid">
    @if ($backgroundImage)
    <div class="image--wrapper  h-full top-0 w-full backdrop-blur-lg	">
        <div class="overlay backdrop-blur-md backdrop-brightness-150 bg-blue-500 bg-opacity-30	 ">
          {!! $backgroundImage !!}
        </div>
    </div>
    @else
    @endif
    @if ($header)
    <h1 class=" mx-auto absolute   tracking-wider	  font-fjalla   text-lg sm:text-2xl md:text-3xl text-white self-center text-center "> {!! $header !!}</h1>
    @endif
    @if ($button)
      <button type="button" class="btn  text-blue-500  shadow-2xl border-2 text-3xl absolute justify-self-center bg-slate-100	bottom-10 self-center px-6 py-2 border-blue-500">{{ $button}}</button>
    @else
      <p>{{ $block->preview ? 'Add content..' : 'No content found!' }}</p>
    @endif
  </div>
</div>
