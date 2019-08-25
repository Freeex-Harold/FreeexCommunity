function xhrPost(url, data) {
  var csrf = {
    fx_csrf_name: $.cookie('fx_csrf_cookie'),
    ...data
  };

  $.ajax({
    url: url,
    data: csrf,
    type: 'POST',
    dataType: 'json'
  });
}

function openMenu() {
  $('.onoff-btn').find('span').attr('uk-icon', 'chevron-left');
  setTimeout(function() {
    $('.menu-text').show();
  }, 200);
}

function closeMenu() {
  $('.onoff-btn').find('span').attr('uk-icon', 'chevron-right');
  $('.menu-text').hide();
}