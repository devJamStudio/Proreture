<section class="{{ $block->classes }}">
  <div class="flex  section flex-col md:flex-row">
    <div class="w-full md:w-1/2 section__container--image py-8 items-center   min-h-[33vh] lg:min-h-[40vh] 2xl:min-h-[66vh] justify-end flex relative overflow-hidden">
      @if($image)
      <div   data-aos="fade-up" class="image--wrapper mt-8 border-black border-t-[8px]  border-l-[8px] absolute bottom-0 right-0 w-11/12">
      {!! $image !!}
      </div>
      @endif
    </div>
    <div class="w-full md:w-1/2 py-8 flex items-center justify-center flex-col">
      <div class="w-11/12 md:w-10/12 gap-6 items-center flex flex-col">
      @if($header)
      <h2 data-aos="fade-left" class="text-2xl lg:text-3xl xl:text-4xl  text-blue-500">{!! $header !!}</h2>
      @endif

      @if($text)
      <div data-aos="fade-left"  class="text-lg lg:text-xl">{!! $text !!}</div>
      @endif
      @if($button)
      <button data-aos="fade-left" type="button" class="btn  text-blue-500  shadow-2xl    rounded-2xl border-[4px] mt-3 bg-opacity-25 text-md lg:text-3xl  justify-self-center 	bg-white self-center px-6 py-2 border-blue-500">{{ $button}}</button>
      @endif
      </div>
    </div>
  </div>


</section>
