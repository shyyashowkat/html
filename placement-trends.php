<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Placement trends | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<!-- Page Title -->
<title>Placement trends | LearnIntern & Grow</title>

<!-- Favicon and Touch Icons -->
<link href="images/logo-and-favicon/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HY62C2WBH8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HY62C2WBH8');
</script>
</head>
<body class="">
<div id="wrapper" class="clearfix">

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="tel:+91-837-782-5955" class="text-white"><i class="fa fa-phone text-white"></i> +91-837-782-5955</a> </li>
                <li class="m-0 pl-10 pr-10">
                  <a href="mailto:class@learnintern.com" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i>class@learnintern.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype text-white"></i></a></li>
                <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="https://www.linkedin.com/company/learnintern/"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <?php if (isset($_SESSION['user'])) {
               ?>
               <li class="m-0 pl-0 pr-10">
                 <a href="/logout.php"  class="text-white "><i class="fa fa-sign-out mr-5"></i>Logout</a>
               </li><?php }else{ ?>
              <li class="m-0 pl-10"> <a href="/login.php" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"><a href="#promoModal1" data-lightbox="inline" class="text-white"><i class="fa fa-edit mr-5"></i>Register</a>
              </li><?php }?>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <section>
                <!-- popup modal -->
                <div id="promoModal1" class="modal-promo-box mfp-hide bg-img-cover inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/reg.jpg">
                  <div class="container pt-50 pb-50">
                    <div class="section-content">
                      <div class="row">
                        <div class="col-md-6 ">
                          <h2 class="text-theme-colored2 font-40 text-center ">Choose to Register</h2>
                            <div class="double-line-bottom-centered-theme-colored-2"></div>
                          <div class="row" class="text-white">
                            <div class="col text-center font-20">
                              <a href="/register.php" class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15 text-white" style="font-size:18px;width:250px;border-radius:25px;"> Register as a Student</a>
                            </div>
                            <div class="col text-center font-20">
                              <a href="/trainer-register.php" class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15 text-white" style="font-size:18px;width:250px;border-radius:25px;"> Register as a Trainer</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
         </section>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default"><a class="pull-left flip mt-sm-10 mb-sm-20" href="/"><img style="max-height:100px;" src="images/logo-and-favicon/light-theme-transparent-logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class=""><a href="/">Home</a>

              </li>
              <li><a href="/about-us.php">About Us <span class="label label-danger"></span></a>

              </li>
              <li><a href="#">Learning Modules</a>
                <ul class="dropdown">
                  <li><a href="/free-modules.php">Free</a></li>
                  <li><a href="#">Premium</a></li>
                </ul>
              </li>
              <li><a href="/courses.php">Courses</a></li>
              <li><a href="/our-trainers.php">Our Trainers</a>  </li>
              <?php if (isset($_SESSION['user'])) {
               ?> <li><a href="/dashboard.php">Dashboard</a> <?php } ?>
               </li>
               <li class =""><a  href="/contact-us.php">Contact Us</a>
               </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Placement trends</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Placement trends</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase mt-0 text-theme-colored2"> INTRODUCTION </span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Digital Marketing refers to advertising through digital channels such as search engine, websites, social media, email and mobile apps. It is a method by which the companies and brands endorse their brands through online communications. It encompasses all the marketing efforts that involve electronic device and internet usage.</p>
              <p>While normal marketing methods involves, print media, television advertisements and some other physical forms, digital marketing provides innumerable options with search engines, emails, videos, online browsing, social media, etc. In recent times, digital marketing has become vital for business and branding. Digital market and content are becoming more reliable sources for the customers to learn about the brand.</p>
              <blockquote class="theme-colored pt-20 pb-20">
                <p style="color:black">"Digital media is no longer a medium, but a way of doing business."</p>
                <footer ><cite title="Source Title">Ashish Bhasin, CEO-South Asia, Dentsu Aegis Network</cite></footer>
              </blockquote>
              <p class="mt-20">With the increase in internet usage, social media usage and boom in E-Commerce has led to the high demand for companies to market their brand through these platforms giving rise to a whole new occupation involving content development, creative ad development through the online platform thus leading to vast number of demand of service force in developing Digital Ads.</p>
              <p>The past 10 years has seen a great deal of development in increate in job demands for digital marketing, arising need of employment for people skilled in developing Digital Ads and in turn in Digital Marketing.</p>
              <p>The Digital channels provide for Digital Marketers to promote the business via various methods, using images, creating videos, animations, social media, blogs, websites, mobile apps, etc. Digital marketing has emerged as the fastest mode of promotion and marketing, reaching out to a wider audience.</p>
              <p>Over the last decade, digital marketing has emerged as an in-demand career. As technology advances and the internet becomes widespread, organizations need the help of digital marketers to effectively reach millions of internet users.</p>
              <p>As the COVID-19 pandemic has left the world hurdling in new directions, digital marketing has become more critical than ever before. Many businesses are not allowed to keep their physical locations open, leaving them to rely on the digital marketplace to keep them afloat. This leaves digital marketers in high demand for services that help businesses engage with their audiences and create strategies for future changes.</p><br/>
              <h3 class="text-uppercase mt-0">Scope and Demand of <span class="text-theme-colored2">Digital marketing</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Digital marketing has emerged as the fastest mode of promotion and marketing, reaching out to a wider audience. Companies of all segments are focusing their investments in digital marketing activities. There's high demand for skilled digital marketers, while a reliable supply of talent is lacking throughout the industry.</p>
              <p>According to Business Insider report of 2019, India's digital economy is expected to touch $1 trillion mark by 2022.
              <br/>A report in Indian Express published in 2019,  suggests that 85% marketers are tracking revenues generated through digital marketing and 50% of them reported that e-marketing activities are contributing to more than 10% of their revenues.
              </p>
              <p>Digital Marketing is a big umbrella as the market grows so does the job demand requiring technical as well as non-technical skills that has let to rise in job demands with various skillsets such as consultant, content writers, graphic designers, artists, etc to display their talents. As the industry grows the demand for creative skills also arises. </p>
              <h4 class="text-uppercase mt-0 text-theme-colored2">The digital marketing skills in high demand quite often consist of:</span></h4>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Content strategy<br/>&#10004;&nbsp;&nbsp;&nbsp; 	Digital project management<br/>&#10004;&nbsp;&nbsp;&nbsp; 	Data and analytics<br/>&#10004;&nbsp;&nbsp;&nbsp; 	Brand marketers	<br/>&#10004;&nbsp;&nbsp;&nbsp; 	SEO specialization	<br/>&#10004;&nbsp;&nbsp;&nbsp;	Website design and development 	<br/>&#10004;&nbsp;&nbsp;&nbsp;	E-commerce specialists 	</p>
              <p class="mt-20">According to a <a class="text-theme-colored2" href="https://www.digitalmarketinginstitute.com">www.digitalmarketinginstitute.com</a> India is the second largest country in demand for Digital marketing following Canada. Thus there is a high Job demand in the field of Digital Marketing in India leading to innumerable possibilities. </p>
                <div class="thumb">
                  <img src="/images/placement/placement1.jpg" style="max-width: 100%;" alt="">
                </div>
                <p class="mt-20">According to Zuan Education, <a class= "text-theme-colored2" href="https://www.zuaneducation.com">(www.zuaneducation.com)</a> following are the statistics of Scope for Careers in Digital </p><br/>
              <!--<a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>-->
              <h3 class="text-uppercase mt-0">Digital Marketing Market & Job Trends – <span class="text-theme-colored2">Global Perspective</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Around the world, the ways to access information, communicate with one another and to carry out day-to-day tasks such as banking are increasingly taking place solely online. With over half of the world’s population using the internet, it’s no wonder that the demand for highly skilled digital marketers is growing.</p>
              <p class="text-theme-colored2">According to the Global Digital Marketing Software Market Sixe Report, 2020-2027:</p>
              <div class="thumb">
                <img src="/images/placement/placement2.jpg" style="max-width: 100%;" alt="">
              </div>
            <br/><p class="text-theme-colored2">The countries have the highest demand for digital marketers globally, and the is demand so high in some places compared to others, the following are the enlisted countries as per the digitalmaketinginstiture.com for highest demand in Digital Marketing.</p>
              <ul style="list-style-type:disc; color:black">
                <li>Canada</li>
                <li>India</li>
                <li>America</li>
                <li>United Arab Emirates</li>
                <li>Australia</li>
                <li>Philippines</li>
                <li>Ireland</li>
              </ul><br/>
            <p>Although many of the digital skills in high demand around the world can often fall into similar categories, the need for a specific set of digital-based skills is different between countries. For example, in an article written for Forbes, Troy Smith defines why mobile marketing is in such high demand in developing regions such as in Latin America and Africa.</p>
            <p>The skills required for the Digital Marketing is very specific as well as has a lot many components creating a big umbrella, which is not met by general employment, thus leading to wide variety of employment and thus job demands.</p><br/>
            <p class="text-theme-colored2">Although the skills gap and the demand for digital marketers compared to the number of specialists available for the jobs is equal around the world, the average salaries of digital marketing specialists vary between countries.</p>
            <ul style="list-style-type:disc; color:black">
              <li>Philippines: PHP 310 ,891</li>
              <li>United Kingdom: £33,3 46</li>
              <li>India: Rs 304 ,844</li>
              <li>Australia: $78,786</li>
              <li>Canada: C$50,102</li>
              <li>Ireland: €40,604</li>
            </ul><br/>
            <p>In the global perspective the need of Digital Marketing executives is ever rising. An Exciting and fast-paced, a digital marketing executive can work in a variety of different industries. Whether it’s building magazine subscribers for Vogue, writing PPC ads for ASOS, strategising Google’s new global campaign, or reimagining Coco Cola’s branding – the possibilities are endless. </p><br/>
            <p>The largest Share of Difital advertisement is shared by search engines: Google, Yahoo & Bing. </p><br/>
            <p class="text-theme-colored2">Below are the 7 hottest Digital Marketing Jobs:</p>
            <ul style="list-style-type:disc;color:black" >
              <li>Content Managers and Strategists</li>
              <li>Virtual Reality Developers and Editors</li>
              <li>SEO/SEM Espeacialist</li>
              <li>UX Designer</li>
              <li>Email Marketing Specialist</li>
              <li>Digital Marketing Managers and Directors</li>
              <li>Analysts and AI Specialists.</li>
            </ul><br/>
            <p>The above figures and information shows the global increase in need of Digital Marketing and Employment scopes in it. The job demand and the skilled executives are not being met in the current status leading to wide scope and variety of jobs to be generated worldwide with consistency and good amount of salaries. </p><br/>
            <div class="thumb">
              <p class="text-theme-colored2">Below is the study by Indeed.com related to rise in Digital Marketing Job trend in Canada:</p>
              <img src="/images/placement/placement3.jpg" style="max-width: 100%;" alt="">
            </div>
          </div>
            <div class="col-md-6">
              <h3 class="text-uppercase mt-0">Digital Marketing Jobs In India:<span class="text-theme-colored2">Jobs In India</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">India is a growing market, particularly in Tertiary sector that has seen an exponential growth in the Past decade. The Digital Marketing industry is a fast growing industry in India primarily due to high number of internet users worldwide. The Introduction of IT sector has led to development in usage of Digital Platforms for all purposes one of them being Marketing.</p>
              <p>India is a growing market, particularly in Tertiary sector that has seen an exponential growth in the Past decade. The Digital Marketing industry is a fast growing industry in India primarily due to high number of internet users worldwide. The Introduction of IT sector has led to development in usage of Digital Platforms for all purposes one of them being Marketing.</p>
              <div class="thumb">
                <img src="/images/placement/placement4.jpg" style="max-width: 100%;" alt="">
                <p class="text-theme-colored2">According to statista.com the following trend may be observed when it comes to internet users in India:</p>
              </div>
              <p>In India, the growth of Digital Marketing can be seen upto 25-35% annually. With the highest population of Social Media Users and more than 700 Million internet users in India, the demand for Digital Marketing is Sky Rocketing. A career in Digital Marketing in India is very promising and is increasing exponential over the past few years.</p></br>
              <p class="text-theme-colored2">Below are a few stats showing growth of Digital Market in India:</p>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;The growth of India’s Digital Advertising industry is reaching 33.5%.<br/>&#10004;&nbsp;&nbsp;&nbsp; By 2020 the value of Digital Marketing Industry in India will be INR 225 billion, approx.<br/>&#10004;&nbsp;&nbsp;&nbsp;	By 2020 the Digital Industry will produce more than 20 lakh jobs.<br/>&#10004;&nbsp;&nbsp;&nbsp; Digital Advertising will likely grow at 14 % rate per Year in India.<br/>
              <p>The need for Digital Market is rising along with growth of E-commerce, internet browsing and blogging. People are becoming heavily reliant on Electronic devises and mobile applications to complete any or all the tasks as much as possible. </p>
              <p>The Indian Population is mainly comprising of Young generation, who are becoming tech savvy and seek everything in Internet, leading to majority internet and social media users. The young population is a heavy Internet Browsing population from sending texts, emails to creating and developing online content.</p>
              <p>The above stats along with growth of Digital Market has led to vast increase in Digital Marketing Jobs in India, creating a huge demand. These can be understood by the following studies conducted over the last decade, by several surveys and jobs demands generated in the most popular job browsing platforms such a Naukri.com, indeed.com, monsterindia, etc.</p>
              <p style="color:black">The rising job demand in Digital Marketing rose mainly in the latter part of the decade especially since 2016. Below are a few statistics from past 3 years showing the need of Digital Marketing jobs trends and Digital Marketing growth:</p>
              <h3 class="text-theme-colored2">2017 :</h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="thumb">
                <p class="text-theme-colored2">According to a Report by Delhi School of Internet Marketing:</p>
                <img src="/images/placement/placement6.jpg" style="max-width: 100%;" alt="">
              </div>
              <div class="thumb">
                <p class="text-theme-colored2">The Digital Marketing Job demands in 2017 was:</p>
                <img src="/images/placement/placement7.jpg" style="max-width: 100%;" alt="">
              </div>
              <h3 class="text-theme-colored2">2018 :</h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="thumb">
                <p class="text-theme-colored2">Compared to 2017, 2018 saw immense growth in job demand in Digital Marketing. The growth rate of more that 30% in each job types under Digital Marketing may be observed:</p>
                <img src="/images/placement/placement8.jpg" style="max-width: 100%;" alt="">
              </div>
              <h3 class="text-theme-colored2">2019 :</h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="thumb">
                <p class="text-theme-colored2">Another sharp increase was seen in Digital marketing Job Demand in 2019, the below statistics show the exact number of employment seeked in Digital Marketing in India through various job hunting websites:</p>
                <img src="/images/placement/placement8.jpg" style="max-width: 100%;" alt="">
              </div>
              <h3 class="text-theme-colored2">The Current Trend</h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="thumb">
                <p>The dawn of a new decade has seen the rise of digital world. The increasing awareness fir job hunting and job hunting market has led to the increase in demand for jobs such as Digital Marketers. The most severe need for such jobs arising due to the COVID-19 Pandemic that has changing the perspective of not only Indian Population rather the whole of Human Population.</p>
                <p>With the Increase in need of work from home jobs, home tuitions, Internet browsing and Digital expansion of every field and Industry, the need for jobs like Digital Marketers has increased at a phenomenal rate:</p>
                <img src="/images/placement/placement9.jpg" style="max-width: 100%;" alt="">
              </div>
              <h3 class="text-theme-colored2">Future Trend</h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="thumb">
                <p>With the rise in need for conversion of business and industries onto the digital platforms, there is a lot of scope and potential in increase of digital Industry including Digital Marketing, in the upcoming decade. According to a report by Dentsu Aegis Network (DAN), the Digital Ad Industry is set to reach Rs. 24920 crores by 2021, seeing the potential growth of 32%. Thus the upcoming years are going to witness a great increase in usage of Digital Platforms. </p>
                <p>The marketing industry along with others will immediately be impacted by the current trend leading to generation of great employment in the Digital Marketing. With the need of automation on every front, the Marketing industry will also go through the same along with increase in usage of social media, search engines, site search, online campaigns, etc.</p>
                <img src="/images/placement/placement10.jpg" style="max-width: 100%;" alt="">
                <p>The digital marketing career scope in the Indian internet industry alone, is going to be worth $160 billion by 2025, according to a Goldman Sachs report, which is three times its current value. Many companies are shifting their focus from traditional marketing to digital marketing. A recent report by Linkedin shows that digitamarketing jobs are one of the emerging careers in India since digitisation is being adopted so largely in the country. As the younger generation is emerging in India in numbers, we see a large increase in social media usage by Indians. </p>
                <p>As anyone in digital marketing will know, change is an integral, and inevitable, part of the job. It is necessary to make sure you are keeping up to date with the latest trends in order to be a leader in business’s industry.</p>
              </div>
            </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider: Clients -->

      <section class="clients ">
        <div class="container pt-10 pb-10">
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col clients-logo transparent text-center">

                <div class="item"> <a href="#"><img src="/images/clients/a4.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a3.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a2.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a5.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a6.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a7.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a8.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a9.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a10.png" alt=""></a></div>
                <div class="item"> <a href="#"><img src="/images/clients/a11.png" alt=""></a></div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end main-content -->
      <!-- Footer -->
      <footer id="footer" class="footer" data-bg-color="#212331">
        <div class="container pt-70 pb-40">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <img class="mt-0 mb-0" alt="" src="/images/logo-and-favicon/dark-theme-transparent-logo.png" style="max-width:60%">
                <p>D-23 A, Ground Floor, Gate No.1, Surya Enclave, New Delhi 110056</p>
                <ul class="list-inline mt-5">
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:+91-837-782-5955">+91-837-782-5955</a> </li>
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="mailto:class@learnintern.com">class@learnintern.com</a> </li>
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="/">learnintern.com</a> </li>
                </ul>
                <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
                  <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/Learnintern1"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://linkedin.com/school/learnintern"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="skype:https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
                <ul class="angle-double-right list-border">
                  <li><a href="/">Home Page</a></li>
                  <li><a href="/blog/">Blogs</a></li>
                  <li><a href="/about-us.php">About Us</a></li>
                  <li><a href="/mission.php">Our Mission</a></li>
                  <li><a href="/terms-conditions.php">Terms and Conditions</a></li>
                  <li><a href="/contact-us.php">Contact us</a></li>
                  <li><a href="/faqs.php">FAQ's</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/php.png" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                      <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/web.png" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                      <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/seo.png" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">Search Engine Optimization</a></h5>
                      <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored-2">Useful Applications</h4>
                <ul class="angle-double-right ">
                  <li><a href="/internet-speed-test.php">Test Internet Speed</a></li>
                  <li><a href="/typing-speed-test">Test Typing Speed</a></li>
                </ul>
              </br>
                <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="">
                    <li class="clearfix"> <span> Mon - Sun :  </span>
                      <div class="value pull-right"> 09.00 am - 10.00 pm </div>
                    </li>
                    <!--<li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right bg-theme-color-2 text-white closed"> Closed </div>
                    </li>-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom" data-bg-color="#2b2d3b">
          <div class="container pt-20 pb-20">
            <div class="row">
              <div class="col-md-6">
                <a href="https://essentialservices.in/" class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy; 2020 ESSENTIAL SERVICES. All Rights Reserved</a>
              </div>
              <div class="col-md-6 text-right">
                <div class="widget no-border m-0">
                  <ul class="list-inline sm-text-center mt-5 font-12">
                    <li>
                      <a href="/faqs.php">FAQ</a>
                    </li>
                    <li>|</li>
                    <li>
                      <a href="/privacy-policy.php">Privacy Policy</a>
                    </li>
                    <li>|</li>
                    <li>
                      <a href="/contact-us.php">Support</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="/js/custom.js"></script>
    <script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v8.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution=install_email
      page_id="644140642882018">
    </div>
    </body>
    </html>
