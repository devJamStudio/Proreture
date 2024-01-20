<div class="{{ $block->classes }} info-block">
  @if ($header)
  <h3 class="text-3xl 2xl:text-4xl pb-4 ">{{$header}}</h3>
  @else
    <p>{{ $block->preview ? 'Add header...' : 'No items found!' }}</p>
  @endif
  <div class="mt-4 mx-auto flex">
    <InnerBlocks />
  </div>
</div>
