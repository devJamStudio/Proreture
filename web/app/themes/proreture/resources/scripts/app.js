import domReady from '@roots/sage/client/dom-ready';
import AOS from 'aos';
import { register } from 'swiper/element/bundle';
// init Swiper:
/**
 * Application entrypoint
 */
domReady(async () => {
  register();
  // Menu toggle
  const menuToggle = document.getElementById('menu-toggle');
  const offCanvas = document.getElementById('offcanvas-menu');
  const menuClose = document.getElementById('menu-close');
  offCanvas.classList.remove('hidden');
  menuToggle.addEventListener('click', (e) => {
    offCanvas.classList.toggle('translate-x-full');
  });
  menuClose.addEventListener('click', (e) => {
    offCanvas.classList.toggle('translate-x-full');
  });

  const swiperEl = document.querySelector('swiper-container');
  //Navbar background
  const navBar = document.querySelector('.navbar');
  document.addEventListener('scroll', (event) => {
    console.log('test');
    if (window.pageYOffset > 0) {
      console.log('test2');
      navBar.classList.add('bg-gradient');
    } else {
      navBar.classList.remove('bg-gradient');
    }
  });
  // swiper parameters
  const swiperParams = {
    slidesPerView: 1,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
    on: {
      init() {
        // ...
      },
    },
    injectStyles: [
      ` :host .swiper-pagination-bullet{
        background: rgb(65 184 252);
        width:23px;height:23px;
      }
        :host .swiper-pagination {row-gap:10px;margin-top:1rem;left:0;top:0;width:4%;display:flex;flex-direction:column;align-items:center}
        :root {--swiper-theme-color: red;}
      `,
    ],
  };

  // now we need to assign all parameters to Swiper element
  Object.assign(swiperEl, swiperParams);

  // and now initialize it
  swiperEl.initialize();

  // Counter script
  const counter = document.getElementById('counter');
  const counts = document.querySelectorAll('.number');
  console.log(counts);

  counts.forEach((count) => {
    let maxValue = parseInt(count.textContent);
    count.textContent = 0; // Initialize the text content to 0
    let i = 0;
    let delay = 10; // Adjust the delay (in milliseconds) as needed

    function updateCount() {
      count.textContent = i;
      i++;
      if (i <= maxValue && isInViewport(counter)) {
        setTimeout(updateCount, delay);
      }
    }
    document.addEventListener('scroll', (event) => {
      if (isInViewport(counter)) {
        updateCount();
      }
    });
  });
  //Check if i
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
