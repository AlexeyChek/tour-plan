<?php if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) ob_start("ob_gzhandler"); else ob_start(); ?> 
<?php include('header.php')?>
<nav class="breadcrumb">
  <div class="container">
    <ul class="breadcrumb-list">
      <li class="breadcrumb-list__item">
        <a href="#" class="breadcrumb-list__link">Home</a>
      </li>
      <li class="breadcrumb-list__item">
        <span class="breadcrumb-list__link">Flash Offers</span>
      </li>
      <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
    </ul>
  </div>
  <!-- /.container -->
</nav>
<!-- /.breadcrumb -->
<section class="hotel">
  <div class="container">
    <div class="hotel-info">
      <div class="hotel-info__text">
        <div class="hotel-wrapper">
          <div class="stars">
            <img src="img/star.svg" class="star" alt="star" />
            <img src="img/star.svg" class="star" alt="star" />
            <img src="img/star.svg" class="star" alt="star" />
            <img src="img/star.svg" class="star" alt="star" />
            <img src="img/star.svg" class="star" alt="star" />
          </div>
          <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="hotel-description hotel-info__description">
          Half-Board/ All Inclusive + Complimentary Activities + Child Stays
          Free
        </p>
      </div>
      <!-- /.hotel-info__text -->
      <div class="rating hotel-info__rating">
        <span class="rating__text">User Rattings</span>
        <span class="rating__counter">4.5/</span>
        <span class="rating__counter rating__counter_max">5</span>
      </div>
      <!-- /.hotel-info__rating -->
    </div>
    <!-- /.hotel-info -->
    <div class="hotel-grid">
      <!-- Slider main container -->
      <div class="swiper-container hotel-slider hotel__slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide hotel-slider__item">
            <img class="swiper-slide__image hotel-slider__image" src="img/slide-1.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="swiper-slide__image hotel-slider__image" data-src="img/slide-2.jpg" src="#" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="swiper-slide__image hotel-slider__image" data-src="img/slide-3.jpg" src="#" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="swiper-slide__image hotel-slider__image" data-src="img/slide-4.jpg" src="#" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="swiper-slide__image hotel-slider__image" data-src="img/slide-5.jpg" src="#" alt="slide" />
          </div>
        </div>
        <!-- If we need navigation buttons -->
        <button class="hotel-slider__button hotel-slider__button_prev"></button>
        <button class="hotel-slider__button hotel-slider__button_next"></button>
      </div>
      <!-- /.swiper-container -->
      <div class="hotel-right">
        <div class="booking">
          <div class="booking__info">
            <div class="booking__price">
              <span class="booking__start">price starts as</span>
              <strong class="booking__pricetag">$ 8,500</strong>
              <span class="booking__per-room">per room / night</span>
            </div>
            <!-- /.booking__price -->
            <div class="booking__room">
              <div class="booking__text">
                <img src="img/guest.svg" alt="icon: guest" class="booking__icon" />
                <span class="booking__description">2 x Guests</span>
              </div>
              <div class="booking__text">
                <img src="img/home.svg" alt="icon: home" class="booking__icon" />
                <span class="booking__description">1 x Room</span>
              </div>
            </div>
            <!-- /.booking__room -->
          </div>
          <!-- /.booking__info -->
          <div class="booking__call-center">
            <span class="booking__heading">Quick Booking</span>
            <a class="booking__number" href="tel:12100">
              <img src="img/phone-call.svg" alt="icon: phone" />
              <span class="booking__num">12100</span>
            </a>
          </div>
          <!-- /.booking__call-center -->
          <button data-toggle="modal" class="button booking__button">View Other Options</button>
        </div>
        <!-- /.booking -->
        <div id="map" class="map" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.6748415111024!2d29.01923291580142!3d40.98860037930264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDU5JzE5LjAiTiAyOcKwMDEnMTcuMSJF!5e0!3m2!1sru!2sru!4v1601810053924!5m2!1sru!2sru">
          <img alt="google-maps" src="img/google-map.JPG" class="google-map-img">
        </div>
        <!-- /.map -->
      </div>
      <!-- /.hotel-right -->
    </div>
    <!-- /.hotel-grid -->
  </div>
  <!-- /.container -->
</section>
<!-- /.hotel -->
<section class="other-packages">
  <div class="container">
    <h2 class="other-packages__title">Other Packages</h2>
    <div class="packages">
      <div class="packages-сard packages-first" data-aos="fade-up" data-aos-delay="100">
        <div class="packages__container packages__container_first">
          <div class="packages__photo packages__photo_first">
            <img data-src="img/other-package-1.jpg" src="#" alt="Hotel Blue Haven" class="packages__image packages__image_first" />
            <span class="packages__offer packages__offer_first">Flash Offer</span>
          </div>
          <div class="packages__body packages__body_first">
            <div class="packages__rating">
              <img src="img/star.svg" class="star" alt="star" />
              <img src="img/star.svg" class="star" alt="star" />
              <img src="img/star.svg" class="star" alt="star" />
              <img src="img/star.svg" class="star" alt="star" />
              <img src="img/star.svg" class="star" alt="star" />
            </div>
            <!-- /.packages__rating -->
            <h3 class="packages__title packages__title_first">
              Hotel Blue Haven
            </h3>
            <p class="packages__text">
              Aute quis duis excepteur excepteur ipsum cat eiusmod
              consectetur enim laborum magna llit. Ipsum est fugiat velit ea
              llamco do esse ut in veniam sun in onsequat. Aute quis duis
              epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum
              magna mollit. Ipsum est fugiat velit ea ullamco do
            </p>
            <div class="packages__info packages__info_first">
              <div class="packages__location">
                <img src="img/location.svg" alt="icon: location" class="packages__icon" />
                <span class="packages__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages__guest">
                <img src="img/guest.svg" alt="icon: guest" class="packages__icon" />
                <span class="packages__description">2 x Guests</span>
              </div>
              <div class="packages__room">
                <img src="img/home.svg" alt="icon: home" class="packages__icon" />
                <span class="packages__description">1 x Room</span>
              </div>
            </div>
            <!-- /.packages__info -->
            <span class="packages__old-price">$ 10,500</span>
            <div class="packages__buy">
              <strong class="packages__new-price">$ 8,500</strong>
              <button class="packages__button  button">Book Now</button>
            </div>
          </div>
          <!-- /.packages__body -->
        </div>
        <!-- /.packages__container -->
      </div>
      <!-- /.packages-сard 1-->

      <div class="packages-сard" data-aos="fade-up" data-aos-delay="200">
        <div class="packages__container">
          <div class="packages__photo">
            <img data-src="img/other-package-2.jpg" src="#" alt="LUX* Belle Mare" class="packages__image" />
            <span class="packages__offer">Flash Offer</span>
          </div>
          <div class="packages__body">
            <h3 class="packages__title">LUX* Belle Mare</h3>
            <div class="packages__info">
              <div class="packages__location">
                <img src="img/location.svg" alt="icon: location" class="packages__icon" />
                <span class="packages__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages__guest">
                <img src="img/guest.svg" alt="icon: guest" class="packages__icon" />
                <span class="packages__description">2 x Guests</span>
              </div>
              <div class="packages__room">
                <img src="img/home.svg" alt="icon: home" class="packages__icon" />
                <span class="packages__description">1 x Room</span>
              </div>
            </div>
            <!-- /.packages__info -->
            <span class="packages__old-price">$ 8,500</span>
            <div class="packages__buy">
              <strong class="packages__new-price">$ 3,000</strong>
              <button class="packages__button  button">Book Now</button>
            </div>
          </div>
          <!-- /.packages__body -->
        </div>
        <!-- /.packages__container -->
      </div>
      <!-- /.packages-сard 2-->

      <div class="packages-сard" data-aos="fade-up" data-aos-delay="300">
        <div class="packages__container">
          <div class="packages__photo">
            <img data-src="img/other-package-3.jpg" src="#" alt="White Palace" class="packages__image" />
            <span class="packages__offer">Flash Offer</span>
          </div>
          <div class="packages__body">
            <h3 class="packages__title">White Palace</h3>
            <div class="packages__info">
              <div class="packages__location">
                <img src="img/location.svg" alt="icon: location" class="packages__icon" />
                <span class="packages__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages__guest">
                <img src="img/guest.svg" alt="icon: guest" class="packages__icon" />
                <span class="packages__description">2 x Guests</span>
              </div>
              <div class="packages__room">
                <img src="img/home.svg" alt="icon: home" class="packages__icon" />
                <span class="packages__description">1 x Room</span>
              </div>
            </div>
            <!-- /.packages__info -->
            <span class="packages__old-price">$ 10,500</span>
            <div class="packages__buy">
              <strong class="packages__new-price">$ 9,500</strong>
              <button class="packages__button  button">Book Now</button>
            </div>
          </div>
          <!-- /.packages__body -->
        </div>
        <!-- /.packages__container -->
      </div>
      <!-- /.packages-сard 3-->

      <div class="packages-сard" data-aos="fade-up" data-aos-delay="400">
        <div class="packages__container">
          <div class="packages__photo">
            <img data-src="img/other-package-4.jpg" src="#" alt="Luxury Place" class="packages__image" />
            <span class="packages__offer">Flash Offer</span>
          </div>
          <div class="packages__body">
            <h3 class="packages__title">Luxury Place</h3>
            <div class="packages__info">
              <div class="packages__location">
                <img src="img/location.svg" alt="icon: location" class="packages__icon" />
                <span class="packages__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages__guest">
                <img src="img/guest.svg" alt="icon: guest" class="packages__icon" />
                <span class="packages__description">2 x Guests</span>
              </div>
              <div class="packages__room">
                <img src="img/home.svg" alt="icon: home" class="packages__icon" />
                <span class="packages__description">1 x Room</span>
              </div>
            </div>
            <!-- /.packages__info -->
            <span class="packages__old-price">$ 4,500</span>
            <div class="packages__buy">
              <strong class="packages__new-price">$ 2,500</strong>
              <button class="packages__button  button">Book Now</button>
            </div>
          </div>
          <!-- /.packages__body -->
        </div>
        <!-- /.packages__container -->
      </div>
      <!-- /.packages-сard 4-->

      <div class="packages-сard packages-last" data-aos="fade-up" data-aos-delay="500">
        <div class="packages__container">
          <div class="packages__photo">
            <img data-src="img/other-package-5.jpg" src="#" alt="Hotel Five Star" class="packages__image" />
            <span class="packages__offer">Flash Offer</span>
          </div>
          <div class="packages__body">
            <h3 class="packages__title">Hotel Five Star</h3>
            <div class="packages__info">
              <div class="packages__location">
                <img src="img/location.svg" alt="icon: location" class="packages__icon" />
                <span class="packages__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages__guest">
                <img src="img/guest.svg" alt="icon: guest" class="packages__icon" />
                <span class="packages__description">2 x Guests</span>
              </div>
              <div class="packages__room">
                <img src="img/home.svg" alt="icon: home" class="packages__icon" />
                <span class="packages__description">1 x Room</span>
              </div>
            </div>
            <!-- /.packages__info -->
            <span class="packages__old-price">$ 6,500</span>
            <div class="packages__buy">
              <strong class="packages__new-price">$ 3,500</strong>
              <button class="packages__button  button">Book Now</button>
            </div>
          </div>
          <!-- /.packages__body -->
        </div>
        <!-- /.packages__container -->
      </div>
      <!-- /.packages-сard 5-->
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.other-packages -->
<section class="newsletter parallax-window" data-parallax="scroll" data-image-src="img/newsletter-bg.jpg">
  <div class="newsletter-wrapper">
    <h2 class="newsletter-title">
      subscribe to our
      <span class="newsletter-title__strong">Newsletter</span>
    </h2>
    <form action="send.php" method="POST" class="subscribe newsletter__subscribe form">
      <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required />
      <button class="subscribe__button  button">Send</button>
    </form>
  </div>
  <!-- /.newsletter-wrapper -->
</section>
<!-- /.newsletter -->
<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What people thinks about us</h2>
    <div class="swiper-container reviews-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img data-src="img/reviews-avatar.jpg" src="#" alt="Photo: Megan Fox" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">Megan Fox</h3>
              <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
              <div class="reviews-slider__rating">
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was
              good and polite. They welcome us very well. Issue was only
              that Lift was not in working and we were allotted to 3rd floor
              and amenities articles were in corner of gallery which were
              giving bad feeling. Breakfast was good and support of the
              staff was also very nice. Location is not good as per
              atmosphere, it is very nearby most of the popular places but
              self location in a narrow street is not good. Overall it was a
              good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img data-src="img/reviews-avatar-2.jpg" src="#" alt="Photo: John Smitt" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">John Smitt</h3>
              <span class="reviews-slider__date">Stayed 13 Dec, 2018</span>
              <div class="reviews-slider__rating">
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was
              good and polite. They welcome us very well. Issue was only
              that Lift was not in working and we were allotted to 3rd floor
              and amenities articles were in corner of gallery which were
              giving bad feeling. Breakfast was good and support of the
              staff was also very nice. Location is not good as per
              atmosphere, it is very nearby most of the popular places but
              self location in a narrow street is not good. Overall it was a
              good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img data-src="img/reviews-avatar-3.jpg" src="#" alt="Photo: Mega Box" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">Mega Box</h3>
              <span class="reviews-slider__date">Stayed 18 Jun, 2020</span>
              <div class="reviews-slider__rating">
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
                <img src="img/star.svg" class="star" alt="star" />
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was
              good and polite. They welcome us very well. Issue was only
              that Lift was not in working and we were allotted to 3rd floor
              and amenities articles were in corner of gallery which were
              giving bad feeling. Breakfast was good and support of the
              staff was also very nice. Location is not good as per
              atmosphere, it is very nearby most of the popular places but
              self location in a narrow street is not good. Overall it was a
              good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
      </div>
      <!-- /.swiper-wrapper -->
      <button class="reviews-slider__button reviews-slider__button_prev"></button>
      <button class="reviews-slider__button reviews-slider__button_next"></button>
    </div>
    <!-- /.reviews-slider -->
  </div>
  <!-- /.container -->
</section>
<!-- /.reviews -->
<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <img data-src="img/activity-1.jpg" src="#" alt="The curious corner of chamarel" class="card__image" />
        <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
        <button class="card__button button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <img data-src="img/activity-2.jpg" src="#" alt="Gymkhana club golf course" class="card__image" />
        <h3 class="card__title">Gymkhana club golf course</h3>
        <button class="card__button button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card" data-aos="fade-up" data-aos-delay="300">
        <img data-src="img/activity-3.jpg" src="#" alt="Tamarind falls hiking trip - full day" class="card__image" />
        <h3 class="card__title">Tamarind falls hiking trip&nbsp;-&nbsp;full day</h3>
        <button class="card__button button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card" data-aos="fade-up" data-aos-delay="400">
        <img data-src="img/activity-4.jpg" src="#" alt="The blue marine discovery quest" class="card__image" />
        <h3 class="card__title">The blue marine discovery quest</h3>
        <button class="card__button button">Book Now</button>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.activities-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.activities -->
<?php include('footer.php')?>