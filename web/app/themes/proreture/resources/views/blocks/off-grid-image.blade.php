<section class="{{ $block->classes }}">
  <div class="relative grid w-full items-center justify-center bg-slate-100 ">
    @if ($image)
      <div  data-aos="zoom-in" class=" w-10/12 relative  self-center mt-[-20rem] mb-2 border-[8px]	border-slate-900 shadow-2xl justify-self-center">
        {!! $image !!}
      </div>
    @else
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif
    @if ($text)
      <div class="w-10/12 relative text-slate-800  self-center  my-[3rem]  md:text-2xl justify-self-center">
        {!! $text !!}
      </div>
    @endif
  </div>
</section>

