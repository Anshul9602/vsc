<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<script src="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
  "></script>
<link href="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
  " rel="stylesheet">

<style>
    .body {
        overflow-x: hidden;
    }

    .card1 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .splide__slide {
        margin: 1px 20px;
    }

    .mob11 {
        display: none !important;
    }

    @media (max-width: 767px) {
        .desk11 {
            display: none !important;
        }

        .mob11 {
            display: flex !important;
        }

        .neww .mt-2 {
            text-align: start;
        }

        .mtt {
            font-size: 16px;
        }

    }

    .ttb .nav-item .active {
        background-color: #3a89c9;
        color: #fff !important;
    }

    .ttb .nav-item .nav-link {
        text-align: center;
        font-size: 18px;
        color: #000;
    }

    .margs {
        margin-bottom: 20px;
    }
</style>
<div class="mainimg" style="position: relative;background:black;">
    <img src="assets/img/gallery.png" alt="" width="100%" style="    opacity: 0.4;">
    <div class="over" style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
        <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">Gallery</span></h1>
    </div>
</div>
<div class="container ttb mt-5">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" style="width: 100%;max-width:50%;">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Photos</a>
        </li>
        <li class="nav-item" style="width: 100%;max-width:50%;">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Videos</a>
        </li>

    </ul>
    <!-- Tab content -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h4 class="mt-4">PRAYAS</h4>
            <div class="row">

                <div class="col-md-3 sm-12 margs">
                    <img src="assets/img/prayas/p2.JPG">
                </div>


                <div class="col-md-3 sm-12 margs">
                    <img src="assets/img/prayas/p7.JPG">
                </div>



                <div class="col-md-3 sm-12 margs">
                    <img src="assets/img/prayas/p12.JPG">
                </div>
                <div class="col-md-3 sm-12 margs">
                    <img src="assets/img/prayas/p13.JPG">
                </div>
                <div class="col-md-3 sm-12 margs">
                    <img src="assets/img/prayas/p11.JPG">
                </div>


            </div>
        </div>


        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h4 class="mt-4">PRAYAS</h4>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-3">
                    <video controls class="w-100">
                        <source src="<?php echo base_url('assets/img/videos/myvideo.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <video controls class="w-100">
                        <source src="<?php echo base_url('assets/img/videos/myvideo1.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

    </div>


</div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>