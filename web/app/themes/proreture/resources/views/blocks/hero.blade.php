<div class="{{ $block->classes }}">
  @if ($backgroundImage)
  <div id="hero" class="relative flex  items-center flex-col bg-opacity justify-center min-h-screen bg-cover "style="background-image:url({{$backgroundImage}})" >
    @else
    @endif
    @if ($header)
    <h1 class="mx-auto relative z-[5] max-w-prose px-4  mb-3 tracking-wider	uppercase  font-fjalla   text-lg sm:text-2xl md:text-3xl lg:text-4xl outline-blue-500 text-white text-center "> {!! $header !!}</h1>
    @endif
    @if ($button)
      <button type="button" class="btn  text-blue-500  shadow-2xl  relative z-[5]  rounded-2xl border-[4px] mt-3  text-md lg:text-3xl  justify-self-center 	bg-white self-center px-6 py-2 border-blue-500">{{ $button}}</button>
    @else
      <p>{{ $block->preview ? 'Add content..' : 'No content found!' }}</p>
    @endif
  </div>
</div>
