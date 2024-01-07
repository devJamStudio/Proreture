<section class="{{ $block->classes }}">
  <div class="flex  section flex-col md:flex-row min-h-[50vh]">
    <div class="w-full md:w-1/2 section__container--image items-center  justify-end flex relative overflow-hidden">
      @if($image)
      <div class="image--wrapper  border-black border-t-[8px]  border-l-[8px] absolute bottom-0 right-0 w-11/12">
      {!! $image !!}
      </div>
      @endif
    </div>
    <div class="w-full md:w-1/2 p-4 flex items-center justify-center flex-col">
      <div class="w-10/12 gap-10 flex flex-col">
      @if($header)
      <h2 class="text-5xl mb-4 text-blue-500">{!! $header !!}</h2>
      @endif

      @if($text)
      <div class="text-xl">{!! $text !!}</div>
      @endif
      @if($button)
      <button type="button" class="btn  text-blue-500  shadow-2xl    rounded-2xl border-[4px] mt-3 bg-opacity-25 text-md lg:text-3xl  justify-self-center 	bg-white self-center px-6 py-2 border-blue-500">{{ $button}}</button>
      @endif
      </div>
    </div>
  </div>


</section>
