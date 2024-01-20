import domReady from '@roots/sage/client/dom-ready';
import AOS from 'aos';
import { register } from 'swiper/element/bundle';

domReady(async () => {
  // Register Swiper
  register();
  AOS.init();
  console.log(AOS);
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
    if (window.pageYOffset > 0) {
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
      init() {},
    },
    injectStyles: [
      ` :host .swiper-pagination-bullet{
        background: rgb(65 184 252);
        width:23px;height:23px;
      }
        :host .swiper-pagination {bottom:0px; position:absolute;}

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
  counts.forEach((count) => {
    let maxValue = parseInt(count.textContent);
    count.textContent = 0; // Initialize the text content to 0
    let delay = 10; // Adjust the delay (in milliseconds) as needed

    const counterHandler = () => {
      if (isInViewport(counter)) {
        let i = 0;
        const updateCount = () => {
          if (i <= maxValue) {
            count.textContent = i;
            i++;
            setTimeout(updateCount, delay);
          }
        };

        updateCount();

        // Remove the scroll event listener once animation is triggered
        document.removeEventListener('scroll', counterHandler);
      }
    };

    document.addEventListener('scroll', counterHandler);
  });
  //Check if item is in viewport
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
