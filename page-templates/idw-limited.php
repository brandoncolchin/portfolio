<?php
/**
* Template Name: IDW Publishing Template
*
* Template to show IDW Publishing work.
*
* @package understrap
*/

get_header(); ?>

<div class="idwpBG">

  <div class="container-fluid idwpContainerTop">
    <a href="http://www.idwpublishing.com/" target="_blank">
      <img class="idwpBrandImg" src="/wp-content/uploads/2018/01/IDWLOGO-2016-white.png" alt="">
    </a>
    <div class="row previewRowWebDesign">
      <div class="col-12 col-md-6">
        <div class="visitSiteButtonDiv">
          <a href="http://www.idwlimited.com/" target="_blank">
            <button type="button" name="linkToIDWP" class="btn btn-primary visitSiteButton">
              Visit www.IDWLimited.com
            </button>
          </a>
        </div>
        <p class="lead text-left idwpP">The www.IDWLimited.com theme was built to entice customers with high-end
          products from IDW Publishing. This website simulates the style from www.IDWPublishing.com to keep a
          consistent theme throughout IDW's websites. IDW Limited uses Woocommerce as its eCommerce platform.
          <br>
          <br>
          Click the landing page screenshot to scroll through the design and view the page. Also,
          feel free to click above or
          <a class="idwpTextLink" href="http://www.idwpublishing.com/"><strong>here</strong></a>
          to view the site in your browser.
        </p>
      </div>
      <div class="col-12 col-md-6">
        <!-- Trigger the Modal -->
        <div class="text-center previewPicWebDesign">
          <img id="myImg" src="/wp-content/uploads/2018/01/idwLimitedScreenshotLabeled.jpg" alt="IDW Limited Website Designed By Brandon Colchin" width="300" height="200">
        </div>
      </div>
    </div>

  </div>




  <div class="container-fluid">
    <div class="row sectionRow">

      <div class="col-12 col-md-6">
      <div class="sectionNumberHeader">
        <h3>Section 1</h3>
      </div>
      <div class="sectionP">
        <ul>
          <li>Uses wp_nav_menu() Wordpress function and menus to easily change and rename menu items</li>
          <li>Universal header menu across all IDW sites</li>
          <li>Uses Bootstrap4 navbar wrapper for positioning the brand logo and menu items</li>
          <li>Reacts responsively for mobile with a collapsing menu</li>
        </ul>
      </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="sectionNumberHeader">
          <h3>Section 2</h3>
        </div>
        <div class="sectionP">
          <ul>
            <li>The main attraction that every visitor sees is this <strong>Bootstrap carousel</strong> that displays new product releases</li>
            <li>IDW Limited focuses on selling premium priced products, such as limited edition books and art</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6">
      <div class="sectionNumberHeader">
        <h3>Section 3</h3>
      </div>
      <div class="sectionP">
        <ul>
          <li>A news section was on display at the halfway point of the landing page</li>
          <li>This row showed IDW's latest news and would cycle accordingly when new articles were written and published</li>
        </ul>
      </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="sectionNumberHeader">
          <h3>Section 4</h3>
        </div>
        <div class="sectionP">
          <ul>
            <li>The Spotlight section showcased the newest products on www.IDWLimited.com</li>
            <li>The product order could also be customized by admins and shop managers</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6">
      <div class="sectionNumberHeader">
        <h3>Section 5</h3>
      </div>
      <div class="sectionP">
        <ul>
          <li>The subscription section is available for an easy and simple way that visitors can subscribe to IDW newsletters</li>
          <li>The newsletter forms are integrated with <strong>MailChimp</strong> </li>
        </ul>
      </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="sectionNumberHeader">
          <h3>Section 6</h3>
        </div>
        <div class="sectionP">
          <ul>
            <li>This is the footer that is included throughout www.IDWLimited.com</li>
            <li>Contains links to IDW's other sites and miscellaneous pages, such as the privacy policy and contact page</li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</div>

<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-12">
      <h2 class="text-center webDesignPageFooter">View Brandon's Other Projects</h2>
    </div>

    <div class="col-12 col-sm-6" style="max-width:891px">
      <a href="/idw-publishing">
        <div class="webDesignBox">
          <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-6.12.22-PM.png" alt="">
          <div class="webDesignHeader">www.IDWPublishing.com</div>
          <p class="lead"></p>
        </div>
      </a>
    </div>
    <div class="col-12 col-sm-6" style="max-width:815px">
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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<?php get_footer(); ?>
