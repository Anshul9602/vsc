<style>
    .mainb {
        background-image: url(assets/img/ab.jpg);
        background-position: 50% 235%;
        background-size: cover;
        height: 50vh;
    }

    .section-title-w {
        padding-bottom: 40px;
        margin-top: 30vh;
    }

    .section-title-w h2 {
        color: #f1f1f1;
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        margin: 0 0 5px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .section-title-w p {
        color: #fff;
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
    }

    .review-box {

        display: none !important;
    }

    ::marker {
        display: none !important;
    }
</style>
<div class="mainimg" style="position: relative;background:black;">
    <img src="assets/img/news.jpg" alt="" width="100%" style="    opacity: 0.4;">
    <div class="over" style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
        <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">Grievanace</span></h1>
    </div>
</div>
<section>
    <div class="container">

        <h1 class="text-center">Grievanace</h1>
        <div class="row mt-4 justify-content-center">
            <p class="col-md-8 text-center" style="">Welcome to our grievance page. Please share your concerns and
                feedback for Founder Partner CA Vinod Kumar Singhal here. Your grievances will be handled confidentially
                and can remain anonymous if you prefer. Kindly refrain from disclosing personal details for anonymous
                submissions. We appreciate your cooperation.</p>
        </div>
    </div>
</section>
<section class="pt-0">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="contact">

                    <form action="G_mail" method="post" role="form" class="php-email-form">
                        <div class="row">

                            <div class="form-group mt-3">
                                <h6 class="text-black text-start mt-3">Message</h6>
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="col-md-12 form-group mt-3 mt-md-0">

                                <h6 class="text-black text-start mt-3">Attachment Upload </h6>
                                <input type="file" class="form-control-file"
                                    style="    border: 1px solid #ced4da;    width: 100%;padding:10px 20px;"
                                    id="exampleFormControlFile1">

                            </div>
                        </div>


                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank
                                you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send
                                Message</button></div>
                    </form>

                </div>
            </div>
        </div>


    </div>
</section>