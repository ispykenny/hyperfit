import $ from 'jquery';
window.$ = $;
window.jQuery = $;

$(window).on('load', () => {
  $('.loader').fadeOut(1000);
  setTimeout(function() {
    $('body').addClass('site-loaded');
  }, 500);
  $('.loader').detach();
});

import lazyLoad from './lazy-load.js';
lazyLoad();

import nav from './_nav';
nav();

import scroll from './scroll';
scroll();

import sliders from './sliders';
sliders();

import fetchModal from './_modal';
fetchModal();

import faq from './faq-page';
faq();

import load from './load';
load();