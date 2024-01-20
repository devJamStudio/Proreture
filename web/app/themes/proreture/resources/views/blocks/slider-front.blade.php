<div class="{{ $block->classes }}">
  @if ($slides)
  <div class="py-2 lg:py-8 bg-slate-100">
  <swiper-container   data-aos="fade-right"  pagination="true" autoplay="true" init="false"  pagination-clickable="true"  effect="fade" class="w-11/12 grid py-6">
      @foreach ($slides as $slide)
      <swiper-slide class="h-full  my-2 lg:my-8  bg-slate-100">
        <div class="flex  flex-col md:flex-row h-full gap-10 ">
          <div class="md:w-1/2 bg-slate-100 flex  justify-center">
            <div class="w-full">
          <h2 class="text-blue-500 text-4xl xl:text-4xl mb-1">{{ $slide['header'] }}</h2>
          <div>
          @if ($slide['items'] )
            @foreach ($slide['items'] as $item)
            <div>
              <h3 class="text-xl xl:text-xl text-slate-800 my-3">{{ $item['subheading'] }}</h3>
              <p class="text-md">{!! $item['text'] !!}</p>
            </div>
            @endforeach
            </div>
          </div>
        </div>
          <div class="md:w-7/12 w-full  h-full ">
            <div class="w-full h-full mb-10">
              <img data-aos="fade-left" src =" {!! $slide['image']['url'] !!} " alt  =" {!! $slide['image']['name'] !!} " class="border-[8px] border-slate-900 shadow-2xl" />
             </div>
            </div>
          </div>
         </swiper-slide>
          @endif
      @endforeach
    </swiper-container>
</div>
    @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
