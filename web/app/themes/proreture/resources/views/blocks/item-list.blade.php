<div class="{{ $block->classes }} item-list">
  @if ($items)
    <ul>
      @foreach ($items as $item)
        <li class="py-2 font-bold "><i class="tick-mark "></i>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif

  <div>
    <InnerBlocks />
  </div>
</div>
