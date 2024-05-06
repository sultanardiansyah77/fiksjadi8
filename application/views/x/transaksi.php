<?php
  $discount = $game['discount']/100;
?>

<style>
  body {
    height: 100vh;
    display: grid;
    font-family: Roboto;
    -webkit-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
  }

  * {
    box-sizing: border-box;
  }

  .inp {
    position: relative;
    margin: auto;
    width: 100%;
    max-width: 280px;
    border-radius: 3px;
    overflow: hidden;
  }

  .inp .label {
    position: absolute;
    top: 20px;
    left: 12px;
    font-size: 16px;
    color: rgba(0, 0, 0, 0.5);
    font-weight: 500;
    transform-origin: 0 0;
    transform: translate3d(0, 0, 0);
    transition: all 0.2s ease;
    pointer-events: none;
  }

  .inp .focus-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.05);
    z-index: -1;
    transform: scaleX(0);
    transform-origin: left;
  }

  .inp input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
    border: 0;
    font-family: inherit;
    padding: 16px 12px 0 12px;
    height: 56px;
    font-size: 16px;
    font-weight: 400;
    background: rgba(0, 0, 0, 0.02);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.3);
    color: #000;
    transition: all 0.15s ease;
  }

  .inp input:hover {
    background: rgba(0, 0, 0, 0.04);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.5);
  }

  .inp input:not(:-moz-placeholder-shown)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -12px, 0) scale(0.75);
  }

  .inp input:not(:-ms-input-placeholder)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -12px, 0) scale(0.75);
  }

  .inp input:not(:placeholder-shown)+.label {
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(0, -12px, 0) scale(0.75);
  }

  .inp input:focus {
    background: rgba(0, 0, 0, 0.05);
    outline: none;
    box-shadow: inset 0 -2px 0 #0077FF;
  }

  .inp input:focus+.label {
    color: #0077FF;
    transform: translate3d(0, -12px, 0) scale(0.75);
  }

  .inp input:focus+.label+.focus-bg {
    transform: scaleX(1);
    transition: all 0.1s ease;
  }

  .input-hidden {
    /* For Hiding Radio Button Circles */
    position: absolute;
    left: -9999px;
  }

  input[type="radio"]:checked+label>img {
    border: 1px solid rgb(157, 255, 0);
    box-shadow: 0 0 3px 3px #9e00e2;
  }

  input[type="radio"]+label>img {
    border: 1px rgb(0, 0, 0);
    padding: 10px;

    transition: 500ms all;
  }

  input[type="radio"]:checked+label>img {
    transform: rotateZ(-10deg) rotateX(10deg);
  }



  /* Please ❤ this if you like it! */


  @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


  :root {
    --white: #ffffff;
    --light: #f0eff3;
    --black: #000000;
    --dark-blue: #1f2029;
    --dark-light: #353746;
    --red: #da2c4d;
    --yellow: #f8ab37;
    --grey: #ecedf3;
  }


  body {
    width: 100%;
    background: var(--dark-blue);
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    line-height: 30px;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  p {
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    line-height: 30px;
    color: var(--white);
    letter-spacing: 1px;
    font-weight: 500;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  ::selection {
    color: var(--white);
    background-color: var(--black);
  }

  ::-moz-selection {
    color: var(--white);
    background-color: var(--black);
  }

  mark {
    color: var(--white);
    background-color: var(--black);
  }

  .section {
    position: relative;
    width: 100%;
    display: block;
    text-align: center;
    margin: 0 auto;
  }

  .over-hide {
    overflow: hidden;
  }

  .z-bigger {
    z-index: 10;
  }


  .background-color {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--dark-blue);
    z-index: 1;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox:checked~.background-color {
    background-color: var(--white);
  }


  [type="checkbox"]:checked,
  [type="checkbox"]:not(:checked),
  [type="radio"]:checked,
  [type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
    width: 0;
    height: 0;
    visibility: hidden;
  }

  .checkbox:checked+label,
  .checkbox:not(:checked)+label {
    position: relative;
    width: 70px;
    display: inline-block;
    padding: 0;
    margin: 0 auto;
    text-align: center;
    margin: 17px 0;
    margin-top: 100px;
    height: 6px;
    border-radius: 4px;
    background-image: linear-gradient(298deg, var(--red), var(--yellow));
    z-index: 100 !important;
  }

  .checkbox:checked+label:before,
  .checkbox:not(:checked)+label:before {
    position: absolute;
    font-family: 'unicons';
    cursor: pointer;
    top: -17px;
    z-index: 2;
    font-size: 20px;
    line-height: 40px;
    text-align: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox:not(:checked)+label:before {
    content: '\eac1';
    left: 0;
    color: var(--grey);
    background-color: var(--dark-light);
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(26, 53, 71, 0.07);
  }

  .checkbox:checked+label:before {
    content: '\eb8f';
    left: 30px;
    color: var(--yellow);
    background-color: var(--dark-blue);
    box-shadow: 0 4px 4px rgba(26, 53, 71, 0.25), 0 0 0 1px rgba(26, 53, 71, 0.07);
  }

  .checkbox:checked~.section .container .row .col-12 p {
    color: var(--dark-blue);
  }


  .checkbox-tools:checked+label,
  .checkbox-tools:not(:checked)+label {
    position: relative;
    display: inline-block;
    padding: 20px;
    width: 110px;
    font-size: 10px;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0 auto;
    margin-left: 5px;
    margin-right: 5px;
    text-align: center;
    border-radius: 4px;
    overflow: hidden;
    cursor: pointer;
    text-transform: uppercase;
    color: var(--white);
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox-tools:not(:checked)+label {
    background-color: var(--dark-light);
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  }

  .checkbox-tools:checked+label {
    background-color: transparent;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-tools:not(:checked)+label:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-tools:checked+label::before,
  .checkbox-tools:not(:checked)+label::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background-image: linear-gradient(298deg, var(--red), var(--yellow));
    z-index: -1;
  }

  .checkbox-tools:checked+label .uil,
  .checkbox-tools:not(:checked)+label .uil {
    font-size: 24px;
    line-height: 24px;
    display: block;
    padding-bottom: 10px;
  }

  .checkbox:checked~.section .container .row .col-12 .checkbox-tools:not(:checked)+label {
    background-color: var(--light);
    color: var(--dark-blue);
    box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
  }

  .checkbox-budget:checked+label,
  .checkbox-budget:not(:checked)+label {
    position: relative;
    display: inline-block;
    padding: 0;
    padding-top: 20px;
    padding-bottom: 10px;
    width: 110px;
    font-size: 15px;
    line-height: 32px;
    font-weight: 500;
    letter-spacing: 1px;
    margin: 0 auto;
    margin-left: 5px;
    margin-right: 5px;
    text-align: center;
    border-radius: 4px;
    overflow: hidden;
    cursor: pointer;
    text-transform: uppercase;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
    -webkit-text-stroke: 1px var(--white);
    text-stroke: 1px var(--white);
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    color: transparent;
  }

  .checkbox-budget:not(:checked)+label {
    background-color: var(--dark-light);
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  }

  .checkbox-budget:checked+label {
    background-color: transparent;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-budget:not(:checked)+label:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-budget:checked+label::before,
  .checkbox-budget:not(:checked)+label::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background-image: linear-gradient(138deg, var(--red), var(--yellow));
    z-index: -1;
  }

  .checkbox-budget:checked+label span,
  .checkbox-budget:not(:checked)+label span {
    position: relative;
    display: block;
  }

  .checkbox-budget:checked+label span::before,
  .checkbox-budget:not(:checked)+label span::before {
    position: absolute;
    content: attr(data-hover);
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    -webkit-text-stroke: transparent;
    text-stroke: transparent;
    -webkit-text-fill-color: var(--white);
    text-fill-color: var(--white);
    color: var(--white);
    -webkit-transition: max-height 0.3s;
    -moz-transition: max-height 0.3s;
    transition: max-height 0.3s;
  }

  .checkbox-budget:not(:checked)+label span::before {
    max-height: 0;
  }

  .checkbox-budget:checked+label span::before {
    max-height: 100%;
  }

  .checkbox:checked~.section .container .row .col-xl-10 .checkbox-budget:not(:checked)+label {
    background-color: var(--light);
    -webkit-text-stroke: 1px var(--dark-blue);
    text-stroke: 1px var(--dark-blue);
    box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
  }

  .checkbox-booking:checked+label,
  .checkbox-booking:not(:checked)+label {
    position: relative;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    text-align: center;
    padding: 0;
    padding: 6px 25px;
    font-size: 14px;
    line-height: 30px;
    letter-spacing: 1px;
    margin: 0 auto;
    margin-left: 6px;
    margin-right: 6px;

    text-align: center;
    border-radius: 4px;
    cursor: pointer;
    color: var(--white);
    text-transform: uppercase;
    background-color: var(--dark-light);
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox-booking:not(:checked)+label::before {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  }

  .checkbox-booking:checked+label::before {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-booking:not(:checked)+label:hover::before {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .checkbox-booking:checked+label::before,
  .checkbox-booking:not(:checked)+label::before {
    position: absolute;
    content: '';
    top: -2px;
    left: -2px;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    border-radius: 4px;
    z-index: -1;
    background-image: linear-gradient(138deg, var(--red), var(--yellow));
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox-booking:not(:checked)+label::before {
    top: -1px;
    left: -1px;
    width: calc(100% + 2px);
    height: calc(100% + 2px);
  }

  .checkbox-booking:checked+label::after,
  .checkbox-booking:not(:checked)+label::after {
    position: absolute;
    content: '';
    top: -2px;
    left: -2px;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    border-radius: 4px;
    z-index: -2;
    background-color: var(--dark-light);
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox-booking:checked+label::after {
    opacity: 0;
  }

  .checkbox-booking:checked+label .uil,
  .checkbox-booking:not(:checked)+label .uil {
    font-size: 20px;
  }

  .checkbox-booking:checked+label .text,
  .checkbox-booking:not(:checked)+label .text {
    position: relative;
    display: inline-block;
    -webkit-transition: opacity 300ms linear;
    transition: opacity 300ms linear;
  }

  .checkbox-booking:checked+label .text {
    opacity: 0.6;
  }

  .checkbox-booking:checked+label .text::after,
  .checkbox-booking:not(:checked)+label .text::after {
    position: absolute;
    content: '';
    width: 0;
    left: 0;
    top: 50%;
    margin-top: -1px;
    height: 2px;
    background-image: linear-gradient(138deg, var(--red), var(--yellow));
    z-index: 1;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
  }

  .checkbox-booking:not(:checked)+label .text::after {
    width: 0;
  }

  .checkbox-booking:checked+label .text::after {
    width: 100%;
  }

  .checkbox:checked~.section .container .row .col-12 .checkbox-booking:not(:checked)+label,
  .checkbox:checked~.section .container .row .col-12 .checkbox-booking:checked+label {
    background-color: var(--light);
    color: var(--dark-blue);
  }

  .checkbox:checked~.section .container .row .col-12 .checkbox-booking:checked+label::after,
  .checkbox:checked~.section .container .row .col-12 .checkbox-booking:not(:checked)+label::after {
    background-color: var(--light);
  }




  .link-to-page {
    position: fixed;
    top: 30px;
    right: 30px;
    z-index: 20000;
    cursor: pointer;
    width: 50px;
  }

  .link-to-page img {
    width: 100%;
    height: auto;
    display: block;
  }

  .heading-page h4 {
    font-family: "Arial", sans-serif;
    /* Ganti dengan font yang diinginkan */
    font-size: 18px;
    font-weight: bold;
    color: #ffffff;
    /* Warna teks putih */
    margin-bottom: 10px;
  }

  .heading-page h2 {
    font-family: "Helvetica", sans-serif;
    /* Ganti dengan font yang diinginkan */
    font-size: 36px;
    font-weight: bold;
    color: #ffffff;
    /* Warna teks putih */
  }

  .button-85 {
    padding: 0.6em 2em;
    border: none;
    outline: none;
    color: rgb(255, 255, 255);
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    
  }

  .button-85:before {
    content: "";
    background: linear-gradient(45deg,
        #ff0000,
        #ff7300,
        #fffb00,
        #48ff00,
        #00ffd5,
        #002bff,
        #7a00ff,
        #ff00c8,
        #ff0000);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing-button-85 20s linear infinite;
    transition: opacity 0.3s ease-in-out;
    border-radius: 10px;
  }

  @keyframes glowing-button-85 {
    0% {
      background-position: 0 0;
    }

    50% {
      background-position: 400% 0;
    }

    100% {
      background-position: 0 0;
    }
  }

  .button-85:after {
    z-index: -1;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #222;
    left: 0;
    top: 0;
    border-radius: 10px;
  }

  .discount {
        color: red;
    }
</style>

<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>Sultan Top Up</h4>
        <h2>Best Site for Top Up Your Games</h2>
      </div>
    </div>
  </div>
</section>

<section class="meetings-page" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="meeting-single-item">
              <div class="thumb">
                <div class="price">
                  <span>Discount <?=$game['discount']?>%</span>
                </div>
                <a href="#"><img src="<?= base_url(); ?>assetx/assets/images/<?= $game['foto_game'] ?>" alt=""></a>
              </div>
              <div class="down-content">
                <a href="#">
                  <h4>TOP UP <?= $game['nama_game'] ?></h4>
                </a>
                <p class="text-justify">Discover a wide range of payment methods available to purchase game vouchers for your favorite game. Choose from various secure and convenient payment options to enhance your gaming experience. Whether you're into <span class="text-secondary"><?= $game['nama_game'] ?></span>  or any other popular game, we've got you covered. Select your preferred payment method and dive into a world of endless gaming possibilities. Enjoy seamless transactions and hassle-free top-ups for an immersive gaming journey. Don't wait any longer! Explore our payment methods now and power up your gaming adventure.</p>
                <hr>
                <form method="post" action="<?= base_url(); ?>/C_Topup/aksiTransaksi">
                  <div class="form-row">
                    <input type="hidden" name="id_game" value=<?= $game['id_game'] ?>>
                    <div class="form-group">
                    <h4>Masukkan ID Game Anda</h4>
                    <br>

                      <label for="inp" class="inp">
                        <input type="text" id="inp" placeholder="&nbsp;" name="uid" required>
                        <span class="label">Masukkan ID Game Anda</span>
                        <span class="focus-bg"></span>
                      </label>
                      <br><br>
                    </div>
                      <div class="form-group">
                        <h4>Pilih Voucher <?= $game['nama_game'] ?></h4>

                        <div class="section over-hide z-bigger">
                          <div class="row justify-content-center pb-1">

                            <div class="col-xl-10 pb-2">
                              <?php foreach ($voucher as $vc) : ?>
                                <input class="checkbox-budget" type="radio" name="id_voucher" id="<?= $vc['nama_voucher'] ?>" value="<?= $vc['id_voucher'] ?>" required>
                                <label class="for-checkbox-budget" for="<?= $vc['nama_voucher'] ?>">
                                  <span data-hover="<?= $vc['nama_voucher'] ?>"><?= $vc['nama_voucher'] ?></span>
                                  <span style="font-size: 13px;"><del>Rp <?=number_format($vc['harga_voucher'],0,"",".")?></del></span>
                                  <span class="discount" style="font-size: 13px;" >Rp<?=number_format($vc['harga_voucher'] - ($vc['harga_voucher'] * $discount),0,"",".")?></span>
                                  
                                </label>
                              <?php endforeach; ?>

                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-group">
                        <h4>Pilih Metode Pembayaran</h4> <br>
                        <?php foreach ($metode as $m) : ?>
                          <input type="radio" id="<?= $m['id_metode'] ?>" name="id_metode" class="Send_data  input-hidden" value="<?= $m['id_metode'] ?>" required />

                          <label for="<?= $m['id_metode'] ?>">
                            <img src="<?= base_url(); ?>assetx/assets/images/<?= $m['foto_metode'] ?>" style="width:130px;border-radius:20px;" />
                            <br><br>
                            <span><?= $m['nama_metode'] ?></span>
                          </label>
                        <?php endforeach; ?>

                      </div>
                   
                    
                      <div class="form-group">
                        
                          <!-- <button class="float-end mt-3" type="submit" >Pay Now</button> -->
                          <button class="button-85 float-end mt-3" type="submit">Pay Now</button>
                          <br><br>
                      </div>
                      
                    
                    
                  </div>




                  
                </form>
              </div>


            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="main-button-red">
            <a href="<?= base_url(); ?>">Back To Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="footer">
    <p>Copyright © 2023 Kashidota Corporation. All rights reserved.
      
    </p>
  </div>
</section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?= base_url() ?>assetx/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assetx/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>assetx/assets/js/isotope.min.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/owl-carousel.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/lightbox.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/tabs.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/video.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/slick-slider.js"></script>
<script src="<?= base_url(); ?>assetx/assets/js/custom.js"></script>
<script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
          scrollTop: reqSectionPos
        },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };

  var checkSection = function checkSection() {
    $('.section').each(function() {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function() {
    checkSection();
  });
</script>
</body>


</body>

</html>