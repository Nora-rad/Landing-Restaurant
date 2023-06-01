/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    // Config  Flickity and count slides number
    let flkty = new Flickity('.carousel',{contain:false, adaptiveHeight:true,prevNextButtons:true,draggable:true,pageDots:false});
    let carouselStatus = document.querySelector('.carousel-status');
    function updateStatus() {
      let slideNumber = flkty.selectedIndex + 1;
      carouselStatus.innerHTML =` <span style="color:#ff4800">${slideNumber}</span>  / ${flkty.slides.length} `;
    }
    flkty.resize();
    updateStatus();
    flkty.on( 'select', updateStatus );
    document.getElementById('form-date').valueAsDate = new Date();

    // Tabs
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

    // Toggle Mobile Menu
    const toggleMenu=(className, action)=>{
      const menu = document.getElementsByClassName(className)[0];
      if (menu) {
        menu.classList[action]('open');
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

    // Smooth scroll to div by data-scroll
    const scrollToDataScroll=()=>{
      const buttons = document.querySelectorAll('button[data-scroll]');
      buttons.forEach(button => {
        button.addEventListener('click', () => {
          const dataScrollValue = button.getAttribute('data-scroll');
          const targetElement = document.querySelector(`[data-scroll="#${dataScrollValue}"]`);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
            });
            toggleMenu('nav__menu', 'remove');
          }
        });
      });
    }
    scrollToDataScroll();

    // increment &  decrement input value
    const incrementButton = document.getElementById('incrementButton');
    const decrementButton = document.getElementById('decrementButton');
    const inputElement = document.getElementById('form-number');
    incrementButton.addEventListener('click', () => {
      incrementOrDecrement( true);
    });
    decrementButton.addEventListener('click', () => {
      incrementOrDecrement(false);
    });
    function incrementOrDecrement( increment) {
      const currentValue = Number(inputElement.value);
      if (!isNaN(currentValue) || currentValue > 0 ) {
        let newValue =  increment ? currentValue + 1 : currentValue - 1;
        inputElement.value =newValue >0 ? newValue : 0
       }
    }
  });
})();
