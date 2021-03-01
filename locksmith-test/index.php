<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package locksmith-test
 */

get_header();
?>

<div class="welcome-block">
      <div class=" row mb-5">
        <div class="img-wrapper col-lg-6 col-md-12   my-auto mx-auto   ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Frame.png" alt="" class=" welcome__img rounded mx-auto d-block  ">
        </div>
        <div class="welcome__text col-lg-6 col-md-12  mt-5 mt-lg-0 ">
          <div class="welcome-block__title mb-5 mx-auto mx-lg-0 text-center text-lg-left  ">Excepteur sint</div>
          <p class="mb-5 mx-auto mx-lg-0 text-center text-lg-left">
          Sed ut perspiciatis unde omnis iste natus error sit
            voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
          <div class="welcome-block__btn-wrapper text-center text-lg-left">
            <a href="" class="welcome-block__btn  ">CALL US</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="about-title col-12">
        <h2 class=" h2-title text-center">About</h2>
        <p class="text-center text-grey about__subtitle my-5">Sed ut perspiciatis unde omnis iste natus error sit<br>
          voluptatem accusantium doloremque laudantium, totam rem<br> aperiam, eaque ipsa quae ab illo inventore
          veritatis
          et quasi<br> architecto beatae</p>
      </div>
      <div class="quality-wrapper col-12">
        <div class="row justify-content-center my-5">
          <div class="quality col-lg-4 col-12">
            <h3>10+</h3>
            <p class="text-grey ">Nemo enim ipsam<br> voluptatem </p>
          </div>
          <div class="quality col-lg-4 col-12">
            <h3>10+</h3>
            <p class="text-grey ">Nemo enim ipsam<br> voluptatem </p>
          </div>
          <div class="quality col-lg-4 col-12">
            <h3>10+</h3>
            <p class="text-grey ">Nemo enim ipsam<br> voluptatem </p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <section class="section-form">
    <div class="container">
      <h2 class="form-title ">Call an artisan</h2>
      <div class="row mt-5">
        <div class="col-lg-5 col-md-12 text-center d-flex justify-content-end ">
          <input type="text" class="input-name" placeholder="Your name">
        </div>
        <div class="col-lg-4 col-md-12 text-center d-flex justify-content-start">
          <input type="text" class="input-phone" placeholder="Your phone number">
        </div>
        <div class="col-lg-3 col-md-12 text-center  d-flex justify-content-start">
          <button class="send-btn">
            <div class="btn-text ">Send</div>
          </button>
        </div>
        <div class="col-12 d-flex justify-content-center mx-auto my-5">
          <input type="checkbox" name="" id="agree" class="checkbox__input">
          <label for="agree" class="checkbox" class="checkbox-agree " id="agree">Sed ut perspiciatis unde omnis iste
            natus error sit voluptatem accusantium doloremque laudantium,</label>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="price-block__wrapper mx-auto">
        <div class="some-text-block my-5">
          <h2 class="h2-title text-center text-lg-left">Excepteur sint occaecat cupidatat non culpa qui.</h2>
          <div class="some-text__subtitle text-grey text-center text-lg-left my-5">Sed ut perspiciatis unde omnis iste
            natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit
            aut fugit, sed quia consequuntur magni.</div>
          <div class="row justify-content-start">
            <div class="specialties col-md-auto ">
              <h3 class="h3-title  text-center text-lg-left">10+</h3>
              <p class="text-grey  text-center text-lg-left ">Nemo enim ipsam voluptatem </p>
            </div>
            <div class="specialties col-md-auto">
              <h3 class="h3-title text-center text-lg-left">10+</h3>
              <p class="text-grey  text-center text-lg-left">Nemo enim ipsam voluptatem </p>
            </div>
            <div class="specialties col-md-auto">
              <h3 class="h3-title text-center text-lg-left ">10+</h3>
              <p class="text-grey  text-center text-lg-left">Nemo enim ipsam voluptatem </p>
            </div>
          </div>
        </div>
        <div class="price-block">
          <h2 class="price-title text-center text-lg-left">Price</h2>
          <div class="row justify-content-center">
            <div class="column-white col-lg-4 col-md-6 col-12 m-4 ml-0">
              <p class="column__price-blue">$15</p>
              <p class="column__title text-nowrap">Basic service</p>
              <p class="column__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididun</p>
              <p class="column__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididun</p>
              <p class="column__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididun</p>
            </div>
            <div class="column-blue col-lg-4 col-md-6 col-12 m-4 ">
              <p class="column__price-white">$15</p>
              <p class="column__title text-nowrap">Basic service</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
            </div>
            <div class="column-blue col-lg-4 col-md-12 col-12 m-4 mr-0">
              <p class="column__price-white">$15</p>
              <p class="column__title text-nowrap">Basic service</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
              <p class="column__subtitle-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididun</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="section section-gallery">
        <div class="container">
          <div class="row">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt=""> 
                </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img"> 
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt=""> 
                </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt="">  </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img"> 
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt=""> 
                </div>
              </div>
            </a>
          </div>
          <div class="row">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt="">  </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt="">  </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt="">  </div>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 px-0 gallery__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 7.png" class="img-fluid rounded">
              <div class="overlay">
                <div class="overlay__img">
                  <img  src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/eye.png" alt="">  </div>
              </div>
            </a>
          </div>
        </div>
    
  </section>
  <section class="section section-carousel my-5">
    <div class="container">
      <div class="row ">
        <div class="h2 col-12 pb-2 text-center section-carousel__title mt-5">Marks</div>
      </div>
      <div class="carousel-sponsors__wrapper ">
        <div class="row carousel-sponsors">
          <div class="owl-carousel owl-theme mt-5 col-12">
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
            <div class="item partners__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/assets/img/Rectangle 9.png" alt=""></div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php
get_sidebar();
get_footer();
