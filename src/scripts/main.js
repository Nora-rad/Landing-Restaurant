/* eslint-env browser */
(function() {
  'use strict';
  const smoothScrollToDiv=(className)=>{
    const target = document.querySelector(`.${className}`);
    if (target) {
      const targetPosition = target.offsetTop;
      window.scrollTo({
        top: targetPosition,
        behavior: "smooth"
      });
    }
  }
  const addScrollListener=(element, className)=>{
    element.addEventListener('click', function() {
      smoothScrollToDiv(className);
    });
  }
  const toggleMenu=(className, action)=>{
    const menu = document.getElementsByClassName(className)[0];
    if (menu) {
      menu.classList[action]('open');
    }
  }
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelector(".js-tabs");
    const tabButton = document.querySelectorAll(".js-tab-button");
    const contents = document.querySelectorAll(".js-tab-content");
    tabs.onclick = e => {
      const id = e.target.dataset.id;
      if (id) {
        tabButton.forEach(btn => {
          btn.classList.remove("active");
        });
        e.target.classList.add("active");
        contents.forEach(content => {
          content.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    }


    let headerToggle = document.getElementsByClassName('js-header-toggle')[0];
    let closeMenu = document.getElementsByClassName('js-nav-menu-close')[0];
    headerToggle.addEventListener('click', function() {
      toggleMenu('nav__menu', 'add');
    });
    closeMenu.addEventListener('click', function() {
      toggleMenu('nav__menu', 'remove');
    });

    let scrollToWhyUs = document.getElementsByClassName('js-scroll-down')[0];
    let scrollToMenu = document.getElementsByClassName('js-scroll-menu')[0];
    addScrollListener(scrollToWhyUs, 'o-section-why-us');
    addScrollListener(scrollToMenu, 'o-section-menu');
  });
})();
