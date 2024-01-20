<section class="{{ $block->classes }}">
  <div class="relative grid w-full items-center justify-center">
    @if ($image)
      <div  data-aos="zoom-in" class=" w-11/12 relative  self-center mt-[-13rem] xl:mt-[-20rem]  border-[8px] mb-8	border-black shadow-2xl justify-self-center">
        {!! $image !!}
      </div>
    @else
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif
    @if (!$text)
      <div  data-aos="fad  e-up" class="w-11/12 relative text-black  self-center  my-[3rem]  md:text-2xl justify-self-center">
        {!! $text !!}
        <InnerBlocks />
      </div>
    @endif
  </div>
</section>

