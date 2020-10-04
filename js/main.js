$(document).ready(function () {
  var hotelSlider = new Swiper('.hotel-slider', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.hotel-slider__button_next',
      prevEl: '.hotel-slider__button_prev',
    },
    effect: 'coverflow',
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  })

  var rewiewsSlider = new Swiper('.reviews-slider', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.reviews-slider__button_next',
      prevEl: '.reviews-slider__button_prev',
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  })

  ymaps.ready(init);

  function init() {
    // Создание карты.
    var myMap = new ymaps.Map("map", {
      // Координаты центра карты.
      // Порядок по умолчанию: «широта, долгота».
      // Чтобы не определять координаты центра карты вручную,
      // воспользуйтесь инструментом Определение координат.
      center: [40.98860040, 29.02142155],
      // Уровень масштабирования. Допустимые значения:
      // от 0 (весь мир) до 19.
      zoom: 13,
      controls: []
    });
  }

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
});