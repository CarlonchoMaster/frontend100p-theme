export default {
  init() {
    // JavaScript to be fired on all pages
    let btnFloating = document.getElementById('btnFloatingMenu'),
      mainMenu = document.getElementById('mainMenu'),
      btnBackMenu = document.getElementById('btnBackMenu'),
      overlayScreen = document.getElementById('overlayScreen');
    btnFloating.addEventListener('click', () => {
      mainMenu.classList.add('show');
      overlayScreen.classList.add('show');
    });

    btnBackMenu.addEventListener('click', () => {
      mainMenu.classList.remove('show');
      overlayScreen.classList.remove('show');
    });
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
}
