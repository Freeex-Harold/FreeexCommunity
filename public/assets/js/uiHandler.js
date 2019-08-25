$(document).ready(function() {
  $('.onoff-btn').on('click', function(e) {
    e.preventDefault();

    var isOpen = $('.aside').hasClass('open');
    if (isOpen) {
      $('.aside').removeClass('open');
      $('.aside').addClass('close');
      var data = {
        status: 0
      };
      xhrPost('/set_menu', data);
      closeMenu();
    } else {
      $('.aside').removeClass('close');
      $('.aside').addClass('open');
      var data = {
        status: 1
      };
      xhrPost('/set_menu', data);
      openMenu();
    }
  });
});