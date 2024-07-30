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
    padding: 6px 12px 50px;
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
        <p><b>Founder Partner</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Vinod Kumar Singhal, Founder Partner of VSC & Co. LLP has 30+ years standing in the financial fraternity. He
          excels in discerning client requirements and translating them into successful outcomes.</p>
        <p>He is strategist who consults organizations and professionals on planning, positive leadership, coordination,
          seamless execution, and monitoring. His non-traditional approach towards his profession has resulted in growth
          of the firm in terms of people, services, and network. He believes in stabilizing and scaling the prospects to
          best possible outcome.</p>
        <p>Demonstrating mastery in matters related to Business Process Outsourcing, he has played a pivotal role in
          diversifying the firm's service portfolio beyond traditional audit and taxation to numerous value-added
          services. As a pioneering entrepreneur and an informed investor, he believes in encouraging professionals
          through the VSC network into entrepreneurship development. He supports them through resources and insightful
          guidance.</p>
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
        <p><b>Founder Partner</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Hemant Bansal, serving as the managing Partner of VSC, plays a crucial role as the in-charge of the Jaipur
          Head Office, collaborating closely with network branches. </p>

        <p>With a career spanning over three decades, he has amassed extensive experience in the corporate sector,
          Auditing, Banking, Project Finance, Direct Taxation, International Taxation, FEMA, Startups, and Management
          Consultancy.</p>

        <p>His strength lies in his unwavering commitment to integrity and the delivery of client-satisfying services.
          His vision has transformed the entire practice into a platform for quality-driven service in the industry.
          Demonstrating leadership qualities, he has been at the forefront of articulating the group's philosophy and
          values, emphasizing a team-building approach.</p>
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
        <h1>RAJ NARAYAN PALSANIA</h1>
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
        <h1>AS SISODIA</h1>
        <p><b>ACA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>A S Sisodia has an extensive corporate work history with a specialized focus in the dynamic field of
          Insurance. </p>

        <p>With a remarkable career spanning over 33 years, he dedicated a significant tenure of his professional
          journey to serving the prestigious Oriental Insurance Company Limited, where he ascended to the position of
          Deputy General Manager before retiring.</p>

        <p>A S Sisodia's core area of expertise lies in Risk Management and Consultancies, where he has cultivated a
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
          <img src="<?php echo base_url(); ?>assets/part/sunil.jpg">
        </figure>
        <h1>SUNIL KUMAR MITTAL</h1>
        <p><b>FCA, ISA (ICAI), Concurrent Audit (ICAI)</b></p>

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
          conducting project feasibility studies, and addressing Accounting Matters in accordance with Indian Accounting
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
        <h1>SHYAM LAL SISODIA</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Shyam Lal Sisodia stands out as a seasoned professional with extensive expertise that spans across various
          facets of the financial landscape, including Accounting, Auditing, and Direct & Indirect Taxation.</p>

        <p>In addition to his foundational skills, Shyam Lal Sisodia possesses advanced knowledge in project financing,
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
          <img src="<?php echo base_url(); ?>assets/part/richa.jpg">
        </figure>
        <h1>RICHA PANDYA</h1>
        <p><b>FCA, CISA (ISACA), ISA (ICAI), CIA (IIA), CGST(ICAI)</b></p>

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
        <p><b>FCA, FCS, Concurrent Audit (ICAI), </b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Prateek Goyal possesses comprehensive understanding of corporate governance and regulatory compliance and in
          his capacity as the Audit In-charge, Prateek assumes a pivotal role overseeing a diverse range of audits.</p>

        <p>His primary focus lies in managing assignments related to Governments, Public Sector Undertakings (PSUs),
          Multinational Corporations (MNCs), and various other entities on a nationwide scale.</p>

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
<div id="popup13" class="popup cstm-key-popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <div class="member_profile clearfix">
      <!-- Left Side -->
      <div class="member_profile_left">
        <figure>
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
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
        <h1>RAHUL KUMAR SRIVASTAWAA</h1>
        <p><b>FCA</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Rahul Kumar Srivastawa brings a wealth of expertise to the domains of Internal Audit and Statutory Audit. His
          professional journey is underscored by a specialization in accounting and auditing for Government departments
          and Urban Local Bodies (ULBs). </p>

        <p>Currently as Patna branch in-charge, Rahul assumes the pivotal role of overseeing and managing a spectrum of
          financial engagements.</p>

        <p>His deep understanding of the complex financial structures within Government entities and ULBs positions
          Rahul as a subject matter expert in this specialized field.</p>

        <p>This expertise is invaluable in navigating the unique challenges and regulatory intricacies associated with
          these sectors. Rahul's has led many financial engagements with precision, ensuring that audits are conducted
          thoroughly and in compliance with relevant standards and regulations.</p>

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
        <p><b>FCA, ISA(ICAI), Concurrent Audit (ICAI), Forensic Audit (ICAI)</b></p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
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
        <p>Mohit Badani possesses professional expertise to the intricate domains of Audit, including Banking, Corporate, and Internal Audits.</p>

        <p>His robust experience underscores a commitment to excellence in financial scrutiny practices across various sectors. His proficiency in navigating the complexities of audits within the banking and corporate sectors reflects his commitment to upholding the highest standards of financial accountability and regulatory compliance.</p>

        <p>In addition to his role as in-charge of our Lucknow branch, Mohit holds the esteemed position of Joint Secretary in the Lucknow Club of the Institute of Internal Auditors (Delhi Chapter). </p>



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
        <p><b>ACA</b></p>

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
        <p><b>ACA, Concurrent Audit (ICAI), Forensic Audit (ICAI)</b></p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>DIVYANSH SINGHAL</h1>
        <p><b>ACA</b></p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
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
          <img src="<?php echo base_url(); ?>assets/part/munish.jpg">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>SHASHWAT SINGHAL</h1>
        <p><b>AI, Blockchains & Digital Literacy</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore dolore et veniam ducimus illo iusto deserunt corrupti ut reiciendis!
           Laborum maiores adipisci aperiam, nam aliquam blanditiis inventore facilis temporibus quis dignissimos aspernatur corporis obcaecati!.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet voluptas sed quas itaque earum dolor vitae voluptatum animi
           non placeat consectetur architecto maiores necessitatibus quam, dicta illum officia illo adipisci consequuntur amet reprehenderit nihil
            optio. Rerum tempore magni modi veritatis dolorum, corporis quo enim?</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio libero distinctio rem iste sit explicabo omnis tenetur, 
          reprehenderit ab cupiditate neque! Voluptatibus quos, at id tempore dolore nisi quisquam.</p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>VIKRAM SINGH DAGUR</h1>
        <p><b>AI, Blockchains & Digital Literacy</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> VIKRAM SINGH Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore dolore et veniam ducimus illo iusto deserunt corrupti ut reiciendis!
           Laborum maiores adipisci aperiam, nam aliquam blanditiis inventore facilis temporibus quis dignissimos aspernatur corporis obcaecati!.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet voluptas sed quas itaque earum dolor vitae voluptatum animi
           non placeat consectetur architecto maiores necessitatibus quam, dicta illum officia illo adipisci consequuntur amet reprehenderit nihil
            optio. Rerum tempore magni modi veritatis dolorum, corporis quo enim?</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio libero distinctio rem iste sit explicabo omnis tenetur, 
          reprehenderit ab cupiditate neque! Voluptatibus quos, at id tempore dolore nisi quisquam.</p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>PRACHI LATH</h1>
        <p><b>Practice Co-Head - Guwahati</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> PRACHI LATH Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore dolore et veniam ducimus illo iusto deserunt corrupti ut reiciendis!
           Laborum maiores adipisci aperiam, nam aliquam blanditiis inventore facilis temporibus quis dignissimos aspernatur corporis obcaecati!.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet voluptas sed quas itaque earum dolor vitae voluptatum animi
           non placeat consectetur architecto maiores necessitatibus quam, dicta illum officia illo adipisci consequuntur amet reprehenderit nihil
            optio. Rerum tempore magni modi veritatis dolorum, corporis quo enim?</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio libero distinctio rem iste sit explicabo omnis tenetur, 
          reprehenderit ab cupiditate neque! Voluptatibus quos, at id tempore dolore nisi quisquam.</p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>ROHIT DARYANI</h1>
        <p><b>Practice Head - Ajmer</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> ROHIT DARYANI Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore dolore et veniam ducimus illo iusto deserunt corrupti ut reiciendis!
           Laborum maiores adipisci aperiam, nam aliquam blanditiis inventore facilis temporibus quis dignissimos aspernatur corporis obcaecati!.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet voluptas sed quas itaque earum dolor vitae voluptatum animi
           non placeat consectetur architecto maiores necessitatibus quam, dicta illum officia illo adipisci consequuntur amet reprehenderit nihil
            optio. Rerum tempore magni modi veritatis dolorum, corporis quo enim?</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio libero distinctio rem iste sit explicabo omnis tenetur, 
          reprehenderit ab cupiditate neque! Voluptatibus quos, at id tempore dolore nisi quisquam.</p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>RAJENDRA PRASAD SABAT</h1>
        <p><b>Practice CO-Head - Bhubaneswar</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <!-- Left Side -->
      <!-- Right Side -->
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> RAJENDRA PRASAD SABAT Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore dolore et veniam ducimus illo iusto deserunt corrupti ut reiciendis!
           Laborum maiores adipisci aperiam, nam aliquam blanditiis inventore facilis temporibus quis dignissimos aspernatur corporis obcaecati!.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eveniet voluptas sed quas itaque earum dolor vitae voluptatum animi
           non placeat consectetur architecto maiores necessitatibus quam, dicta illum officia illo adipisci consequuntur amet reprehenderit nihil
            optio. Rerum tempore magni modi veritatis dolorum, corporis quo enim?</p>

        <p>His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio libero distinctio rem iste sit explicabo omnis tenetur, 
          reprehenderit ab cupiditate neque! Voluptatibus quos, at id tempore dolore nisi quisquam.</p>

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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg">
        </figure>
        <h1>ASHISH AMAR SAINI</h1>
        <p><b>Executive Partner - Agro & MSME</b></p>

        <ul class="social-icons list-inline d-none">
          <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
     
      <div class="member_profile_right">
        <div class="at-above-post addthis_tool" data-url=""></div>
        <p> ASHISH AMAR SAINI - His commitment to excellence is evident through his extensive experience, navigating the intricacies of
          financial scrutiny practices across diverse sectors.</p>

        <div class="at-below-post addthis_tool" data-url=""></div>
        <!-- AddThis Share Buttons generic via filter on the_content -->
      </div>
      <!-- Right Side -->
    </div>

  </div>
</div>



<section style="background-color: #E7EEF3;">
  <div class="container mt-md-5 mt-2 pump">

    <h5 class="foot whhh" >MEET</h5>
    <h1 class="foot" style="font-weight: 800;">Our Experts</h1>
    <p class="text-center">We aim to empower our clients in form of futuristic, wholesome & practically adaptable recommendations.</p>

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
      <h4 class="mb-4 p-0" style="font-weight: 700;">NATIONAL HEADS

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
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup18">
          <img src="<?php echo base_url(); ?>assets/part/rahul.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAHUL KUMAR SRIVASTAV</h5>
            <span>National Head - Government Accounting 
            Practice Head - Patna</span>
          </div>
        </div>
      </div>
</div>

<div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;">CORE TEAM MEMBERS

      </h4>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup3">
          <img src="<?php echo base_url(); ?>assets/part/raj.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAJ NARAYAN PALSANIA</h5>
            <span>Executive Partner - Jaipur</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup7">
          <img src="<?php echo base_url(); ?>assets/part/shyam.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHYAM LAL SISODIA</h5>
            <span>Practice Head - Udaipur</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup5">
          <img src="<?php echo base_url(); ?>assets/part/sunil.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SUNIL KUMAR MITTAL</h5>
            <span>Practice Head - Bharatpur</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup10">
          <img src="<?php echo base_url(); ?>assets/part/richa.jpg" alt="" width="100%">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>ASHISH AMAR SAINI</h5>
            <span>Executive Partner - Agro & MSME</span>
          </div>
        </div>
      </div>

   

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup13">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>RAJENDRA PRASAD SABAT</h5>
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
            <span>Practice Head - Chandigarh
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>AKHIL RAJ</h5>
            <span>Practice Head - Ernakulam</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup22">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>ROHIT DARYANI</h5>
            <span>Practice Head - Ajmer</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup24">
          <img src="<?php echo base_url(); ?>assets/part/prag.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PARAG KUMAR SHAMBHUBHAI SHEKHADA</h5>
            <span>Practice Head: Surat</span>
          </div>
        </div>
      </div>
     
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup32">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>YOGESH SARIN</h5>
            <span>Practice Co-Head - Jammu</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup33">
          <img src="<?php echo base_url(); ?>assets/part/munish.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>MUNISH SHARMA</h5>
            <span>Practice Co-Head - Jammu</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup29">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
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
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>PRACHI LATH</h5>
            <span>Practice Co-Head - Guwahati</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
      <h4 class="mb-4 p-0" style="font-weight: 700;">PANEL OF EXPERTS

      </h4>
      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup35">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>SHASHAWAT SINGHAL</h5>
            <span>AI, Blockchains & Digital Literacy</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12 mt-3">
        <div style="position: relative;" class="partner" data-popup="popup36">
          <img src="<?php echo base_url(); ?>assets/part/noimage.jpg" alt="" width="100%">
          <div class="member_txt">
            <h5>VIKRAM SINGH DAGUL</h5>
            <span>Legal - Civil</span>
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