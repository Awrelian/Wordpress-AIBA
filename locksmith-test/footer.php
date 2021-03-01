<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locksmith-test
 */

?>

<footer>
    <div class="container">
      <h2 class="footer-title">Locksmiths-London</h2>
      <div class="row mt-5">
        <div class="mail-item col-lg-6 col-md-12 d-flex justify-content-center">
          <div class="footer__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/mail.png" alt="">
          </div>
          <p class="footer-text">mail@mail.ru</p>
        </div>
        <div class="phone-item col-lg-6 mt-4 mt-lg-0 col-md-12 d-flex justify-content-center">
          <div class="footer__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/phone.png" alt="">
          </div>
          <p class="footer-text">+7 999 999 99 99</p>
        </div>
        <div class="adress-item col-12 d-flex justify-content-center">
          <div class="footer__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/geo.png" alt="">
          </div>
          <p class="footer-text">Lorem Street, 123 London</p>
        </div>
      </div>
    </div>
  </footer>
 
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js px-0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: ["<img src='assets/src/assets/img/Arrow-left-square.png'>",
        "<img src='/src/assets/img/bi_arrow-right-square-fill.png'>"
      ],
      center: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3,
          nav: false,
          dots: true,
        },
        1200: {
          items: 5
        }
      }
    })
  </script>
<?php wp_footer(); ?>

</body>
</html>
