/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    let headerToggle = document.getElementsByClassName('js-header-toggle')[0]
    let mobileMenu = document.getElementsByClassName('nav__menu')[0]
    let closeMenu = document.getElementsByClassName('js-nav-menu-close')[0]
    headerToggle.addEventListener('click', function (){
      mobileMenu.classList.add('open')
    })
    closeMenu.addEventListener('click', function (){
      mobileMenu.classList.remove('open')
    })
  });
})();
