<style>
  .fusion-builder-row {
    position: relative;
    z-index: 2;
  }

  .fusion-builder-row h1 {
    font-weight: 600;
    font-size: 50px;
    color: #fff;
    padding-bottom: 20px;
  }

  .fusion-text {
    color: white;
    text-align: center;
    padding: 20px;
  }

  .cstm_key_people .member_txt {
    color: #fff;
    background-color: rgba(0, 102, 179, .65);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    min-height: 92px;
    padding: 6px 12px 10px;
    transition: .4s ease-in-out;
  }

  .cstm_key_people img {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -moz-filter: grayscale(100%);
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

    .cstm_key_people .member_txt {
      text-align: start;
      width: 100%;
      padding: 10px !important;
      transition: .4s ease-in-out;
    }

    .cstm_key_people .member_txt h5 {
      font-size: 16px;
    }

    .cstm_key_people .member_txt span {
      font-size: 14px;
    }
  }
</style>
<style>
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
      font-size: 3em;
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
</style>
<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">



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
</style>

<div id="popup1" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/vinod.jpg">
        </figure>
        <h1>VINOD KUMAR SINGHAL</h1>
        <p><b>FCA, DIRM(ICAI), GST(ICAI), LLB, IFRS
          (ICAI), FAFD, Start-Up (ICAI),Certificate
          course on Overseas Outsourcing
          Services (US Market)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Vinod Kumar Singhal, Founder Partner of Vinod Singhal & Co LLP has 30+ years standing in the financial fraternity. He excels in discerning client requirements and translating them into successful outcomes. He is strategist who consults organizations and professionals on planning, positive leadership, coordination, seamless execution, and monitoring.<br><br> His non-traditional approach towards his profession has resulted in growth of the firm in terms of people, services, and network. He believes in stabilizing and scaling the prospects to best possible outcome. Demonstrating mastery in matters related to Business Process Outsourcing, he has played a pivotal role in diversifying the firm's service portfolio beyond traditional audit and taxation to numerous value-added services. <br><br>As a pioneering entrepreneur and an informed investor, he believes in encouraging professionals through the VSC network into entrepreneurship development. He supports them through resources and insightful guidance. His visionary thoughts have led Vinod Singhal & Co LLP to establish itself as a Bhartiya firm with a global perspective. The firm has established itself as a pan India firm under his effective & encouraging leadership and positive guidance. He believes in creating long-term relations with clients and employees alike. To achieve this, he has given ‘Quality and Value addition with integrity’ as a mantra to be followed pervasively by the firm.

<br><br>
          Since over two decades, Vinod has obtained rich experience in almost every field, such as- Taxation Laws, Company Law, Auditing, Corporate Finance liaison, Non-Residents Exchange control regulations services relating to setting up of liaison/project office in India, etc. He handles various issues with equal ease but his core expertise lies in Financial & Industrial Consultancy. His core area of work is related to Industrial Consultancy, such as set up of new business ventures, SEZ related work, food processing units, cold storages etc. He has also mastered the art of handling matters related to Business Process Outsourcing.
          <br><br>
          
          Besides, he has been a catalyst in expanding the portfolio of the firm’s services from the traditional audit and taxation to a range of services like representative office, consultancy for start up ventures of Non resident Indians in India, project finance etc.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup2" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/hem.jpg">
        </figure>
        <h1>HEMANT KUMAR BANSAL</h1>
        <p><b>FCA, DISA, IP, Concurrent Audit (ICAI), Certificate Course on
          preparation of Appeals, Drafting of
          Deeds, & Documents and
          Representation before Appellate
          Authorities, Start-Up (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Hemant Bansal, serving as the managing Partner of VSC, plays a crucial role as the in-charge of the Jaipur
          Branch Office, collaborating closely with network branches. </p>

        <p>With a career spanning over three decades, he has amassed extensive experience in the corporate sector,
          Auditing, Banking, Project Finance, Direct Taxation, International Taxation, FEMA, Startups, and Management
          Consultancy.</p>

        <p>His strength lies in his unwavering commitment to integrity and the delivery of client-satisfying services.
          His vision has transformed the entire practice into a platform for quality-driven service in the industry.
          Demonstrating leadership qualities, he has been at the forefront of articulating the group's philosophy and
          values, emphasizing a team-building approach.</p>
          <p>
As a seasoned professional, Hemant brings a wealth of knowledge and experience to the table, ensuring that clients receive top-notch services tailored to their unique needs. His dedication to maintaining the highest standards of professionalism and fostering a collaborative team environment result in delivering quality & timely assignments.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup3" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/raj.jpg">
        </figure>
        <h1>RAJ NARAYAN PALSANIYA</h1>
        <p><b>FCA, MIA (Florida)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Raj Narayan Palsania have rich experience in budgeting and costing matters. Known for his adept presentation
          skills when dealing with facts and figures, he primarily focuses on Cost Management Consultancy, demonstrating
          a keen understanding of how to optimize costs in the most advantageous manner. </p>

        <p>His approach involves adopting measures that align seamlessly with the entity's structure, ensuring a
          comprehensive and tailored cost-cutting strategy.</p>

        <p>As a seasoned professional, he continues to play a vital role in guiding organizations toward sustainable
          financial practices and optimal resource allocation.</p>
        <p>He has worked extensively in the cement and textiles industries. His profound insights and strategic approach
          contribute significantly to the success of cost management and budgeting initiatives.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup4" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/as.jpg">
        </figure>
        <h1>AS SHISHODIA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>A S Shishodia has an extensive corporate work history with a specialized focus in the dynamic field of
          Insurance. </p>

        <p>With a remarkable career spanning over 33 years, he dedicated a significant tenure of his professional
          journey to serving the prestigious Oriental Insurance Company Limited, where he ascended to the position of
          Deputy General Manager before retiring.</p>

        <p>A S Shishodia's core area of expertise lies in Risk Management and Consultancies, where he has cultivated a
          profound understanding through his extensive experience in the insurance sector.</p>
        <p>His tenure at Oriental Insurance Company Limited afforded him the opportunity to navigate diverse
          responsibilities and contribute significantly to the strategic management of risk within the organization.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup5" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/sunil1.jpg">
        </figure>
        <h1>SUNIL KUMAR MITTAL</h1>
        <p><b>FCA, DISA, Concurrent Audit (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Sunil Kumar specializes in conducting Management and Internal Audits and is adept at reviewing internal
          controls, as well as designing robust Internal Control Systems.</p>

        <p>His proficiency extends to diverse areas, including due-diligence studies, navigating company law matters,
          conducting project feasibility studies, and addressing Accounting Matters in accordance with Inadian
          Accounting
          Guidelines.</p>

        <p>Among his notable skills is his ability to address critical issues for clients, such as GST matters,
          Certifications, the affairs of Not-for-Profit Organizations, and the strategic design of Investment
          Portfolios. </p>
        <p>He brings forth a wealth of experience as a Partner who have worked with diverse industries and through
          Internal audit assignments has consulted various organizations in optimal manner to reduce costs, curb loss,
          and implement better controls.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup6" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/sandeep.jpg">
        </figure>
        <h1>SANDEEP KUMAR AGARWAL</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Sandeep Kumar Agarwal brings a wealth of professional expertise to the table as his extensive experience
          spans across the landscape of PSU/Govt. Audits, with a notable footprint covering the entirety of India.</p>

        <p>Furthermore, Sandeep has established himself as a trusted consultant within the construction sector,
          showcasing a profound understanding of its intricate dynamics. His consultancy services encompass a spectrum
          of activities, including financial analysis, risk management, and strategic planning tailored to meet the
          unique challenges and requirements of the construction industry.</p>

        <p>Sandeep's commitment to professional growth and delivering top-notch services reflects in his multifaceted
          skill set and deep industry knowledge.</p>
        <p>As a Fellow Member of ICAI, he continues to contribute significantly to the financial and consultancy
          domains, reinforcing his status as a respected professional in the field.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup7" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/shyam.jpg">
        </figure>
        <h1>SHYAM LAL SHISHODIA</h1>
        <p><b>FCA, LLB, Concurrent Audit (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Shyam Lal Shishodia stands out as a seasoned professional with extensive expertise that spans across various
          facets of the financial landscape, including Accounting, Auditing, and Direct & Indirect Taxation.</p>

        <p>In addition to his foundational skills, Shyam Lal Shishodia possesses advanced knowledge in project financing,
          project planning, and tax management. </p>

        <p>His proficiency extends to the meticulous finalization of balance sheets and the precise computation of tax
          liabilities, ensuring compliance and accuracy in the filing of returns for individuals, proprietary
          businesses, private limited concerns, and NGOs.</p>
        <p>A thorough understanding of indirect taxation matters, contributes to his comprehensive skill set. His
          commitment to staying well-versed in the evolving financial landscape underscores his dedication to providing
          clients with informed and effective financial solutions. He possesses a keen awareness of practical
          considerations along with theoretical updates, making him well-equipped to handle real-world taxation
          challenges.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup8" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/shiv.jpg">
        </figure>
        <h1>SHIVANI GUPTA</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>A trailblazer in her own right, Shivani Gupta earned the distinction of being the First Woman Chartered
          Accountant from her district, Sri Ganganagar, in 1998.</p>

        <p>Currently at the helm of our Delhi branch, she brings to the table a wealth of experience, particularly in
          the domain of CAG - PSU/Govt. Audits. Her leadership role underscores her ability to navigate the intricacies
          of audits within the public sector, showcasing her strategic insights and management skills.</p>

        <p>Her expertise extends to her core areas of specialization, which include conducting Special Audits,
          Investigation Audits, and PF Trust Audits on a nationwide scale. </p>

        <p>Her profound understanding of these specialized audit domains positions her as a subject matter expert,
          making her an invaluable asset to clients seeking meticulous and comprehensive audit services.</p>
          <p>As the head of our Delhi branch, Shivani continues to exemplify a commitment to excellence, high ethical standards, and a results-oriented approach. Her leadership not only strengthens the position of VSC in the market but also reflects her unwavering dedication to providing top-tier audit services across diverse sectors and geographies.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup9" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/dinesh.jpg">
        </figure>
        <h1>DINESH KUMAR PRADHAN</h1>
        <p><b>FCA, ISA (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Dinesh Pradhan has a standing that is marked by extensive experience in the specialized domains of PSU/Govt.
          Audits and consultancy within the dynamic Power sector.</p>

        <p>His expertise encompasses a deep understanding of the complex loan structures facilitated by external
          financial institutions, including the World Bank and ADB. Moreover, he possesses an in-depth knowledge of the
          financial intricacies involved in State Government loans from these global financial institutions, along with
          a comprehensive grasp of similar transactions with domestic institutions.</p>

        <p>In the realm of PSU/Govt. Audits, Dinesh showcases a commitment to upholding the highest standards of
          financial scrutiny and accountability. </p>

        <p>His seasoned approach to audits within the public sector underscores his ability to navigate complex
          regulatory landscapes and deliver meticulous and comprehensive audit services. </p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup10" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/rich.jpg">
        </figure>
        <h1>RICHA PANDYA</h1>
        <p><b>FCA, CISA (ISACA), DISA, CIA (IIA), GST(ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Richa Pandya assumes responsibility for the dynamic domains of Risk Advisory and Audits, showcasing her
          versatile skill set and ability to navigate complex risk landscapes.</p>

        <p> With a rich professional journey spanning over two decades, Richa has garnered extensive experience in
          conducting internal audits, process/internal control reviews, fraud investigations, information systems audit,
          application audits and the formulation of Standard Operating Procedures (SOPs).</p>

        <p>Her portfolio includes engagements with numerous large Indian and global companies, a testament to her
          proficiency and versatility in handling diverse audit and advisory responsibilities. </p>

        <p>Having previously contributed to the renowned firm PricewaterhouseCoopers (PWC) for 10 years, Richa brings a
          wealth of insights from her experiences in a global professional services environment. </p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup11" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/kk-sodhani.jpg">
        </figure>
        <h1>KRISHAN KUMAR SODHANI</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Krishna Kumar (KK) Sodhani, with a dynamic professional journey leverages a robust background in financial
          services, having served the prestigious HDFC Bank for nearly a decade before transitioning to private
          practice.</p>

        <p>In his current capacity, he assumes a pivotal role overseeing an array of private audits, leveraging his
          in-depth understanding of financial intricacies and regulatory landscapes.</p>

        <p>His extensive experience in the banking sector has uniquely positioned him to take charge of bank audits,
          where he applies his comprehensive knowledge and insights. </p>

        <p>His tenure at HDFC Bank has honed his skills in risk assessment, internal controls, and financial management,
          making him an invaluable asset in the field of Audit and Assurance.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup12" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/pratek.jpg">
        </figure>
        <h1>PRATEEK GOYAL</h1>
        <p><b>FCA, LCS, Concurrent Audit (ICAI), FAFD(ICAI), IndAS (ICAI),
          StartUp (ICAI), CSR (ICAI), AML (ICAI),
          Certificate Course on Public Finance
          and Government Accounting (ICAI),
          Certificate course on Overseas
          Outsourcing Services (US Market)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Prateek Goyal serves as the National Head of Strategy, Research & Development, and Business Development at our organisation, where he spearheads initiatives to drive innovation, strategic growth, and business expansion across diverse sectors. With a keen eye for emerging trends and a robust understanding of market dynamics, Prateek plays a pivotal role in shaping the organisation’s long-term vision and strategic direction.<br><br>
          In his current role, Prateek leads a multidisciplinary team responsible for developing and executing strategic plans that align with the organisation’s goals. His expertise in research and development enables the organisation to stay ahead of the curve, fostering a culture of continuous improvement and innovation. By identifying new business opportunities and optimising existing processes, he ensures that the organisation remains competitive and agile in an ever-evolving marketplace.<br><br> Prateek possesses a comprehensive understanding of corporate governance and regulatory compliance. In his capacity as the Audit In-charge, he assumes a pivotal role in overseeing a diverse range of audits. His primary focus lies in managing assignments related to Governments, Public Sector Undertakings (PSUs), Multinational Corporations (MNCs), and various other entities on a nationwide scale. His adept handling of these complex audit assignments underlines his proficiency in navigating intricate financial landscapes and ensuring compliance with regulatory standards.<br><br>
          Prateek's expansive skill set, coupled with his commitment to staying abreast of emerging trends and regulations, positions him as a seasoned professional capable of delivering high-quality audit services across diverse sectors and geographies. Additionally, he has acted as a driving force in expanding the VSC network, managing it, and empaneling the firm with various designated bodies. His leadership in R&D efforts further strengthens the organisation’s ability to innovate and grow.<br><br>
          Prateek's leadership is marked by his ability to build strong relationships with stakeholders, drive cross-functional collaboration, and deliver results that exceed expectations. His strategic acumen and business foresight have been instrumental in the successful execution of several high-impact projects, contributing significantly to the organisation’s growth trajectory.<br><br>
          Prateek brings a wealth of experience and a deep understanding of the challenges and opportunities within the industry. His passion for innovation and commitment to excellence make him a key asset to our leadership team.

</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup13" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/mukesh.jpg">
        </figure>
        <h1>MUKESH KUMAR AGARWAL</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Mukesh Kumar Agarwal brings a wealth of experience to the domains of Internal Audit and Statutory Audit.</p>

        <p>With a robust professional background, Mukesh has showcased versatility and proficiency in conducting
          comprehensive financial reviews and ensuring compliance with statutory regulations.

        </p>

        <p>In his capacity as the in-charge of our Kolkata branch, Mukesh assumes a pivotal leadership role, overseeing
          and managing a diverse portfolio of financial engagements. </p>

        <p>His expertise encompasses the meticulous execution of Internal Audits and Statutory Audits, where he applies
          his in-depth knowledge and experience to uphold the highest standards of financial accountability and
          adherence to regulatory frameworks.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup14" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/rakesh.jpg">
        </figure>
        <h1>RAKESH KUMAR JAIN</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Rakesh Kumar Jain brings a wealth of experience to the realms of Internal Audit and Statutory Audit, among
          other financial disciplines.</p>

        <p>With a career dedicated to ensuring financial compliance and accuracy, Rakesh's core area of expertise lies
          in Goods and Services Tax (GST). </p>

        <p>His specialized knowledge in GST is backed by an impressive tenure of three years working with the
          Chhattisgarh State GST Department. This hands-on experience has afforded him a nuanced understanding of the
          intricacies and evolving landscape of GST regulations, positioning him as a go-to professional in this
          specialized domain. </p>

        <p>Rakesh remains dedicated to delivering client-centric solutions, grounded in his comprehensive understanding
          of financial regulations and GST matters.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup15" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/nandan.jpg">
        </figure>
        <h1>NANDAN MOTILAL SIRSAT</h1>
        <p><b>FCA, DISA, Concurrent Audit (ICAI), GST (ICAI), Valuations
          (ICAI), Certificate Course -Co-operatives</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Nandan Sirsat has a career spanning over eight years, Nandan has amassed invaluable experience in various
          audits and assurance services.</p>

        <p>In his role as the in-charge of our Goa Branch, Nandan assumes a leadership position overseeing diverse
          financial engagements. His responsibilities include orchestrating and managing a spectrum of audits, ensuring
          compliance with regulatory standards, and delivering high-quality assurance services.</p>

        <p>His proficiency in Information System Audits and Concurrent Audits aligns with his commitment to upholding
          the highest standards of financial scrutiny and internal control.</p>

        <p>Nandan's accreditation as an ICAI certified Valuer further underscores his ability to provide accurate and
          reliable valuation services, contributing to the comprehensive financial solutions offered by our
          organization.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup16" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/rekesh.jpg">
        </figure>
        <h1>NANDAN MOTILAL SIRSAT</h1>
        <p><b>FCA, ISA(ICAI), Concurrent Audit (ICAI), Valuation (ICAI), CGST (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Nandan Sirsat has a career spanning over eight years, Nandan has amassed invaluable experience in various
          audits and assurance services.</p>

        <p>In his role as the in-charge of our Goa Branch, Nandan assumes a leadership position overseeing diverse
          financial engagements. His responsibilities include orchestrating and managing a spectrum of audits, ensuring
          compliance with regulatory standards, and delivering high-quality assurance services.</p>

        <p>His proficiency in Information System Audits and Concurrent Audits aligns with his commitment to upholding
          the highest standards of financial scrutiny and internal control.</p>

        <p>Nandan's accreditation as an ICAI certified Valuer further underscores his ability to provide accurate and
          reliable valuation services, contributing to the comprehensive financial solutions offered by our
          organization.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup17" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/manish.jpg">
        </figure>
        <h1>MANISH KHANDELWAL</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Manish Khandelwal currently spearheads audit-related assignments for public & private sector clients,
          showcasing his proficiency in delivering meticulous and high-quality financial scrutiny services.</p>

        <p>Manish's primary area of specialization lies in Government audits and consultancies, where he has
          demonstrated exceptional competence.</p>

        <p>His ability to navigate the intricacies of governmental financial systems and regulations has contributed
          significantly to the successful execution of audits in this sector.</p>

        <p>With a commitment to upholding the highest standards of financial scrutiny and internal control, Manish plays
          a pivotal role in ensuring the accuracy and compliance of audit processes.</p>
        <p>His proficiency in audit methodologies and regulatory landscapes positions him as a trusted professional
          capable of delivering precise and insightful financial services to clients.</p>
        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup18" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/rahul.jpg">
        </figure>
        <h1>RAHUL KUMAR SHRIVASTWA</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Rahul Kumar Shrivastwa brings a wealth of expertise to the domains of Internal Audit and Statutory Audit. With a specialised focus on accounting and auditing for Government departments and Urban Local Bodies (ULBs), Rahul's professional journey is marked by his deep understanding of the intricate financial structures within these entities.<br><br>
          In his current role as the National Head of Government Accounting and Practice Head at Patna, Rahul assumes the pivotal responsibility of overseeing and managing a diverse spectrum of financial engagements. Rahul's subject matter expertise in government accounting is invaluable in navigating the unique challenges and regulatory intricacies associated with this specialised field. His ability to lead complex financial engagements with meticulous attention to detail has earned him recognition as a trusted professional in the sector.<br><br>
          His leadership at the Patna branch is characterised by a commitment to excellence, where he ensures that all audits are conducted with precision and in strict compliance with relevant standards and regulations.<br><br>
          Rahul continues to contribute significantly to the organisation, driving rigorous audit practices that uphold the highest standards of financial accountability and transparency.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup19" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/manoj.jpg">
        </figure>
        <h1>MANOJ SURAJMAL BOKADIA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Manoj Bokadia brings a wealth of professional expertise to the areas of Internal Audit and Statutory Audit.
          His commitment to excellence is reflected in his extensive experience in navigating the complexities of
          financial scrutiny practices across various industries.</p>

        <p>In his leadership role as the in-charge of our Mumbai branch, Manoj oversees and manages a diverse portfolio
          of financial engagements.</p>

        <p>His responsibilities extend beyond traditional audits, encompassing strategic financial oversight within the
          dynamic and bustling business landscape of Mumbai. His core area of expertise lies in bank-related audits,
          demonstrating a balanced understanding of the unique challenges and regulatory intricacies associated with the
          financial sector.</p>


        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup20" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/prince.jpg">
        </figure>
        <h1>PRINCE BANSAL</h1>
        <p><b>FCA, DISA, Concurrent Audit (ICAI), FAFD (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Prince Bansal has a comprehensive and specialized skill set in the realms of Information System Audits,
          Concurrent Audits, and Forensic Audit. Forensic Auditor and Fraud Detector specialization equips him to
          navigate the intricate landscape of financial investigations, providing valuable insights into fraud detection
          and prevention.</p>

        <p>He has led various assignments across industries that equips him with comprehensive knowledge in financial
          dimension.</p>

        <p>In his capacity as the in-charge of our Bathinda branch, Prince assumes a leadership role overseeing and
          managing a diverse array of financial engagements.</p>
        <p>His experience spans Internal Audit and Statutory Audit, where he applies his knowledge and proficiency to
          ensure the highest standards of financial scrutiny, internal controls, and regulatory compliance.</p>


        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup21" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/ramesh.jpg">
        </figure>
        <h1>RAMESH SUTHARI</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Ramesh Suthari, an accomplished professional with expertise in the spheres of Internal Audit, Corporate
          Audits, and Statutory Audit. His comprehensive experience encompasses various facets of auditing,
          demonstrating versatility and proficiency in ensuring financial scrutiny, regulatory compliance, and corporate
          governance.</p>

        <p>In his role as the in-charge of our Bengaluru branch, Ramesh assumes a leadership position, overseeing and
          managing a diverse portfolio of financial engagements. </p>

        <p>His dynamic responsibilities extend to Internal Audits, Corporate Audits, and Statutory Audits, where he
          applies his in-depth knowledge and experience to uphold the highest standards of financial accountability and
          compliance.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup22" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/mohitm.jpg">
        </figure>
        <h1>MOHIT MITTAL</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Mohit Mittal, a distinguished Associate Member of The Institute of Chartered Accountants of India (ICAI),
          brings a wealth of professional acumen to the fields of Internal Audit and Statutory Audit. </p>

        <p>His commitment to excellence is showcased through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors. </p>

        <p>His core area of expertise lies in GST consultancy, where he demonstrates a thorough understanding of the
          intricate and evolving landscape of Goods and Services Tax. Mohit's adeptness in providing GST consultancy
          services reflects his commitment to offering clients strategic insights to navigate the complexities of the
          taxation framework.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup23" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/pri.jpg">
        </figure>
        <h1>PRITAM PRAKASH NAHAR</h1>
        <p><b>ACA, Concurrent Audit (ICAI), Anti Money Laundering (ICAI), Forex & Treasury (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Pritam Nahar, a dedicated professional has expertise in evaluating and enhancing internal controls within
          banking institutions.</p>

        <p>Additionally, Pritam has fortified his knowledge by completing a certification in Anti Money Laundering Laws,
          showcasing a commitment to understanding and addressing financial regulatory frameworks aimed at preventing
          money laundering activities. He also has a proficiency in managing foreign exchange and treasury operations.
        </p>

        <p>In his capacity as the in-charge of our Pune branch, Pritam assumes a leadership role overseeing a diverse
          range of financial engagements. His rich experience in various audit domains, coupled with his specialized
          certifications, positions him as a trusted professional capable of providing comprehensive financial
          solutions.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup244" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/mohit.jpg">
        </figure>
        <h1>MOHIT BADANI</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Mohit Badani possesses professional expertise to the intricate domains of Audit, including Banking,
          Corporate, and Internal Audits.</p>

        <p>His robust experience underscores a commitment to excellence in financial scrutiny practices across various
          sectors. His proficiency in navigating the complexities of audits within the banking and corporate sectors
          reflects his commitment to upholding the highest standards of financial accountability and regulatory
          compliance.</p>

        <p>In addition to his role as in-charge of our Lucknow branch, Mohit holds the esteemed position of Joint
          Secretary in the Lucknow Club of the Institute of Internal Auditors (Delhi Chapter). </p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup24" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/prag.jpg">
        </figure>
        <h1>PARAG KUMAR SHEKHADA</h1>
        <p><b>ACA, Concurrent Audit (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Parag Shekhada, brings a wealth of professional experience and expertise to the realms of Internal Audit and
          Statutory Audit. His specialized focus extends to Government local bodies audits and audits of higher
          education institutions, showcasing an expert understanding of the intricate financial landscapes within these
          sectors.</p>

        <p>In his current capacity as the in-charge of our Surat branch, Parag assumes a leadership role overseeing and
          managing a diverse portfolio of financial engagements.</p>

        <p>His responsibilities extend beyond traditional audits, encompassing strategic financial oversight,
          particularly in the domain of Government local bodies and higher education institutions.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup25" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/kaviya.jpg">
        </figure>
        <h1>KAVIYA B</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Kaviya contributes a wealth of professional expertise to the domains of Risk Advisory and Audits. Her
          commitment to excellence is underscored by her multifaceted experience in navigating the complexities of
          financial scrutiny practices across diverse sectors.</p>

        <p>In her pivotal role as the in-charge of our Coimbatore Branch, Kaviya oversees and manages a diverse
          portfolio of financial engagements. </p>

        <p>Kaviya's extensive experience in Risk Advisory and Audits showcases her dedication to delivering meticulous
          financial scrutiny services. Her core area of expertise lies in StartUp-related consultancies, where she
          demonstrates a keen understanding of the unique challenges and opportunities that emerging businesses
          encounter in their growth trajectory.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup26" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/bika.jpg">
        </figure>
        <h1>BIKASH CHORADIA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Bikash Choradia in his current role as the in-charge of our Guwahati branch, assumes a pivotal leadership
          position, overseeing and managing a diverse portfolio of financial engagements. His responsibilities extend
          beyond traditional audits, encompassing strategic financial oversight in the dynamic and challenging North
          East region of the country.</p>

        <p>Bikash's extensive experience in Internal Audit and Statutory Audit showcases his dedication to delivering
          meticulous financial scrutiny services.</p>

        <p>As a trusted professional, he is adept at navigating complex financial landscapes, ensuring internal controls
          are robust, and regulatory compliance is maintained. He has extensively worked for various clients of North
          East regions and provided practical implementable solutions with national and global best practices
          perspective.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup27" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/jatin.jpg">
        </figure>
        <h1>JATINDER BANSAL</h1>
        <p><b>ACA, Concurrent Audit (ICAI), FAFD</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Jatinder Bansal, a seasoned professional with a diverse skill set and extensive qualifications. His
          distinctive expertise extends to forensic auditing, where he holds esteemed certifications as a Forensic
          Auditor and Fraud Detector. </p>

        <p>This specialized knowledge equips him to navigate the intricate landscape of financial investigations,
          offering valuable insights into fraud detection and prevention. </p>

        <p>In his capacity as the in-charge of our Chandigarh branch, Jatinder takes on a leadership role overseeing a
          spectrum of financial engagements. His experience spans Internal Audit and Statutory Audit, where he applies
          his comprehensive knowledge and proficiency to ensure the highest standards of financial scrutiny, internal
          controls, and regulatory compliance.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup28" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/satya.jpg">
        </figure>
        <h1>SATYAJEET PANIGRAHI</h1>
        <p><b>ACA, BRSR (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Satyajeet Panigrahi enriches his professional profile with a post-qualification Certificate course in
          Business Responsibility and Sustainability Reporting (BRSR). His commitment to continuous professional
          development is evident in his pursuit of specialized knowledge in sustainable business practices. </p>

        <p>In his leadership role as the in-charge of our Bhubaneswar branch, Satyajeet oversees and manages a diverse
          portfolio of financial engagements.</p>

        <p>Satyajeet's extensive experience in Internal Audit and Statutory Audit showcases his commitment to delivering
          meticulous financial scrutiny services. His core area of expertise lies in conducting due diligence for banks,
          demonstrating a nuanced understanding of the intricacies involved in assessing and ensuring the financial
          health of banking institutions.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup29" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/divs.jpg">
        </figure>
        <h1>DIVYANSH SINGHAL</h1>
        <p><b>ACA, Concurrent Audit (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Divyansh Singhal, brings a wealth of professional expertise and experience to the arenas of Internal Audit
          and Statutory Audit. His specialized focus includes a profound understanding of the intricacies within the
          Power sector related Public Sector Undertakings (PSUs) and Government audits in the region. </p>

        <p>His proficiency in navigating the complexities of audits within the Power sector and government entities
          underscores his ability to address the unique challenges and regulatory nuances associated with these
          specialized sectors.</p>

        <p>In his current leadership role as the in-charge of our Dehradun branch, Divyansh oversees and manages a
          diverse portfolio of financial engagements. His responsibilities extend beyond traditional audits,
          encompassing strategic financial oversight, particularly within the dynamic and complex landscape of Power
          sector-related PSUs and governmental audits in the region.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup30" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/lokesh.jpg">
        </figure>
        <h1>LOKESH TOTLANI</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Lokesh Totlani brings in a wealth of professional expertise to the fields of Internal Audit, Government
          Audits, and Statutory Audit. His comprehensive skill set extends to encompass specialized knowledge in
          corporate law-related issues, highlighting his proficiency in navigating the intricacies of legal and
          regulatory frameworks.</p>

        <p>In his pivotal role as the in-charge of our Bhopal branch, Lokesh assumes a leadership position, overseeing
          and managing a diverse portfolio of financial engagements. </p>

        <p>His responsibilities transcend traditional audits, encompassing strategic financial oversight within the
          dynamic business landscape. His proficiency in corporate law-related issues positions him as a subject matter
          expert, capable of addressing legal complexities and ensuring compliance with corporate regulations.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup31" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/akhil.jpg">
        </figure>
        <h1>AKHIL RAJ</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Akhil Raj brings a wealth of professional acumen and expertise to the diverse domains of Internal Audit,
          Corporate Audits, and Statutory Audit. </p>

        <p>His versatile skill set encompasses a comprehensive understanding of financial scrutiny practices across
          various sectors. His proficiency in navigating the complexities of corporate financial landscapes underscores
          his ability to ensure robust internal controls and regulatory compliance. </p>

        <p>In his pivotal role as the in-charge of our Ernakulam branch, Akhil assumes a leadership position overseeing
          and managing a diverse portfolio of financial engagements. His responsibilities extend beyond traditional
          audits, encompassing strategic financial oversight in the dynamic business landscape of Ernakulam.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup32" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/yogesh.jpg">
        </figure>
        <h1>YOGESH SARIN</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Yogesh Sarin, a distinguished Associate Member of The Institute of Chartered Accountants of India (ICAI),
          brings a wealth of professional expertise to the spheres of Internal Audit and Statutory Audit. Yogesh's
          substantial experience in Internal Audit and Statutory Audit showcases his dedication to delivering meticulous
          financial scrutiny services.</p>

        <p>His proficiency in navigating the complexities of financial audits positions him as a trusted professional
          capable of ensuring robust internal controls and regulatory compliance.</p>

        <p>In his collaborative role as the co-incharge of our Jammu branch, Yogesh shares leadership responsibilities,
          overseeing and managing a diverse portfolio of financial engagements. His role extends beyond traditional
          audits, encompassing strategic financial oversight within the dynamic business landscape of Jammu.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup33" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/munishs.JPG">
        </figure>
        <h1>MUNISH SHARMA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Munish, an esteemed Associate Member of The Institute of Chartered Accountants of India (ICAI), brings a
          wealth of professional expertise to the domains of Internal Audit and Statutory Audit. </p>

        <p>Munish's substantial experience in Internal Audit and Statutory Audit showcases his dedication to delivering
          meticulous financial scrutiny services.</p>

        <p>His proficiency in navigating the complexities of financial audits positions him as a trusted professional
          capable of ensuring robust internal controls and regulatory compliance.</p>

        <p>In his collaborative role as the co-incharge of our Jammu branch, Munish shares leadership responsibilities,
          overseeing and managing a diverse portfolio of financial engagements. His role extends beyond traditional
          audits, encompassing strategic financial oversight within the dynamic and evolving business landscape of
          Jammu.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup34" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/ven.jpg">
        </figure>
        <h1>VEMULA VENKATESH</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Vemula Venkatesh, an esteemed Associate Member of The Institute of Chartered Accountants of India (ICAI),
          brings a wealth of professional expertise to the domains of Internal Audit and Statutory Audit.</p>

        <p>Vemula's substantial experience in Internal Audit and Statutory Audit showcases his dedication to delivering
          meticulous financial scrutiny services. His proficiency in navigating the complexities of financial audits
          positions him as a trusted professional capable of ensuring robust internal controls and regulatory
          compliance.</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors./p>

        <p>In his pivotal role as the in-charge of our Hyderabad branch, Vemula assumes leadership responsibilities,
          overseeing and managing a diverse portfolio of financial engagements. His role extends beyond traditional
          audits, encompassing strategic financial oversight within the dynamic and vibrant business landscape.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>

<div id="popup35" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/sha.jpg">
        </figure>
        <h1>SHASHWAT SINGHAL</h1>
        <p><b></b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Shashwat Singhal brings 7-8 years of experience across multiple digital frontiers, including Artificial
          Intelligence, blockchain technology, and other emerging digital tools. A UCLA alum and an accomplished
          entrepreneur, Shashwat has successfully built an AI music startup and provided strategic consulting to
          businesses on leveraging these technologies to drive innovation and efficiency.</p>
        <p>
          At Vinod Singhal & Co. LLP, Shashwat leads the integration of cutting-edge technologies into audit processes,
          focusing on the development of automation tools that enhance operational efficiency. His expertise extends
          beyond AI, encompassing blockchain auditing and fraud detection, where he applies his knowledge to create
          advanced solutions that address the evolving needs of the financial and audit industries. Shashwat’s role is
          critical in positioning the firm at the forefront of technological advancements, ensuring that it remains a
          leader in adopting and implementing new digital strategies.</p>



        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup36" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/Vikram1.jpg">
        </figure>
        <h1>VIKRAM SINGH DAGUR</h1>
        <p><b></b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Vikram is a distinguished law graduate with a Diploma in Labour Laws from the University of Rajasthan and a
          Bachelor's degree in Arts. He brings a wealth of expertise in Motor Vehicle & Insurance Laws, Trade Marks Act,
          Stamp Act, Labour Laws, Insurance, and Land Acquisition. Over the years, Vikram has successfully served
          numerous clients across these fields.</p>
        <p>
          Vikram also specializes in the Right to Information Act, assisting clients in obtaining crucial information
          from authorities at various levels. His sharp skills in legal interpretation and exceptional drafting
          abilities make him a valuable asset in litigation. His experience includes working as an Investigation
          Officer, where he managed various types of insurance claim investigations, including Life, Motor OD, Theft,
          MACT, and WC Claims, while maintaining strong liaison with government and administrative authorities.</p>
        <p>
          In addition, Vikram has extensive experience in handling taxation-related issues and frequently appears as
          Counsel before the Hon’ble High Court of Rajasthan at the Jaipur bench, as well as the District and Sessions
          Courts in Jaipur, representing clients in both civil and criminal cases. He has had the privilege of assisting
          Mr. Bharat Vyas, former Additional Advocate General for the Government of Rajasthan.</p>
        <p>
          Vikram’s expertise extends to the preparation and drafting of all kinds of legal documents, with a particular
          focus on Banking laws, especially the SARFAESI Act, and the preparation of due diligence reports on property.
        </p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup37" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/Prachi.jpg">
        </figure>
        <h1>PRACHI LATH</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>  In her role as a partner at Vinod Singhal & Co. LLP, Prachi Lath plays a crucial leadership role, guiding and managing a broad spectrum of financial engagements. As the Co- incharge of our Guwahati branch, she oversees operations and delivers strategic financial oversight in the dynamic and challenging North East region of India.
<br><br>
          Prachi brings extensive experience in Internal Audit and Statutory Audit, underscoring her commitment to providing meticulous financial scrutiny services. Her expertise ensures that internal controls are robust and regulatory compliance is consistently upheld, even in the most complex financial landscapes.
          <br><br>
          With a deep understanding of the unique challenges faced by clients in the North East, Prachi has successfully provided practical and implementable solutions, drawing from both national and global best practices. Her ability to navigate the intricacies of the financial environment in this region has made her a trusted advisor, known for delivering insightful and effective strategies.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup38" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/rohitr.jpg">
        </figure>
        <h1>ROHIT DARYANI</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Rohit Daryani a associate member of Institute of Chartered Accountants of India (ICAI), having hands on Audit, Indirect Taxation and Secretarial Compliances. Rohit's experience includes statutory audit of large cap listed Pharmaceutical companies, Automobile, Hotel and other Industries which is adds stars to his knowledge of Audit and Secretarial Compliances.
<br><br>
          In his pivotal role as incharge of our Ajmer Branch, Rohit assumes leadership responsibilities, overseeing and managing diverse Portfolio of Financial engagements. His role extends beyond traditional audits, encompassing Virtual CFO services, business expansion planning, fund raising consultancy and Insurance advisory.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup39" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/raje.jpg">
        </figure>
        <h1>RAJENDRA PRASADA SABAT</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Rajendra Prasad Sabat is a seasoned Chartered Accountant and Company Secretary with extensive expertise in statutory audits, internal controls, taxation, and risk management. With years of experience in the field, he has developed a strong proficiency in ensuring adherence to complex regulatory frameworks, streamlining financial operations, and driving strategic initiatives that align with organizational goals.
          <br><br>
          Rajendra's deep understanding of the financial landscape allows him to provide insightful guidance on optimizing tax strategies, effectively managing risks, and enhancing overall financial governance. His analytical acumen and meticulous approach to audits have consistently resulted in the identification of key areas for improvement, leading to more robust internal controls and stronger compliance mechanisms.
          <br><br>
          Throughout his career, Rajendra has successfully managed intricate audit assignments, ranging from large corporations to government entities, ensuring not only compliance but also adding value through actionable recommendations. His ability to navigate the complexities of tax regulations and his strategic mindset have proven invaluable in delivering tailored solutions that mitigate risks while maximizing financial efficiency.
          <br><br>
          In addition to his technical skills, Rajendra is recognized for his collaborative approach, working closely with clients to understand their unique challenges and craft solutions that are both practical and impactful. His commitment to excellence and continuous learning ensures that he remains at the forefront of industry developments, offering clients the most relevant and up-to-date advice.
          <br><br>
          At Vinod Singhal & Co. LLP, Rajendra plays a pivotal role in driving the firm’s commitment to delivering high-quality audit and consultancy services, leveraging his extensive knowledge and experience to support clients in achieving their financial and strategic objectives.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup40" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/aasani.jpg">
        </figure>
        <h1>ASHISH AMAR SAINI</h1>
        <p><b>ACA,FAFD (ICAI)</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Ashish Amar Saini is an accomplished Chartered Accountant with diverse experience across industries such as
          agriculture, steel, coal, power, pharmaceutical, banking, and media. </p>
        <p>
          For the past few years, Ashish has specialized in agricultural consultancy, driving business development,
          preparing Detailed Project Reports (DPRs), and securing government grants for agro-based industries and MSMEs.
          <br><br>
          Ashish is spearheading the firm’s agriculture and MSME vertical, offering tailored solutions to complex
          challenges in the sector. He has successfully led initiatives that include feasibility studies, project
          planning and execution, financial modeling for funding, and ensuring project compliance with relevant
          regulations. His efforts have been instrumental in securing government grants and approvals, as well as
          promoting technology adoption and digital transformation in agriculture.
          <br><br>
          In addition to his agricultural focus, Ashish has played a pivotal role in statutory and internal audits for
          major steel and power companies, ensuring compliance with financial reporting standards and regulatory
          requirements.
          <br><br>
          Ashish's multifaceted experience also includes significant contributions to the media, entertainment, and IT
          sectors. He has managed comprehensive budgets for films, television serials, and advertisements, and has
          overseen cash flow management and MIS development.
          His background in banking, finance, and pharmaceuticals further highlights his versatility and depth of
          knowledge in financial controls, fraud detection, and regulatory compliance.
        </p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup41" class="popup cstm-key-popup d-none">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>RAJAT RAJ</h1>
        <p><b>Practice Co-Head - Patna</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tempore non beatae quia officia impedit
          quas rerum, porro repudiandae similique iste ipsa voluptates consequatur rem, fuga doloremque nesciunt eius
          totam fugiat possimus consectetur deleniti.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup42" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/shivv.jpg">
        </figure>
        <h1>SHIV SHANKAR GUPTA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Shiv Shankar Gupta has been an esteemed Associate Member of the Institute of Chartered Accountants of India (ICAI) since 2021. Over the years, he has cultivated significant expertise across a diverse range of financial and regulatory disciplines, including Direct and Indirect Taxation, Corporate Matters, Statutory Audits, Bank Audits, and Internal Audits, particularly within various government departments. His in-depth knowledge and hands-on experience in these areas have consistently enabled him to offer clients precise and effective solutions tailored to their unique needs.
<br><br>
          Shiv’s academic journey is marked by his attainment of a Bachelor’s degree in Commerce from Pt. Ravishankar Shukla University, Raipur. This solid academic foundation has been further strengthened by his extensive professional experience, which spans over a decade. His ability to blend academic rigor with practical insights allows him to approach complex financial and regulatory challenges with a well-rounded perspective.
          <br><br>
          At Vinod Singhal & Co. LLP, Shiv is recognized for his unwavering commitment to delivering exceptional service quality. He leverages his deep reservoir of knowledge and experience to guide clients through the intricacies of today’s ever-evolving regulatory and financial landscapes. His dedication to his profession and his clients is evident in the meticulous care and attention he brings to every engagement, ensuring that clients receive not only compliance but also strategic advice that drives their financial success.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>
<div id="popup43" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/asi.jpg">
        </figure>
        <h1>ASHISH KUMAR</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> Ashish Kumar is a Chartered Accountant and is an academician who teaches and mentors students of CA, CS, Graduation, Post-Graduation classes. He is a visiting faculty for Management Institutions and a Guest faculty at Institute of Cost and Management Accountants, India. He has been a Corporate trainer for Oracle Applications, for giants like Deloitte & Capgemini. He has worked as SAP Consultant for 8.2 years at Infosys.<br><br> He has been awarded Competent Leader (CL) and Competent Competitor (CC) at Toastmasters’ International Club (An international club endeavoring towards communication and leadership skills). He is also a visiting faculty for Communication and soft skills for various Educational Institutions</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>



<section style="background-color: #E7EEF3;">
  <div class="container mt-md-5 mt-2 pump">

    <h5 class="foot whhh">MEET</h5>
    <h1 class="foot" style="font-weight: 800;">Our Experts</h1>
    <p class="text-center" style="max-width: 90%;">At Vinod Singhal & Co. LLP, leadership is defined by action and example—principles that resonate deeply with our key people. Our partners, who bring specialized expertise and extensive experience, lead from the front, embodying the firm's commitment to excellence. They remain accessible to clients, consistently adding value in their advisory and consulting roles.
<br><br>
      As John Quincy Adams said, "If your actions inspire others to dream more, learn more, do more, and become more, you are a leader." Our leadership team exemplifies this philosophy, driving both our firm and our clients towards greater achievements.</p>

    <div class="row mt-md-5 mt-3 cstm_key_people  ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;">Managing Partner
      </h4>
      <div class="col-md-3 col-12  mt-3">
        <div style="position: relative;" class="partner" data-popup="popup1">
          <img src="<?php echo base_url(); ?>assets/part/vinod.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>VINOD KUMAR SINGHAL</h5>
            <span>Managing Partner</span>
          </div>
        </div>
      </div>

    </div>
    <div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;text-transform: uppercase;">Designated Partners

      </h4>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup2">
          <img src="<?php echo base_url(); ?>assets/part/hem.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>HEMANT KUMAR BANSAL</h5>
            <span>National Head - Taxation & Assurance</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup8">
          <img src="<?php echo base_url(); ?>assets/part/shiv.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHIVANI GUPTA</h5>
            <span>National Head - PF Special Audits</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup12">
          <img src="<?php echo base_url(); ?>assets/part/pratek.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PRATEEK GOYAL</h5>
            <span>National Head - Stratergy, R&D and Businees Development</span>
          </div>
        </div>
      </div>
      
    </div>

    <div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;">PARTNERS</h4>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup18">
          <img src="<?php echo base_url(); ?>assets/part/rahul.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAHUL KUMAR SHRIVASTWA</h5>
            <span>National Head - Government Accounting &
              Practice Head - Patna</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup3">
          <img src="<?php echo base_url(); ?>assets/part/raj.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAJ NARAYAN PALSANIYA</h5>
            <span>Executive Partner - Jaipur</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup7">
          <img src="<?php echo base_url(); ?>assets/part/shyam.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHYAM LAL SHISHODIA</h5>
            <span>Practice Head - Udaipur</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup5">
          <img src="<?php echo base_url(); ?>assets/part/sunil1.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SUNIL KUMAR MITTAL</h5>
            <span>Practice Head - Bharatpur</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup10">
          <img src="<?php echo base_url(); ?>assets/part/rich.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RICHA PANDYA</h5>
            <span>Executive Partner - SOPs designing</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup11">
          <img src="<?php echo base_url(); ?>assets/part/kk-sodhani.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>KRISHAN KUMAR SODHANI</h5>
            <span>Executive Partner - Finance</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup9">
          <img src="<?php echo base_url(); ?>assets/part/dinesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>DINESH KUMAR PRADHAN</h5>
            <span>Practice Head - Ranchi</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup17">
          <img src="<?php echo base_url(); ?>assets/part/manish.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MANISH KHANDELWAL</h5>
            <span>Executive Partner - Audits</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup15">
          <img src="<?php echo base_url(); ?>assets/part/nandan.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>NANDAN MOTILAL SIRSAT</h5>
            <span>Practice Head - Goa</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup14">
          <img src="<?php echo base_url(); ?>assets/part/rakesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAKESH KUMAR JAIN</h5>
            <span>Practice Head - Raipur</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup20">
          <img src="<?php echo base_url(); ?>assets/part/prince.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PRINCE BANSAL</h5>
            <span>Practice Head - Bathinda</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup40">
          <img src="<?php echo base_url(); ?>assets/part/aasani.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>ASHISH AMAR SAINI</h5>
            <span>Executive Partner - AGRO & MSME</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup13">
          <img src="<?php echo base_url(); ?>assets/part/mukesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MUKESH KUMAR AGARWAL</h5>
            <span>Practice Head - Kolkata</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup19">
          <img src="<?php echo base_url(); ?>assets/part/manoj.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MANOJ SURAJMAL BOKADIA</h5>
            <span>Practice Head - Mumbai</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup21">
          <img src="<?php echo base_url(); ?>assets/part/ramesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAMESH SUTHARI</h5>
            <span>Practice Head - Bengaluru</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup39">
          <img src="<?php echo base_url(); ?>assets/part/raje.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAJENDRA PRASADA SABAT</h5>
            <span>Practice Co-Head - Bhubaneswar
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup27">
          <img src="<?php echo base_url(); ?>assets/part/jatin.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>JATINDER BANSAL</h5>
            <span>Practice Co-head - Chandigarh
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup25">
          <img src="<?php echo base_url(); ?>assets/part/kaviya.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>KAVIYA B</h5>
            <span>Practice Head - Coimbatore</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup31">
          <img src="<?php echo base_url(); ?>assets/part/akhil.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>AKHIL RAJ</h5>
            <span>Practice Head - Ernakulam</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup22">
          <img src="<?php echo base_url(); ?>assets/part/mohitm.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MOHIT MITTAL</h5>
            <span>Practice Head - Gurugram</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup28">
          <img src="<?php echo base_url(); ?>assets/part/satya.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SATYAJEET PANIGRAHI</h5>
            <span>Practice Co-Head - Bhubaneswar </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup38">
          <img src="<?php echo base_url(); ?>assets/part/rohitr.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>ROHIT DARYANI</h5>
            <span>ACA</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup24">
          <img src="<?php echo base_url(); ?>assets/part/prag.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PARAG KUMAR SHEKHADA</h5>
            <span>Practice Head: Surat</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup32">
          <img src="<?php echo base_url(); ?>assets/part/yogesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>YOGESH SARIN</h5>
            <span>Practice Co-Head - Jammu</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup33">
          <img src="<?php echo base_url(); ?>assets/part/munishs.JPG" alt="" width="100%">
          <div class="member_txt">
            <h5>MUNISH SHARMA</h5>
            <span>Practice Co-Head - Jammu</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup29">
          <img src="<?php echo base_url(); ?>assets/part/divs.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>DIVYANSH SINGHAL</h5>
            <span>Practice Head - Dehradun</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup26">
          <img src="<?php echo base_url(); ?>assets/part/bika.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>BIKASH CHORADIA</h5>
            <span>Practice Co-Head - Guwahati</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup30">
          <img src="<?php echo base_url(); ?>assets/part/lokesh.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>LOKESH TOTLANI</h5>
            <span>Practice Head - Bhopal</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup244">
          <img src="<?php echo base_url(); ?>assets/part/mohit.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MOHIT BADANI</h5>
            <span>Practice Head - Lucknow</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup34">
          <img src="<?php echo base_url(); ?>assets/part/ven.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>VEMULA VENKATESH</h5>
            <span>Practice Head - Hyderabad</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup23">
          <img src="<?php echo base_url(); ?>assets/part/pri.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PRITAM PRAKASH NAHAR</h5>
            <span>Practice Head - Pune</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup37">
          <img src="<?php echo base_url(); ?>assets/part/Prachi.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PRACHI LATH</h5>
            <span>Practice Co-Head - Guwahati</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3 d-none">
        <div style="position: relative;" class="partner" data-popup="popup41">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAJAT RAJ</h5>
            <span>Practice Co-Head - Patna</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup42">
          <img src="<?php echo base_url(); ?>assets/part/shivv.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHIV SHANKAR GUPTA</h5>
            <span>Practice Co-Head - Raipur</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup43">
          <img src="<?php echo base_url(); ?>assets/part/asi.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>ASHISH KUMAR</h5>
            <span>Practice Co-Head - Chandigarh</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;">PANEL OF EXPERTS

      </h4>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup35">
          <img src="<?php echo base_url(); ?>assets/part/sha.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHASHWAT SINGHAL</h5>
            <span>AI, Blockchains & Digital Literacy</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup36">
          <img src="<?php echo base_url(); ?>assets/part/Vikram1.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>VIKRAM SINGH DAGUR</h5>
            <span>Legal-Civil</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>



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