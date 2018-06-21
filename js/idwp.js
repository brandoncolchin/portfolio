jQuery(document).ready( function($) {

  $(document).on('click', '#myImg', function(){
  console.log('Works!');
});

  $('.sectionP').matchHeight();

  var skills = $("#skills .text-center");
  skills.waypoint(function(){
    skills.addClass('js-dipper-animate');
  }, {offset:"95%"});

  var projects = $("#projects .webDesignBox");
  projects.waypoint(function(){
    projects.addClass('js-dipper-animate');
  }, {offset:"95%"});

  var firstParallax = $(".first-parallax .container");
  firstParallax.waypoint(function(){
    firstParallax.addClass('js-dipper-animate');
  }, {offset:"95%"});

  var webDesignSection = $(".web-design-section");
  webDesignSection.waypoint(function(){
    webDesignSection.addClass('js-dipper-animate');
  }, {offset:"95%"});

  var thirdParallax = $(".third-parallax");
  thirdParallax.waypoint(function(){
    thirdParallax.addClass('js-dipper-animate');
  }, {offset:"95%"});

});

// FOR USE ON WEB DESIGN CLICK IMAGES
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
