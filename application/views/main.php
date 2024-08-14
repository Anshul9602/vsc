<link href="<?php echo base_url(); ?>assets/css/mainpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  section {
    z-index: 999;
  }

  .header {
    background-color: transparent;
    position: absolute;
  }

  .mobile-nav-toggle {
    color: #000;
  }

  .navbar a {
    color: #fff;
  }

  .sticked .navbar a {
    color: #fff;
  }

  .sticked .mobile-nav-toggle {
    color: #fff !important;
  }

  .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
  }

  #backgroundVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
  }

  .text-overlay {
    position: absolute;
    top: 44%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    z-index: 1;
  }

  .text-overlay1 {
    position: absolute;
    top: 44%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    z-index: 1;
  }

  .text-overlay h1 {
    margin: 0;
    font-size: 2.9em;
    letter-spacing:1px;
    text-transform: uppercase;
  }

  .text-overlay h3 {
    margin: 0;
    font-size: 2em;
    line-height: 1.2;
    letter-spacing: 2px;
    line-height: 36px;
  }

  .def {
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    min-height: 30vh;
    position: relative;
    z-index: 2;
  }

  .def .container {
    height: 70%;
    margin: auto;
    text-align: center;
    color: #fff;
  }

  .defh2 {
    font-size: 48px;
    line-height: 1;
  }

  .whhh {
    background-color: #0D4771;
    border-radius: 0 30px 30px 30px;
    padding: 10px 20px;
    width: fit-content;
    text-align: center;
    color: #fff;
  }

  .def.un {
    height: 2px;
    width: 200px;
    background: #fff;
    margin: 0 auto;
  }

  .def h3 {
    font-size: 22px;
    line-height: 1.2;
    margin-top: 20px;
  }


  .def p {
    color: #fff;
  }

  .mob {
    display: none;
  }

  .cstm_key_people .member_txt h5 {
    font-size: 16px;
    margin-bottom: 10px;
  }

  .cstm_key_people .member_txt span {
    font-size: 14px;
    margin-bottom: 5px;
  }

  @media screen and (max-width: 768px) {
    .whhh {
      text-align: center;

      color: #fff;
      margin: 0 auto 20px;
    }

    .mobile-nav-toggle {
      color: #fff;
    }

    .def .container {

      text-align: center;

    }

    .bg-black1 {

      min-height: 30vh !important;

    }

    .def {

      min-height: 30vh !important;

    }

    .text-overlay h1 {
      margin: 0;
      font-size: 2em;
    }

    .desk {
      display: none;
    }

    .mob {
      display: block !important;
    }

    .text-overlay h3 {
      margin: 0;
      font-size: 1em;
      line-height: 1;
      letter-spacing: 2px;
      line-height: 28px;
    }

    .cou .col-8 {
      margin: 20px;
    }

    .cou {
      justify-content: center;
      padding: 0;
    }

    .co1 {
      margin: 2%;
    }

    .tc1 {
      text-align: center;
    }

    .mtm {
      margin-top: 50px;
    }

    .service .card {
      margin-top: 20px;
    }

    .cstm-key-popup .member_profile {
      display: block !important;

    }

    .cstm-key-popup .member_profile .member_profile_left {

      width: 100% !important;
    }

    .cstm-key-popup .member_profile .member_profile_right {

      width: 100% !important;
    }

    .cstm_key_people .member_txt {
      min-height: 75px !important;
    }

    .cstm_key_people .member_txt {
      text-align: start;
      width: 100%;
      padding: 10px !important;
      transition: .4s ease-in-out;
    }

    .cstm_key_people .member_txt h5 {
      font-size: 14px;
      margin-bottom: 5px;
    }

    .cstm_key_people .member_txt span {
      font-size: 13px;
    }

  }

  .dd .card {

    border: none;
    outline: none;
    color: #fff;
    background: #00243a;

    position: relative;
    z-index: 0;
    border-radius: 10px;
  }

  .dd .card:before {
    content: '';
    background: linear-gradient(45deg, #ff7300, #ff0000);
    position: absolute;
    top: -4px;
    left: -4px;
    background-size: 400%;
    z-index: -1;
    filter: blur(1px);
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
  }

  .dd .card:active {
    color: #000
  }



  .dd .card:hover:before {
    opacity: 1;
  }

  .dd .card:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #00243a;
    left: 0;
    top: 0;
    border-radius: 10px;
  }


  .bg-black1 {
    width: 100%;
    height: 100%;
    opacity: 0.7;
    min-height: 60vh;
    justify-content: center;
    display: flex;

  }

  .dds {
    display: none;
    max-width: 250px;
  }

  .ds {
    display: block;
    max-width: 250px;
  }

  /* Custom styles if needed */
  .modal-content {
    border-radius: 10px;
  }

  .close {
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 1.5rem;
  }

  .pic {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .mmd1{
    top : 55% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;

  }
  .foot{
  margin-top:20px;
  font-size:20px;
  letter-spacing:1px;
  }
</style>


<!-- Modal -->
<div class="modal fade mmd1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="background:none; box-shadow:0px" class="modal-content">
      <div class="modal-body pic">
      <span class="close" style="margin-right:50px" aria-hidden="true">&times;</span>
        <img src="assets/img/popp.png">
      </div>
    </div>
  </div>
</div>






<div class="video-section desk">
  <div class="splide sp" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <div class="video-overlay" style="position: relative;">
            <img src="<?php echo base_url(); ?>assets/img/mainban.png" alt="" style="width: 100%;">
            <div class="text-overlay">
              <h1 style="font-weight:400;">Unparalleled Auditing & Assurance Services</h1>
              <p class="foot">With three decades of expertise, we ensure your financial integrity and compliance with precision and diligence.</p>
              <a href="#" class="ban" style="padding:10px 30px;">Discover Our Auditing Excellence</a>
            </div>
          </div>
        </li>
        <li class="splide__slide">
          <div class="video-overlay" style="position: relative;">
            <img src="<?php echo base_url(); ?>assets/img/mainban2.png" alt="" style="width: 100%;">
            <div class="text-overlay">
              <h1 style="font-weight:400;">Expert Tax & Regulatory Services</h1>
              <p class="foot">Navigating complex tax landscapes and regulatory frameworks with expert guidance and strategic solutions.</p>
              <a href="#" class="ban" style="padding:10px 30px;">Optimize Your Tax Strategy</a>
            </div>
          </div>
        </li>
        <li class="splide__slide">
          <div class="video-overlay" style="position: relative;">
            <img src="<?php echo base_url(); ?>assets/img/banner.png" alt="" style="width: 100%;">
            <div class="text-overlay">
              <h1 style="font-weight:400;">Comprehensive Financial Services</h1>
              <p class="foot">Empowering businesses with robust financial controls, performance reporting, and strategic financial management.</p>
              <a href="#" class="ban" style="padding:10px 30px;">Explore Our Financial Solutions</a>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </div>


</div>
<div class="mob">
  <div class="video-overlay" style="position: relative;">
    <img src="<?php echo base_url(); ?>assets/img/mobile.png" alt="" style="width: 100%;">
    <div class="text-overlay1" style="WIDTH: 100%;">
      <h1>EXPERT SERVICES</h1>
      <p class="foot">Time bound quality solutions in tune with advance & evolving technologies.</p>
      <a href="#" class="ban">Here's what we offer</a>
    </div>
  </div>

</div>
<style>
  .full-width {
    width: 100%;
  }

  #parallax-container {
    position: relative;
    height: 40vh;
    overflow: hidden;
  }

  #parallax-container1 {
    position: relative;
    height: 40vh;
    overflow: hidden;
  }

  #parallax-container2 {
    position: relative;
    height: 40vh;
    overflow: hidden;
  }

  .parallax-inner {
    position: absolute;
    top: 0;
    left: -380px;
    width: 200%;
    height: 100%;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    transition: transform 0.2s;
  }

  #parallax-container2 .parallax-inner {
    position: absolute;
    top: 0;
    left: -680px;
    width: 200%;
    height: 100%;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    transition: transform 0.2s;
  }

  #parallax-container1 .parallax-inner {
    position: absolute;
    top: 0;
    left: 0;
    right: -380px;
    width: 200%;
    height: 100%;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    transition: transform 0.2s;
  }

  .fusion-builder-row {
    position: relative;
    z-index: 2;
  }

  .fusion-builder-row h1 {
    font-size: 50px;
    color: #fff;
    text-align: center;
    padding-bottom: 20px;
  }


  @media screen and (max-width:680px) {
    .fusion-builder-row h1 {
      font-size: 24px;
      color: #fff;
      padding-bottom: 10px;
    }

    .fusion-builder-row .contiontt p {
      max-width: 100% !important;
    }
  }
</style>
<link href="<?php echo base_url(); ?>assets/css/mainpage.css" rel="stylesheet">

<section id="content" class="full-width p-0">
  <div class="post-content">
    <div class="fusion-fullwidth fullwidth-box" id="parallax-container">
      <div class="parallax-inner" style="background-image: url('<?php echo base_url(); ?>assets/img/expertise1.png');">
      </div>
      <div class="fusion-builder-row fusion-row" style="height:100%;align-items: center;
  display: flex;   justify-content: center;">
        <div class="container">
          <div class="">
            <h1>EXPERTISE</h1>

          </div>
        </div>

      </div>
    </div>
    <!-- Add more content here to enable scrolling -->
  </div>

</section>

<section id="content" class="full-width p-0">
  <div class="post-content">
    <div class="fusion-fullwidth fullwidth-box" id="parallax-container1">
      <div class="parallax-inner" style="background-image: url('<?php echo base_url(); ?>assets/img/india.png');">
      </div>
      <div class="fusion-builder-row fusion-row" style="height:100%;align-items: center;
  display: flex;   justify-content: start;">
        <div class="container">
          <div class="">
            <h1>PAN BHARAT PRESENCE</h1>

          </div>
        </div>

      </div>
    </div>
    <!-- Add more content here to enable scrolling -->
  </div>

</section>
<section id="content" class="full-width p-0">
  <div class="post-content">
    <div class="fusion-fullwidth fullwidth-box" id="parallax-container2">
      <div class="parallax-inner"
        style="background-image: url('<?php echo base_url(); ?>assets/img/peoplestrong1.png');">
      </div>
      <div class="fusion-builder-row fusion-row" style="height:100%;align-items: center;
  display: flex;   justify-content: start;">
        <div class="container">
          <div class="">
            <h1>PEOPLE STRONG</h1>

          </div>
        </div>

      </div>
    </div>
    <!-- Add more content here to enable scrolling -->
  </div>

</section>
<script>

  window.addEventListener('scroll', function () {
    var scrollPosition = window.pageYOffset;
    var parallaxSpeed = 0.3;
    var translateX = scrollPosition * parallaxSpeed;
    document.querySelector('#parallax-container .parallax-inner').style.transform = 'translateX(' + translateX + 'px)';

    document.querySelector('#parallax-container1 .parallax-inner').style.transform = 'translateX(' + -translateX + 'px)';
    document.querySelector('#parallax-container2 .parallax-inner').style.transform = 'translateX(' + translateX + 'px)';
  });

</script>

<section>
  <div class="container mt-md-5 mt-3 pump">
    <div class="row justify-content-between">
      <div class="col-md-6 sm-12">
        <h6 class="foot who">ABOUT US</h6>
        <h1 class="foot" style="font-weight:800;">Who we are?</h1>
        <p style="text-align: justify;">With exceptional professional journey of spanning 33 years, Vinod Singhal & Co LLP has established itself as
          a premier Chartered Accountancy firm, offering a comprehensive suite of Strategical, Financial, Taxation,
          Auditing, and Advisory services. Our esteemed team, consisting of 34 Partners, a cadre of experienced
          professionals and dedicated hardworking staff, represents the epitome of expertise and commitment.</p>
        <p style="text-align: justify;">Vinod Singhal & Co LLP stands as a Bharatiya Firm with an expansive presence across 24 states in Bharat,
          having 32 offices, including our Head Office. Our firm's foundation is fortified by a robust infrastructure
          and cutting-edge technology, ensuring seamless support for the diverse needs of our esteemed clients. </p>
      </div>
      <div class="col-md-5 sm-12 pump">
        <img src="<?php echo base_url(); ?>assets/img/about21.png" width="100%">
      </div>
    </div>
  </div>
</section>
<style>
  .hover-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .column:hover .hover-overlay {
    opacity: 1;
  }

  .h_bb:hover {
    background-image: url('<?php echo base_url(); ?>assets/img/bgg.png');
    background-position: center;
    background-size: cover;
  }

  .sp1 li p {
    padding-top: 10px;
    text-align: center;
  }

  .sp1 li img {
    width: 60px !important;
  }

  .sp1 li {
    text-align: center;
  }
</style>

<section class="mt-3 p-0" style="background-color:#0D4771;">
  <div class="" style="max-width: 80%; margin:auto;">
    <div class="row mt-0 justify-content-between">
      <div class="col-md-6 sm-12 h_bb" style="padding: 5% 4%;">
        <h1 class="foot" style="color:#fff;font-weight:700;">Mission</h1>
        <p class="vision"style="text-align: justify;">To establish as prominent Bhartiya firm with global footprints catering strategic & financial
          services with excellence.</p>
        <p class="vision"style="text-align: justify;">To provide reliable, practical, contemporary & transparent global value-added services in
          strategic & financial domain as per global best practices that are futuristic & scalable without compromising
          on professional standards and regulatory & legal requirements.</p>
        <div class="hover-overlay" style="background-image: url('<?php echo base_url(); ?>assets/img/bgg.png');"></div>
      </div>
      <div class="col-md-6 sm-12 h_bb" style="padding: 5% 4%;">
        <h1 class="foot" style="color:#fff;font-weight:700;">Vision</h1>
        <p class="vision"style="text-align: justify;" >To network competent strategic & financial professionals at all levels (Global, National,
          State, Towns) and mentor them with opportunity & support.</p>
        <p class="vision"style="text-align: justify;">To provide standardised, contemporary, scalable, and implementable solutions in strategic &
          financial domain as per global best practices that is contextual based on the scale, sector & industry to
          which the clients business belongs and is within the legal, ethical, and regulatory framework.</p>
        <div class="hover-overlay" style="background-image: url('<?php echo base_url(); ?>assets/img/bgg.png');"></div>
      </div>
    </div>
  </div>
</section>
<style>
  .cstm_key_people .member_txt {
    color: #fff;
    background-color: rgba(0, 102, 179, .65);
    position: absolute;
    bottom: 0;
    left: 0;
    min-height: 120px;
    width: 100%;
    padding: 6px 12px 10px;
    transition: .4s ease-in-out;
  }

  .cstm_key_people img {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -moz-filter: grayscale(100%);
  }

  .card {
    border-radius: 11.5px;
    padding: 30px;
    color: #0D4771;
  }

  .card:hover {
    background-color: #0D4771;
    color: white;
  }

  .card .image-c img {
    display: block;
  }

  .card .image-c img.hover-image {
    display: none;
  }

  .card:hover .image-c img.original-image {
    display: none;
  }

  .card:hover .image-c img.hover-image {
    display: block;
  }

  .asds .btn-primary {
    background-color: #fff;
    color: #000;
    border: 2px solid #000;
    border-radius: 12px;
    padding: 10px 20px;
  }
</style>
<section>
  <div class="container  pump">

    <h5 class="foot whhh">OFFERINGS</h5>
    <h1 class="foot text-center" style="font-weight: 800;">Our Services</h1>
    <p class="text-center">We offer a wide range of services to organizations in various industries. Our core competence
      lies in providing
      wholesome trustworthy assistance on various statutory financial compliances in the vicinity of utmost ethical &
      professional values.</p>
  </div>
  <div class="container service">
    <div class="row mt-md-5 mt-3">
      <div class="col-md-4 sm-12">
        <div class="card">
          <div class="image-c">
            <img src="<?php echo base_url(); ?>assets/img/approval2.png" class="original-image">
            <img src="<?php echo base_url(); ?>assets/img/approval1.png" class="hover-image">
          </div>
          <div class="content-c" style="min-height: 200px;">
            <h4 class="mt-4" style="font-weight: 600;">TAXATION SERVICES</h4>
            <p>Formulate effective strategies to optimise taxes, implement innovative tax planning strategies and
              effectivelymanage compliance-related requirements.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 sm-12">
        <div class="card">
          <div class="image-c">
            <img src="<?php echo base_url(); ?>assets/img/approval2.png" class="original-image">
            <img src="<?php echo base_url(); ?>assets/img/approval1.png" class="hover-image">
          </div>
          <div class="content-c" style="min-height: 200px;">
            <h4 class="mt-4" style="font-weight: 600;">BUSINESS PROCESS OUTSOURCING</h4>
            <p>Focus is the key & it's only possible when you focus completely on your core competencies and outsource
              non-core business processes to our experts.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 sm-12">
        <div class="card">
          <div class="image-c">
            <img src="<?php echo base_url(); ?>assets/img/approval2.png" class="original-image">
            <img src="<?php echo base_url(); ?>assets/img/approval1.png" class="hover-image">
          </div>
          <div class="content-c" style="min-height: 200px;">
            <h4 class="mt-4" style="font-weight: 600;">FINANCIAL SERVICES</h4>
            <p>Supporting you in future-proofing your business to become risk resilient and risk ready.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-5 text-center"> <a href="<?php echo base_url('Service'); ?>" class="view">View More</a>
      </div>
    </div>

  </div>
</section>


<section style="background-color: #0D4771;">
  <div class=" text-white" style="max-width: 80%;margin:auto;">
    <h1 class="mt-4 pb-4 text-center">Industries We Serve</h1>
    <div class="splide sp1 mt-5" role="group" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="assets/img/icons/agriculture.png" alt="" style="width:90px;">
            <p>Agriculture</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/aviation.png" alt="" style="width:90px;">
            <p>Aviation</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/banking.png" alt="" style="width:90px;">
            <p>Banking</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/beverages.png" alt="" style="width:90px;">
            <p>Beverages</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/bpo.png" alt="" style="width:90px;">
            <p>BPO</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/coal.png" alt="" style="width:90px;">
            <p>Coal</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/contractors.png" alt="" style="width:90px;">
            <p>Contractors</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/co-operatives.png" alt="" style="width:90px;">
            <p>Co-operatives</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/dairy.png" alt="" style="width:90px;">
            <p>Dairy</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/food.png" alt="" style="width:90px;">
            <p>Food</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/gems.png" alt="" style="width:90px;">
            <p>Gems and Jewelry</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/government.png" alt="" style="width:90px;">
            <p>Government</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/highway.png" alt="" style="width:90px;">
            <p>Highway Authorities</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/hotel.png" alt="" style="width:90px;">
            <p>Hotel & Tiurism</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/housing.png" alt="" style="width:90px;">
            <p>Housing</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/import.png" alt="" style="width:90px;">
            <p>Import/Export</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/it.png" alt="" style="width:90px;">
            <p>IT</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/institution.png" alt="" style="width:90px;">
            <p>Institutions</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/insurance.png" alt="" style="width:90px;">
            <p>Insurance</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/manufacturing.png" alt="" style="width:90px;">
            <p>Manaufacturing</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/mining.png" alt="" style="width:90px;">
            <p>Mining</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/ngo.png" alt="" style="width:90px;">
            <p>NGOs</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/nbfc.png" alt="" style="width:90px;">
            <p>NBFCs</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/oil.png" alt="" style="width:90px;">
            <p>Oil & Gas</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/pharmaceuticals.png" alt="" style="width:90px;">
            <p>Pharmaceuticals</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/power.png" alt="" style="width:90px;">
            <p>Power & Electricity</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/professional.png" alt="" style="width:90px;">
            <p>Professionals</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/retail.png" alt="" style="width:90px;">
            <p>Retail</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/services.png" alt="" style="width:90px;">
            <p>Service</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/telecommunication.png" alt="" style="width:90px;">
            <p>Telecommunication</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/textile.png" alt="" style="width:90px;">
            <p>Textiles</p>
          </li>
          <li class="splide__slide">
            <img src="assets/img/icons/water.png" alt="" style="width:90px;">
            <p>Water Supplies</p>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container  pump">

    <h5 class="foot whhh">OUR</h5>
    <h1 class="foot text-center" style="font-weight: 800;">Values</h1>
    <p class="text-center">In every decision, we weigh both short-term and long-term risks and benefits. SWOT Analysis
      of our action helps us to understand and enhance our clients overall growth.</p>

    <div class="row mt-md-5 mt-3 asds" style="width: 100%;">

      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Accountability</button>
      </div>
      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Transparency</button>
      </div>
      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Perfection</button>
      </div>
      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Adding Value</button>
      </div>
      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Independency</button>
      </div>
      <div class="col-md-2 col-6 mt-3">
        <button class="btn btn-primary">Ethical Values</button>
      </div>

    </div>

  </div>
</section>
<style>
  /* Popup container */
  .popup {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Popup content */
  .popup-content {
    background-color: #fefefe;
    margin: auto;
    overflow: hidden;
    border: 1px solid #888;
    width: 80%;

    z-index: 9999999;
    border-radius: 20px;
  }

  /* Close button */
  .close {
    color: #aaa;
    float: right;
    margin-right: 30px;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .sses .row {
    margin-top: 20px;
  }

  @media (max-width:680px) {
    .popup-content {
      overflow: hidden;
      width: 91%;
      max-height: 85vh;
      overflow-y: scroll;
      z-index: 9999999;
    }
  }

  .cstm-key-popup .member_profile {
    display: flex;
    flex-wrap: wrap;
    width: 100%;

  }

  .cstm-key-popup .member_profile .member_profile_left {
    background-color: #eef3fd;
    width: 35%;
    text-align: center;
    padding: 30px;
  }

  .cstm-key-popup .member_profile .member_profile_right {
    background-color: #0066b3;
    width: 65%;
    padding: 40px;
  }

  .cstm-key-popup .member_profile_left a {
    color: #0066b3;
    text-decoration: none;
    font-weight: 600;
  }

  .cstm-key-popup .member_profile_right p {
    color: #fff;
    font-size: 18px;
    line-height: 28px;
    margin-bottom: 30px;
    text-align: justify;
  }

  .cstm-key-popup .member_profile_left a {
    color: #0066b3;
    text-decoration: none;
    font-weight: 600;
  }

  .cstm-key-popup .member_profile_left .list-inline li:first-child {
    margin-left: 0;
  }

  .cstm-key-popup .member_profile_left .list-inline {
    margin: 12px 0;
  }

  .cstm-key-popup .member_profile_left h1 {
    color: #0066b3;
    font-size: 30px;
    line-height: 30px;
    margin-bottom: 7px;
    margin-top: 35px;
    text-transform: uppercase;
    font-weight: 700;
  }

  .cstm-key-popup .member_profile_left img {
    width: 100%;
  }

  .get-to-know.cstm_bg {
    background-image: url(https://asaandassociates.co.in/wp-content/uploads/2020/03/get-know.jpg);
  }

  .get-to-know {
    padding: 90px 0;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    background-image: url(//asaandassociates.co.in/wp-content/themes/asa/css/../images/get-know.jpg);
    min-height: 724px;
    color: #fff;
    background-attachment: fixed;
    width: 100%;
    text-align: center;
  }

  .getto-now-top {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    padding-right: 15px;
    padding-left: 15px;
    width: 100%;
  }

  .get-to-know h2 {
    font-size: 70px;
    line-height: 70px;
    font-weight: 800;
    margin-bottom: 40px;
  }

  .sprite-know {
    background: url(//asaandassociates.co.in/wp-content/themes/asa/css/../images/sprite.png) no-repeat;
    display: inline-block;
    width: 70px;
    height: 70px;
    background-position: -23px -5485px;
    cursor: pointer;
  }

  .cstm_video_section {
    padding: 30px 0;
  }

  .youtabe-mission .modal-dialog {
    max-width: 100%;
    height: 100%;
    margin: auto;
  }

  .youtabe-mission .modal-content {
    height: 100%;
    padding: 10px 60px 10px 10px;
  }

  .youtbe-section {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 70vh;
    padding-right: 60px;
    bottom: 0;
    margin: auto;
    right: 0;
  }

  .youtabe-mission .close {
    right: 18px;
    top: 30px;
  }

  .youtabe-mission .modal-dialog {
    max-width: 1106px
  }

  .youtabe-mission .modal-content {
    border: none;
    background-color: transparent
  }

  .youtbe-section iframe {
    width: 100% !important;
    height: 100%;
    border: none;
  }

  .youtabe-mission .close {
    position: absolute;
    top: 10%;
    right: -340px;
    opacity: 1;
    z-index: 999
  }

  button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
  }

  a.close.disabled {
    pointer-events: none
  }

  .youtabe-mission .close img {
    max-width: 20px
  }
</style>
<div class="get-to-know cstm_bg">
  <div class="container">
    <div class="getto-now-top">
      <h2>GET TO KNOW US</h2>
      <a class="sprite-know" data-toggle="modal" data-target="#exampleModalCenter"></a>
    </div>
  </div>
</div>

<div class="youtabe-mission">
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="https://asaandassociates.co.in/wp-content/themes/asa/images/close.png" alt="img">
        </button>
        <div class="youtbe-section" id="youtube_video_section">
          <video controls style="width: 100%; height: 100%;">
            <source src="assets/vsc.mp4" type="video/mp4">

          </video>
        </div>
      </div>
    </div>
  </div>
</div>





<section class="p-0"
  style="background-image: url('<?php echo base_url(); ?>assets/img/con1.png');    background-size: cover;">
  <div class="container " style="padding: 5% 0;">

    <div class="row justify-content-between align-content-center">
      <div class="col-md-7">
        <p style="color: #fff;">With a strong integration of IT at each and every place, our motive is always to
          digitize the processes including the network and thus we are moving towards creating virtual offices in
          conjunction with our physical locations.</p>
      </div>
      <div class="col-md-4 cca" style="justify-content: center;
    display: flex;
    align-items: center;">
        <a href="<?php echo base_url('Contact'); ?>" class="contact"> Contact us </a>
      </div>
    </div>

  </div>
</section>


<div id="preloader"></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

  // Get all buttons that open a popup
  var buttons = document.querySelectorAll(".partner");

  // Attach click event listeners to each button
  buttons.forEach(function (button) {
    button.onclick = function () {
      var popupId = this.getAttribute("data-popup");
      var popup = document.getElementById(popupId);
      popup.style.display = "block";
    }
  });

  // Get all close elements
  var closes = document.querySelectorAll(".close");

  // Attach click event listeners to each close element
  closes.forEach(function (close) {
    close.onclick = function () {
      var popup = this.closest(".popup");
      popup.style.display = "none";
    }
  });

  // Close popup when clicking outside of it
  window.onclick = function (event) {
    var popups = document.querySelectorAll(".popup");
    popups.forEach(function (popup) {
      if (event.target == popup) {
        popup.style.display = "none";
      }
    });
  }
</script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>



  var splide = new Splide('.sp', {
    perPage: 1,
    rewind: true,

  });

  splide.mount();

  var splide = new Splide('.sp1', {
    perPage: 7,
    perMove: 2,
    rewind: true,
    autoplay: true,
    pagination: false, // Hide pagination
    breakpoints: {
      768: { // Screen width up to 768px (example for tablets and mobiles)
        perPage: 3,
      },
    },
  });

  splide.mount();
</script>


<!-- Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    // Show the modal every time the user visits
    $('#myModal').modal('show');

    // Custom close button functionality
    $('.modal .close').click(function () {
      $('#myModal').modal('hide');
    });
  });
</script>