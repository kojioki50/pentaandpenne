jQuery(function () {

  jQuery(".js-menu").click(function () {
    jQuery(".sidebar-container").addClass('active');
    jQuery("header").fadeOut();
    

  });
  jQuery(".close-icon").click(function () {
    jQuery(".sidebar-container").removeClass('active');
    jQuery('header').fadeIn();

  });

  jQuery('.title').on('click', function () {
    var findElm = jQuery(this).next(".box");
    jQuery(findElm).slideToggle();
    if (jQuery(this).hasClass('close')) {
      jQuery(this).removeClass('close');
    } else {
      jQuery(this).addClass('close');
    }
  
  });


});