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

  .contact {
    color: black;
    ;
  }
</style>

<main id="main">
  <div class="mainimg" style="position: relative;background:black;">
    <img src="assets/img/contact.jpg" alt width="100%" style="    opacity: 0.4;">
    <div class="over" style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
      <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">Article</span></h1>
    </div>
  </div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row mt-md-5 mt-3 justify-content-center pb-5">

        <div class="col-md-10 mt-5 mt-lg-0" data-aos="fade-left">

          <form action="artical_mail" method="post" role="form" class="php-email-form"enctype="multipart/form-data">

            <div class="btt pb-5">
              <button class="btn btn-primary" style="padding: 10px 20px;background-color: #3a89c9;">Read
                Rules and Regulations</button>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth(dd-mm-yyyy)*"required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Father Name*"required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="contact_1" id="contact_1" placeholder="Your contact no1.*"required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="contact_2" id="contact_2" placeholder="Your contact no2.*"required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="res_add" id="res_add" placeholder="Residential Address*"
                  required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="cro_add" id="cro_add" placeholder="CRO No.*" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="References" id="References" placeholder="References">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="whe_other" id="whe_other"
                  placeholder="Whether pursuing any other Course*"required>
              </div>
              <div class=" form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="ca_att" id="ca_att"
                  placeholder="C.A Final Attempt due in*"required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-3 text-start">
                <h5>ITT/ OT *</h5>
                <div class="form-group">

                  <label class="radio-inline" for="Gender-0">
                    <input type="radio" name="Gender" id="itt" value="1" onchange="checkiit()">
                    Yes
                  </label>
                  <label class="radio-inline pl-2" for="Gender-1" style="padding-left: 10px;">
                    <input type="radio" name="Gender" id="itt1" value="0" onchange="checkiit()">
                    No
                  </label>
                </div>

              </div>
              <div class="col-md-6 form-group mt-3 mt-md-3 text-start">
                <h5>Vehicle Owned * </h5>
                <div class="form-group">

                  <label class="radio-inline" for="vehicle-0">
                    <input type="radio" name="vehicle" id="vhii" value="1" onchange="checkiit()">
                    Yes
                  </label>
                  <label class="radio-inline pl-2" for="vehicle-1" style="padding-left: 10px;">
                    <input type="radio" name="vehicle" id="vhii1" value="0" onchange="checkiit()">
                    No
                  </label>
                </div>



              </div>
              <div class=" form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="dl_no" id="dl_no" placeholder="DL No">
              </div>
              <div class=" form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="inter_area" id="inter_area"
                  placeholder="Interested Area of working">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="inter_area" id="inter_area"
                  placeholder="Any limitation for out of station">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="Medium" id="Medium" placeholder="Medium">
              </div>


              <div class="form-group mt-3">
                <h5 class=" text-start">
                  Educational Qualification
                </h5>
                <div class="table-responsive" style="width:100%">
                  <table width="100%" style="border:1px solid;overflow:scroll;" class="tbl1">
                    <tbody>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">Sr
                          No</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">EXAMINATION</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">SCHOOL/COLLEGE</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">BOARD/UNIVERSITY
                        </td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">YEAR</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">PERCENTAGE</td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">1</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">INTERMEDIATE</td>
                        <td width="19%" style="border:1px"><input autocomplete="off" class="form-control" id="School1"
                            name="School1" type="text" value fdprocessedid="zkhu3"></td>
                        <td width="19%" style="border:1px;"><input autocomplete="off" class="form-control" id="Board1"
                            name="Board1" type="text" value fdprocessedid="36sl1"></td>
                        <td width="19%" style="border:1px;"><input autocomplete="off" class="form-control" id="Year1"
                            name="Year1" type="text" value fdprocessedid="29265"></td>
                        <td width="19%" style="border:1px;"><input autocomplete="off" class="form-control"
                            id="Percentage1" name="Percentage1" type="text" value fdprocessedid="hhitug"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center"></td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">GROUP
                          1</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School2" name="School2" type="text" value fdprocessedid="se9p4a">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board2" name="Board2" type="text" value fdprocessedid="wuwr5"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year2" name="Year2" type="text" value fdprocessedid="0zd8wa"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage2" name="Percentage2" type="text" value
                            fdprocessedid="mefc2r"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center"></td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">GROUP
                          2</td>
                        <td width="19%" style="border:1px ;text-align:center"><input autocomplete="off"
                            class="form-control" id="School3" name="School3" type="text" value fdprocessedid="wxtser">
                        </td>
                        <td width="19%" style="border:1px ;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board3" name="Board3" type="text" value fdprocessedid="9dh31i">
                        </td>
                        <td width="19%" style="border:1px ;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year3" name="Year3" type="text" value fdprocessedid="1rxnmp"></td>
                        <td width="19%" style="border:1px ;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage3" name="Percentage3" type="text" value
                            fdprocessedid="n6sl48"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">2</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">FOUNDATION</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School4" name="School4" type="text" value fdprocessedid="0lwivo">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board4" name="Board4" type="text" value fdprocessedid="9gx6k8">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year4" name="Year4" type="text" value fdprocessedid="b9zajv"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage4" name="Percentage4" type="text" value
                            fdprocessedid="z66lba"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">3</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">GRADUATION</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School5" name="School5" type="text" value fdprocessedid="ax64g">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board5" name="Board5" type="text" value fdprocessedid="p1v0g"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year5" name="Year5" type="text" value fdprocessedid="kgoxar"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage5" name="Percentage5" type="text" value
                            fdprocessedid="i5fc6t"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold"></td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">I</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School6" name="School6" type="text" value fdprocessedid="cgydbk">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board6" name="Board6" type="text" value fdprocessedid="skd8xt">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year6" name="Year6" type="text" value fdprocessedid="nynmpb"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage6" name="Percentage6" type="text" value
                            fdprocessedid="0kzmye"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold"></td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">II</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School7" name="School7" type="text" value fdprocessedid="oswgz9p">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board7" name="Board7" type="text" value fdprocessedid="cum93a">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year7" name="Year7" type="text" value fdprocessedid="s5wnb0q"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage7" name="Percentage7" type="text" value
                            fdprocessedid="btoiz"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold"></td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">III</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School8" name="School8" type="text" value fdprocessedid="hid7zs">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board8" name="Board8" type="text" value fdprocessedid="4i0xng">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year8" name="Year8" type="text" value fdprocessedid="jspr2j"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage8" name="Percentage8" type="text" value
                            fdprocessedid="fbpt7u"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">4</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">CLASS
                          XII</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School9" name="School9" type="text" value fdprocessedid="nnf5r">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board9" name="Board9" type="text" value fdprocessedid="sht52p">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year9" name="Year9" type="text" value fdprocessedid="8wjgan"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage9" name="Percentage9" type="text" value
                            fdprocessedid="2ghwpq"></td>
                      </tr>
                      <tr style="border:1px solid;width:100%">
                        <td width="5%" style="border:1px solid;text-align:center;font-weight: bold">5</td>
                        <td width="19%" style="border:1px solid;text-align:center;font-weight: bold">CLASS
                          X</td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="School10" name="School10" type="text" value fdprocessedid="fjf91v">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Board10" name="Board10" type="text" value fdprocessedid="n1rn5m">
                        </td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Year10" name="Year10" type="text" value fdprocessedid="ymliy"></td>
                        <td width="19%" style="border:1px;text-align:center"><input autocomplete="off"
                            class="form-control" id="Percentage10" name="Percentage10" type="text" value
                            fdprocessedid="y32228"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="form-group mt-3">
                <h5 class="text-start">
                  Family Details
                </h5>
                <table id="tbl" width="100%" style="border:1px solid;">
                  <tbody>
                    <tr style="border:1px solid;width:100%">
                      <td width="25%" style="border:1px solid;text-align:center;font-weight: bold">Name</td>
                      <td width="25%" style="border:1px solid;text-align:center;font-weight: bold">Age</td>
                      <td width="25%" style="border:1px solid;text-align:center;font-weight: bold">Relation</td>
                      <td width="25%" style="border:1px solid;text-align:center;font-weight: bold">Occupation</td>
                    </tr>
                    <tr style="border:1px solid;width:100%">
                      <td width="19%"><input autocomplete="off" class="form-control" id="Name1" name="Name1" type="text"
                          value="" fdprocessedid="5q1eaf"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Age1" name="Age1" type="text"
                          value="" fdprocessedid="ymuu7n"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Relation1" name="Relation1"
                          type="text" value="" fdprocessedid="rf0hq"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Occupation1" name="Occupation1"
                          type="text" value="" fdprocessedid="jjdl7h"></td>
                    </tr>
                    <tr style="border:1px solid;width:100%">
                      <td width="19%"><input autocomplete="off" class="form-control" id="Name2" name="Name2" type="text"
                          value="" fdprocessedid="mxbmgv"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Age2" name="Age2" type="text"
                          value="" fdprocessedid="4g2rzr"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Relation2" name="Relation2"
                          type="text" value="" fdprocessedid="eq5lwl"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Occupation2" name="Occupation2"
                          type="text" value="" fdprocessedid="zh9oe4"></td>
                    </tr>
                    <tr style="border:1px solid;width:100%">
                      <td width="19%"><input autocomplete="off" class="form-control" id="Name3" name="Name3" type="text"
                          value="" fdprocessedid="9u7h4o8"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Age3" name="Age3" type="text"
                          value="" fdprocessedid="hd2ug"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Relation3" name="Relation3"
                          type="text" value="" fdprocessedid="kkm1sp"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Occupation3" name="Occupation3"
                          type="text" value="" fdprocessedid="8gjnto"></td>
                    </tr>
                    <tr style="border:1px solid;width:100%">
                      <td width="19%"><input autocomplete="off" class="form-control" id="Name4" name="Name4" type="text"
                          value="" fdprocessedid="625kgd"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Age4" name="Age4" type="text"
                          value="" fdprocessedid="rdqkf"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Relation4" name="Relation4"
                          type="text" value="" fdprocessedid="nlovy"></td>
                      <td width="19%"><input autocomplete="off" class="form-control" id="Occupation4" name="Occupation4"
                          type="text" value="" fdprocessedid="ganztb"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group mt-3 ">
                <input type="text" class="form-control" name="any_ex" id="any_ex"
                  placeholder="Any Extra co-curricular activities* " required>
              </div>
              <div class="form-group mt-3 text-start">
                <label class="radio-inline" for="Gender-0">
                  <input type="checkbox" name="RRCheck" id="RR" value="1" onchange="checkRR()">
                  I declare that the above mentioned facts are true and correct to the best of my knowledge and belief.
                </label>
              </div>
              <div class="form-group mt-3 text-start">
                <label class="radio-inline" for="Gender-0">
                  <input type="checkbox" name="Gender" id="dec" value="1" onchange="checkdec()">
                  I also assure that I have read all the rules and regulations attached to this form and confirm that I
                  will
                  abide by all the terms mentioned therein.
                </label>
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
  </section><!-- End Contact Section -->

  <!-- ======= F.A.Q Section ======= -->

</main><!-- End #main -->