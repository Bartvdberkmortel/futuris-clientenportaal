
var $jq = jQuery.noConflict();
$jq(document).ready(function() {
  $jq('.andere-vergaderingen').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<i class="left fas fa-chevron-left"></i>',
    nextArrow: '<i class="right fas fa-chevron-right"></i>'
  });
});
