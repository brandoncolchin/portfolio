<?php
/**
* Template Name: Contact OLD Page
*
* Template to get in contact with Brandon.
*
* @package understrap
*/

get_header(); ?>
<div class="container-fluid" style="background-color:#284d5f;">

  <div class="box" style="padding-top:20px;padding-bottom:20px;">

    <div id="contactForm">
      <h1>CONTACT ME</h1>
      <form name="contactform" method="post" action="http://brandoncolchin.com/wp-content/themes/ZeroXTheme/contact_form_email.php">
        <p><label for="name">Name</label></p> <input type="text" id="name" name="name" placeholder="Write your name here..." maxlength="50">
        <p><label for="email">Email</label></p> <input type="text" id="email" name="email" placeholder="Let me know how to contact you..." maxlength="80">
        <p><label for="message">Message</label></p><textarea id="message" name="message" rows="6" cols="25" placeholder="What would you like to tell me..." maxlength="1000"></textarea><br />
        <input type="submit" value="Send" style="float:left;"><input type="reset" value="Clear">
      </form>
    </div>

  </div>

</div>
<img src="/wp-content/uploads/2018/06/427053-1920x300.jpg" alt="sexy graphic" title="Such a happy sunset.">

<?php get_footer(); ?>
