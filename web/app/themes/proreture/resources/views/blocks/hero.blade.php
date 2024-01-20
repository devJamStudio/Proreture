<div class="{{ $block->classes }}">
  <div id="hero" class="relative flex  items-center flex-col bg-opacity justify-center min-h-screen bg-cover" >
    <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" class="absolute top-0">
      <defs>
      <path id='sineWave' fill="#0099ff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
      </defs>
      <use class="wave" href="#sineWave" />
      <use class="wave" x="-100%" href="#sineWave" />
      <use class="wave1" href="#sineWave" />
      <use class="wave1" x="-100%" href="#sineWave" />
      <use class="wave2" href="#sineWave" />
      <use class="wave2" x="-100%" href="#sineWave" />
    </svg>

    @if ($header)
    <div class="w-11/12">
    <h1  data-aos="fade-up" class="mx-auto relative z-[5] max-w-prose px-4  mb-3 tracking-wider	 uppercase text-lg sm:text-xl md:text-2xl lg:text-4xl 2xl:text-5xl outline-blue-500 text-white text-center "> {!! $header !!}</h1>
    </div>
    @endif
    @if ($button)
      <button type="button"  data-aos="fade-up" class="btn  text-blue-500  shadow-2xl  relative z-[5]  rounded-2xl border-[4px] mt-3  text-md lg:text-3xl  justify-self-center 	bg-white self-center px-6 py-2 border-blue-500">{{ $button}}</button>
    @else
      <p>{{ $block->preview ? 'Add content..' : 'No content found!' }}</p>
    @endif
    <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 rotate-180	">
      <defs>
      <path id='sineWave' fill="white" fill-opacity="1" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
      </defs>
      <use class="wave3" href="#sineWave" />
      <use class="wave3" x="-100%" href="#sineWave" />
      <use class="wave4" href="#sineWave" />
      <use class="wave4" x="-100%" href="#sineWave" />
      <use class="wave5" href="#sineWave" />
      <use class="wave5" x="-100%" href="#sineWave" />
    </svg>

  </div>
</div>
