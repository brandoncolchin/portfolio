<?php
/**
* Template Name: Landing Page
*
* Template for displaying a page without sidebar even if a sidebar widget is published.
*
* @package understrap
*/

get_header(); ?>

<section class="first-parallax" >
  <div class="container">
    <div class="row">
      <div class="col-md-8" id="hero-textarea">
        <h1 class="text-center hero-h1">BRANDON COLCHIN</h1>
        <h2 class="text-center hero-h2">WEB DEVELOPER &amp; DESIGNER</h2>
        <p class="lead text-center">
          I'm a multi-disciplined designer and developer. I specialize in web-design, front-end development,
          and eCommerce and I've helped create dozens of digital experiences. I create custom,
          usable and effective websites for businesses, agencies, and individuals.
        </p>
      </div>

      <div class="col-md-4" id="PhotoBrandon">
        <img src="/wp-content/uploads/2018/04/landingPortraitLowQuality.png" alt="">
      </div>
    </div>
  </div>
</section>
<!-- end hero section -->

<section id="projects">
  <div class="container">
    <h1 class="text-center projects-h1">Projects</h1>
  </div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-12 col-sm-4" style="max-width:891px">
        <a href="/idw-publishing">
          <div class="webDesignBox">
            <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-6.12.22-PM.png" alt="">
            <div class="webDesignHeader">www.IDWPublishing.com</div>
            <p class="lead"></p>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-4" style="max-width:891px">
        <a href="/idw-limited">
          <div class="webDesignBox">
            <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-4.34.53-PM.png" alt="">
            <div class="webDesignHeader">www.IDWLimited.com</div>
            <p class="lead"></p>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-4" style="max-width:815px">
        <a href="/digital-trading-tools">
          <div class="webDesignBox">
            <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-4.37.26-PM.png" alt="">
            <div class="webDesignHeader">www.DigitalTradingTools.com</div>
            <p class="lead"></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end projects section -->

<section id="skills">
  <div class="container">
    <h1 class="text-center skills-h1">Skills &amp; Experience</h1>
    <div class="row">
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-html5 fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">HTML5</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-css3 fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">CSS3</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-coffee fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">JavaScript</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-code fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">PHP</p>
      </div>
      <div class="col-6 col-lg-4 text-center">
        <i class="fa fa-wordpress fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Wordpress</p>
      </div>
      <div class="col-6 col-lg-4 text-center">
        <i class="fa fa-amazon fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Amazon Web Services</p>
      </div>
      <div class="col-6 col-lg-4 text-center">
        <i class="fa fa-database fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Database Management</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-bars fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Responsive Design</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-tasks fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Ajax</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-sitemap fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">Meets Deadlines</p>
      </div>
      <div class="col-6 col-lg-3 text-center">
        <i class="fa fa-github fa-4x fa-inverse" aria-hidden="true"></i>
        <p class="lead">GitHub</p>
      </div>

    </div>
  </div>
</section>
<!-- end skills section -->

<div class="container">
  <section class="web-design-section" >
    <h1 class="text-center web-h1">Web Design</h1>
    <div class="box">

      <p class="lead text-center">
        I’ve been building applications on the web for two years, with a focus on UI design and front-end development.
        I’m highly experienced, with exceptional standards of craftsmanship and professionalism.
      </p>
      <p class="text-center">
        <strong>View the web-design portfolio for examples of my work:</strong>
      </p>
      <a href="/web-design">
        <button class="portfolio-button" type="text" name="button">WEB DESIGN PORTFOLIO</button>
      </a>
    </div>
  </section>
</div>
<!-- end web design section -->

<div class="container">

<section class="third-parallax" style="padding-bottom:0;">
  <div class="row">
    <div class="col-md-6">
      <h2 class="text-center footer-h2">About</h2>
      <p class="lead text-center footer-p">
        I’m a digital designer, web developer, and passionate gamer. I do some of these projects for money, and some of them for fun.
        <br><br>
        This site is my web design portfolio. Feel free to contact me to help you with your next web project!
      </p>
    </div>

  </div>
  <!-- end row -->
</section>
</div>
<!-- end container -->

<?php get_footer(); ?>
