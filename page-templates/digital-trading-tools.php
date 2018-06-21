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
      <img class="idwpBrandImg" src="/wp-content/uploads/2018/04/dttlogo_top.jpg" alt="">
    </a>
    <div class="row previewRowWebDesign">
      <div class="col-12 col-md-6">
        <div class="visitSiteButtonDiv">
          <a href="http://www.digitaltradingtools.com/" target="_blank">
            <button type="button" name="linkToIDWP" class="btn btn-primary visitSiteButton">
              Visit<br>DigitalTradingTools.com
            </button>
          </a>
        </div>
        <p class="lead text-left idwpP">
          <!-- ADVERTISEMENTS This Wordpress theme was built in April 2017 with Woocommerce integration.
          This sites main focus was to engage customers with enticing graphic sections and colorful carousel images
          to direct them to the shop and gain there involvement with IDW Publishing by subscribing to newsletters.
          The child theme used for this site inherits the functionality and styling of UnderStrap, a WordPress
          theme framework and starter theme using Bootstrap 4 as foundation. -->

          The focus of www.digitaltradingtools.com was to have ideal advertisement placement towards the top, side,
          and bottom of the landing page. The advertisements were integrated using Google AdSense. This website was
          built using the Joomla content management system and a forum was also incorporated into the website to engage community members.
          <br><br>
          Take a peek at the landing page screenshot and then view below to learn more about each section. Also,
          feel free to click above or
          <a class="idwpTextLink" href="http://www.idwpublishing.com/"><strong>here</strong></a>
          to view the site in your browser.
        </p>
      </div>
      <div class="col-12 col-md-6">
        <!-- Trigger the Modal -->
        <div class="text-center previewPicWebDesign">
          <img id="myImg" src="/wp-content/uploads/2018/04/dttFullPage.png" alt="Digital Trading Tools Website Designed By Brandon Colchin" width="300" height="200">
        </div>
      </div>
    </div>

  </div>




  <!-- <div class="container-fluid">
    <div class="row sectionRow">

      <div class="col-12 col-md-6">
      <div class="sectionNumberHeader">
        <h3>Section 1</h3>
      </div>
      <div class="sectionP">
        <ul>
          <li>Uses wp_nav_menu() function and Wordpress menus to easily change and rename menu items</li>
          <li>Universal header menu across all IDW sites</li>
          <li>Uses Bootsrap4 navbar wrapper for positioning the brand IDW logo and navigation menu items</li>
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
            <li>Uses wp_nav_menu() function and Wordpress menus to easily change and rename menu items</li>
            <li>Universal header menu across all IDW sites</li>
            <li>Uses Bootsrap4 navbar wrapper for positioning the brand IDW logo and navigation menu items</li>
            <li>Reacts responsively for mobile with a collapsing menu</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6">
      <div class="sectionNumberHeader">
        <h3>Section 3</h3>
      </div>
      <div class="sectionP">
        <ul>
          <li>Uses wp_nav_menu() function and Wordpress menus to easily change and rename menu items</li>
          <li>Universal header menu across all IDW sites</li>
          <li>Uses Bootsrap4 navbar wrapper for positioning the brand IDW logo and navigation menu items</li>
          <li>Reacts responsively for mobile with a collapsing menu</li>
        </ul>
      </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="sectionNumberHeader">
          <h3>Section 4</h3>
        </div>
        <div class="sectionP">
          <ul>
            <li>Uses wp_nav_menu() function and Wordpress menus to easily change and rename menu items</li>
            <li>Universal header menu across all IDW sites</li>
            <li>Uses Bootsrap4 navbar wrapper for positioning the brand IDW logo and navigation menu items</li>
            <li>Reacts responsively for mobile with a collapsing menu</li>
          </ul>
        </div>
      </div> -->



    </div>
  </div>

</div>

<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-12">
      <h2 class="text-center webDesignPageFooter">View Brandon's Other Projects</h2>
    </div>

    <div class="col-12 col-sm-6" style="max-width:815px">
      <a href="/idw-publishing">
        <div class="webDesignBox">
          <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-6.12.22-PM.png" alt="">
          <div class="webDesignHeader">www.IDWPublishing.com</div>
          <p class="lead"></p>
        </div>
      </a>
    </div>

    <div class="col-12 col-sm-6" style="max-width:891px">
      <a href="/idw-limited">
        <div class="webDesignBox">
          <img class="webDesignImg" src="/wp-content/uploads/2018/01/Screen-Shot-2018-01-18-at-4.34.53-PM.png" alt="">
          <div class="webDesignHeader">www.IDWLimited.com</div>
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
