<div class="{{ $block->classes }} h-full flex flex-col items-center justify-end">
  <div class="counter flex flex-col gap-6 items-center justify-end ">
  @if($icon)
    <div class="icon--wrapper w-[13rem]">
    {!! $icon !!}
    </div>
  @else
  <p>No Icon selected</p>
  @endif
  @if($number)
    <div class="number--wrapper number text-4xl text-blue-500">
      <span>{!! $number !!}</span>
    </div>
  @else
  <p>No number selected</p>
  @endif
  @if($text)
    <div class="text--wrapper text-4xl font-thin text-black">
      <span>{!! $text !!}</span>
    </div>
  @else
  <p>No Text selected</p>
  @endif
  </div>
</div>

