$(function () {

  $(".js-menu").click(function () {
    $(".sidebar-container").toggleClass('active');
    $(".sidebar-mask").toggleClass('active');

  });
  $(".close-icon").click(function () {
    $(".sidebar-container").toggleClass('active');
    $(".sidebar-mask").toggleClass('active');

  });

  $('.title').on('click', function () {
    var findElm = $(this).next(".box");
    $(findElm).slideToggle();
    if ($(this).hasClass('close')) {
      $(this).removeClass('close');
    } else {
      $(this).addClass('close');
    }
  
  });

  

});