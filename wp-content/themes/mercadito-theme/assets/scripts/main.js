"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // Config  Flickity and count slides number
    var flkty = new Flickity('.carousel', {
      contain: false,
      adaptiveHeight: true,
      prevNextButtons: true,
      draggable: true,
      pageDots: false
    });
    var carouselStatus = document.querySelector('.carousel-status');

    function updateStatus() {
      var slideNumber = flkty.selectedIndex + 1;
      carouselStatus.innerHTML = " <span style=\"color:#ff4800\">".concat(slideNumber, "</span>  / ").concat(flkty.slides.length, " ");
    }

    flkty.resize();
    updateStatus();
    flkty.on('select', updateStatus);
    document.getElementById('form-date').valueAsDate = new Date(); // Tabs

    var tabs = document.querySelector(".js-tabs");
    var tabButton = document.querySelectorAll(".js-tab-button");
    var contents = document.querySelectorAll(".js-tab-content");

    tabs.onclick = function (e) {
      var id = e.target.dataset.id;

      if (id) {
        tabButton.forEach(function (btn) {
          btn.classList.remove("active");
        });
        e.target.classList.add("active");
        contents.forEach(function (content) {
          content.classList.remove("active");
        });
        var element = document.getElementById(id);
        element.classList.add("active");
      }
    }; // Toggle Mobile Menu


    var toggleMenu = function toggleMenu(className, action) {
      var menu = document.getElementsByClassName(className)[0];

      if (menu) {
        menu.classList[action]('open');
      }
    };

    var headerToggle = document.getElementsByClassName('js-header-toggle')[0];
    var closeMenu = document.getElementsByClassName('js-nav-menu-close')[0];
    headerToggle.addEventListener('click', function () {
      toggleMenu('nav__menu', 'add');
    });
    closeMenu.addEventListener('click', function () {
      toggleMenu('nav__menu', 'remove');
    }); // Smooth scroll to div by data-scroll

    var scrollToDataScroll = function scrollToDataScroll() {
      var buttons = document.querySelectorAll('button[data-scroll]');
      buttons.forEach(function (button) {
        button.addEventListener('click', function () {
          var dataScrollValue = button.getAttribute('data-scroll');
          var targetElement = document.querySelector("[data-scroll=\"#".concat(dataScrollValue, "\"]"));

          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
            });
            toggleMenu('nav__menu', 'remove');
          }
        });
      });
    };

    scrollToDataScroll(); // increment &  decrement input value

    var incrementButton = document.getElementById('incrementButton');
    var decrementButton = document.getElementById('decrementButton');
    var inputElement = document.getElementById('form-number');
    incrementButton.addEventListener('click', function () {
      incrementOrDecrement(true);
    });
    decrementButton.addEventListener('click', function () {
      incrementOrDecrement(false);
    });

    function incrementOrDecrement(increment) {
      var currentValue = Number(inputElement.value);

      if (!isNaN(currentValue) || currentValue > 0) {
        var newValue = increment ? currentValue + 1 : currentValue - 1;
        inputElement.value = newValue > 0 ? newValue : 0;
      }
    }
  });
})();