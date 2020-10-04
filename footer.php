  <footer class="footer">
    <div class="container footer__container">
      <div class="footer-wrapper">
        <a href="index.php" class="footer__logo">
          <img src="img/vertical-logo.svg" alt="Logo: Best Tour Plan" class="logo">
        </a>
        <div class="footer__list footer__categories">
          <h3 class="footer__title">ALL CATEGORIES</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" class="footer__link">All Deals</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Hotels</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Activities</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Spa Packages</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Hotel Day Packages</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Restaurants</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Fitness</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Rodrigues</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__list footer__additional">
          <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" class="footer__link">About Us</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Contact Us</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">How does it work?</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Frequently Asked Questions</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Deals.mu loyalty program</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Promote your Business on BTP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__social-network">
          <h3 class="footer__title footer__title_inline">Social Network</h3>
          <div class="footer__social-links">
            <a href="#" class="footer__link">
              <img src="img/facebook.svg" alt="Icon: facebook">
            </a>
            <a href="#" class="footer__link">
              <img src="img/youtube.svg" alt="Icon: youtube">
            </a>
            <a href="#" class="footer__link">
              <img src="img/instagram.svg" alt="Icon: instagram">
            </a>
          </div>
          <!-- /.footer__social-links -->
        </div>
        <!-- /.footer__social-network -->
        <div class="footer__list footer__legal">
          <h3 class="footer__title">LEGAL INFORMATION</h3>
          <ul class="footer__ul">
            <li class="footer__item">
              <a href="#" class="footer__link">Terms & Conditions</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Disclaimer</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Cancellation policy</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Privacy</a>
            </li>
          </ul>
        </div>
        <!-- /.footer__list -->
        <div class="footer__contact-details">
          <h3 class="footer__title footer__title_details">Contact Details</h3>
          <p class="footer__text">
            Feel free to contact us by phone, email or by our contact form
          </p>
          <ul class="footer__ul">
            <li class="footer__item footer__item_contact">
              <img class="footer__icon" src="img/map-marker.svg" alt="Icon: map">
              9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
            </li>
            <li class="footer__item footer__item_contact">
              <img class="footer__icon" src="img/phone-call-footer.svg" alt="Icon: phone call">
              Tel (business hours) : 269 1500<br />
              Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm)<br />
              Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
            </li>
            <li class="footer__item footer__item_contact">
              <img class="footer__icon" src="img/email.svg" alt="Icon: email">
              cherly.lawson@example.com
            </li>
          </ul>
        </div>
        <!-- /.footer__contact-details -->
        <div class="footer__contact-form">
          <h3 class="footer__title footer__title_form">Send us a message</h3>
          <form action="send.php" method="POST" class="footer__form">
            <input type="text" class="input footer__input" placeholder="Your Full Name*" name="name">
            <input type="text" class="input footer__input" placeholder="Phone Number*" name="phone">
            <textarea placeholder="Message" class="message footer__message" name="message"></textarea>
            <div class="footer__button-wrapper">
              <button class="button footer__button" type="submit">Send</button>
              <span class="footer__info">* Required Fields</span>
            </div>
          </form>
        </div>
      </div>
      <!-- /.footer-wrapper -->
      <ul class="footer__rules">
        <li class="rules">
          <a href="#" class="rules__link">Disclaimer</a>
        </li>
        <li class="rules">
          <a href="#" class="rules__link">Conditions of use</a>
        </li>
        <li class="rules">
          <a href="#" class="rules__link">Cancellation policy</a>
        </li>
      </ul>
      <img src="img/partners.png" alt="partners" class="partners">
    </div>
    <!-- /.container -->
  </footer>
  <div class="modal">
    <div class="modal__overlay"></div>
    <!-- /.modal__overlay -->
    <div class="modal__dialog">
      <div class="modal__content">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="Icon: close">
        </a>
        <div class="modal__contact-form">
          <h3 class="modal__title modal__title_form">Booking</h3>
          <form action="send.php" method="POST" class="modal__form">
            <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name">
            <input type="text" class="input modal__input" placeholder="Phone Number*" name="phone">
            <input type="text" class="input modal__input" placeholder="Email*" name="email">
            <textarea placeholder="Message" class="message modal__message" name="message"></textarea>
            <div class="modal__button-wrapper">
              <button class="button modal__button" type="submit">Send</button>
              <span class="modal__info">* Required Fields</span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.modal__dialog -->
  </div>
  <!-- /.modal -->
  <script src="js/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/main.js"></script>
  </body>

  </html>