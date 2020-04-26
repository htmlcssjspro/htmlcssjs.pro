"use strict";

/*!
 * Date: 02.2020
 * Автор: Сергей Тарасов aka MILITER
 * Author: Sergei Tarasov aka MILITER
 * Web-site: https://htmlcssjs.pro
 * E-mail: master@htmlcssjs.pro
 * Telegram: @htmlcssjspro
 */

document.addEventListener('DOMContentLoaded', event => {
  console.log('DOMContentLoaded');

  const $title = document.querySelector('title');
  const $description = document.querySelector('meta[name="description"]');

  const scroll = selector => {
    document.querySelector(selector).scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  };

  // // intro__btn
  // document.querySelector('.intro__btn').addEventListener('click', event => {
  // event.preventDefault();
  // document.querySelector('.intro').classList.add('intro_hidden');
  // });

  // #intro .arrow
  document.querySelector('.intro .arrow').addEventListener('click', event => {
    event.preventDefault();
    scroll('.header');
  });

  // buttons
  document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();
      const buttonText = event.currentTarget.innerText;
      console.log('buttonText: ', buttonText);
    });
  });

  // header&footer nav smooth scroll
  document.querySelectorAll('.header__nav a, .footer__nav a').forEach(a => {
    a.addEventListener('click', event => {
      event.preventDefault();
      const href = event.target.getAttribute('href');
      scroll(href);
    });
  });

  // tabs
  const $tabs = document.querySelector('.tabs');
  const $tabsNav = document.querySelector('.tabs__nav');
  const $tabsNavMob = document.querySelector('.tabs__nav_mob');

  $tabs.querySelectorAll('.tabs__link').forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();
      const $link = event.currentTarget;
      if (!$link.classList.contains('active')) {
        const img = $link.dataset.img;
        const content = $link.dataset.content;
        $tabs.querySelector('.tabs__link.active').classList.remove('active');
        $link.classList.add('active');
        $tabs.querySelector('.tabs__img .active').classList.remove('active');
        $tabs.querySelector(`.tabs__img_${img}`).classList.add('active');
        $tabs.querySelector('.tabs__content .active').classList.remove('active');
        $tabs.querySelector(`.tabs__content_${content}`).classList.add('active');
      }
      $tabsNavMob.innerText = event.target.innerText;

      if ($tabsNav.classList.contains('tabs__nav_menu-open')) {
        $tabsNav.classList.remove('tabs__nav_menu-open');
      }
    });
  });

  $tabsNavMob.addEventListener('click', () => {
    $tabsNav.classList.toggle('tabs__nav_menu-open');
  });


  @import 'D:/WebDevelopment/Projects/libs/militer-slider/militerslider.js';

  // // Slider
  // const slider = new MiliterSlider({
  // main: '.slider',
  // wrapper: '.slider__wrapper',
  // // slidesToShow: 1,
  // // infinity: true,
  // // dots: true,
  // // arrows: true,
  // // arrowPrev: '',
  // // arrowNext: '',
  // });
  // // slider.init();

  // console.log('slider: ', slider);


  window.addEventListener('load', () => {
    console.log('Объект window загрузился');
  });
});
