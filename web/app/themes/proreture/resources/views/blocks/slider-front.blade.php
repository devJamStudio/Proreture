<div class="{{ $block->classes }}">
  @if ($slides)
  <div class="py-8 bg-slate-100">
  <swiper-container  pagination="true" autoplay="false" init="false"  pagination-clickable="true"  effect="fade" class=" grid py-6">
      @foreach ($slides as $slide)
      <swiper-slide class="h-full  bg-slate-100">
        <div class="flex  flex-col md:flex-row h-full">
          <div class="md:w-1/2 bg-slate-100 flex  justify-center">
            <div class="w-9/12  ">
          <h2 class="text-slate-900 text-5xl mb-3">{{ $slide['header'] }}</h2>
          <div>
          @if ($slide['items'] )
            @foreach ($slide['items'] as $item)
            <div>
              <h3 class="text-3xl text-slate-800 my-3">{{ $item['subheading'] }}</h3>
              <p>{!! $item['text'] !!}</p>
            </div>
            @endforeach
            </div>
          </div>
        </div>
          <div class="md:w-7/12 w-full  h-full ">
            <div class="w-11/12 h-full">
              <img src =" {!! $slide['image']['url'] !!} " class="border-[8px] border-slate-900 shadow-2xl" />
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
