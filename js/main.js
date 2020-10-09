$(document).ready(function () {
  var hotelSlider = new Swiper('.hotel-slider', {
    loop: true,
    navigation: {
      nextEl: '.hotel-slider__button_next',
      prevEl: '.hotel-slider__button_prev',
    },
    effect: 'coverflow',
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  });

  $(".map").click(function () {
    var map = $(this).attr("data-map");
    $(this).html('<iframe class="google-map" src="' + map + 'style="border:0;" allowfullscreen="" aria-hidden="false" tabindex = "0" > < /iframe>');
  });


  var rewiewsSlider = new Swiper('.reviews-slider', {
    loop: true,
    navigation: {
      nextEl: '.reviews-slider__button_next',
      prevEl: '.reviews-slider__button_prev',
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  });

  $('.parallax-window').parallax({
    imageSrc: './img/newsletter-bg.jpg'
  });

  var menuButton = document.querySelector('.menu-button');

  menuButton.addEventListener('click', function () {
    document.querySelector('.navbar__nav').classList.toggle('navbar__nav_visible');
    document.querySelector('.navbar__menu').classList.toggle('navbar__menu_mobile');
  });

  var modalButton = $('[data-toggle=modal]');
  var closeModalButton = $(".modal__close");
  var modalOverlay = $(".modal__overlay")
  var modalDialog = $(".modal__dialog")
  var packagesButton = document.querySelectorAll('.packages__button');
  var cardButton = document.querySelectorAll('.card__button');

  const openModal = () => {
    modalOverlay.addClass('modal__overlay_visible');
    modalDialog.addClass('modal__dialog_visible');
  };

  const closeModal = () => {
    event.preventDefault();
    modalOverlay.removeClass('modal__overlay_visible');
    modalDialog.removeClass('modal__dialog_visible');
  };

  modalButton.on('click', openModal);

  packagesButton.forEach((button) => {
    button.addEventListener('click', openModal);
  });

  cardButton.forEach((btn) => {
    btn.addEventListener('click', openModal);
  });


  closeModalButton.on('click', closeModal);
  modalOverlay.on('click', closeModal);

  document.addEventListener('keydown', (event) => {
    if (event.code === 'Escape') {
      closeModal();
    };
  });

  $('.form').each(function () {
    $(this).validate({
      rules: {
        name: {
          required: true,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          minlength: 17
        }
      },
      messages: {
        name: "Please specify your name",
        email: {
          required: "We need your email address to contact you",
          email: "Please enter a valid email address"
        },
        phone: {
          required: "We need your phone number to contact you",
          minlength: "Please enter a valid phone number"
        }
      },

    });
  });

  $('.tel').mask('+7 (000) 000-0000');

  AOS.init({
    disable: 'mobile',
  });

  [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
    img.setAttribute('src', img.getAttribute('data-src'));
    img.onload = function () {
      img.removeAttribute('data-src');
    };
  });
});