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
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
