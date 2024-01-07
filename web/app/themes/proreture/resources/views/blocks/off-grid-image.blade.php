<section class="{{ $block->classes }}">
  <div class="relative grid w-full items-center justify-center bg-slate-100 ">
    @if ($image)
      <div  data-aos="zoom-in" class=" w-11/12 relative  self-center mt-[-20rem] mb-2 border-[8px]	border-black shadow-2xl justify-self-center">
        {!! $image !!}
      </div>
    @else
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif
    @if ($text)
      <div class="w-11/12 relative text-black  self-center  my-[3rem]  md:text-2xl justify-self-center">
        {!! $text !!}
        <InnerBlocks />
      </div>
    @endif
  </div>
</section>

