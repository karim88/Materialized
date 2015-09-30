(function($) {
  var has_child = $('.menu-item-has-children');
  var sub_menu  = $('.dropdown-content');
  has_child.addClass('dropdown-button');
  for (var i=0; i < has_child.length; i++) {
    $('.dropdown-content:eq('+i+')').attr('id', 'dropdown'+i);
    $('.menu-item-has-children:eq('+i+')').attr('data-activates', 'dropdown'+i);
    $('.menu-item-has-children:eq('+i+')').attr('data-beloworigin', 'true');
  }

  $('img').addClass('materialboxed');
  $('img.avatar').removeClass('materialboxed');
  //initializing Mobile Nav
  $(".button-collapse").sideNav();

  //initializing masonry jquery plugin
  $('.grid').masonry({
    itemSelector: '.grid-item'
  });
}(jQuery));
