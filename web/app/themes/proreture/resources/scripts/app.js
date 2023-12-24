import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // Menu toggle
  const menuToggle = document.getElementById('menu-toggle');
  const offCanvas = document.getElementById('offcanvas-menu');
  const menuClose = document.getElementById('menu-close');
  offCanvas.classList.remove('hidden');
  menuToggle.addEventListener('click', (e) => {
    offCanvas.classList.toggle('translate-x-full');

    // Add your additional code here for handling the click event
  });
  menuClose.addEventListener('click', (e) => {
    offCanvas.classList.toggle('translate-x-full');

    // Add your additional code here for handling the click event
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
