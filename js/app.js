(function($) {
  var has_child = $('#menu-main .menu-item-has-children');
  var sub_menu  = $('#menu-main .dropdown-content');
  has_child.addClass('dropdown-button');
  for (var i=0; i < has_child.length; i++) {
    $('#menu-main .dropdown-content:eq('+i+')').attr('id', 'dropdown'+i);
    $('#menu-main .menu-item-has-children:eq('+i+')').attr('data-activates', 'dropdown'+i);
    $('#menu-main .menu-item-has-children:eq('+i+')').attr('data-beloworigin', 'true');
  }
/*
  $('img').addClass('materialboxed');
  $('img.avatar').removeClass('materialboxed');
*/
  $('.page-numbers').addClass('waves-effect');
  $('.widget_search input#s').addClass('white');
  //initializing Mobile Nav
  $(".button-collapse").sideNav();

  //initializing masonry jquery plugin
  $('.grid').masonry({
    itemSelector: '.grid-item'
  });
}(jQuery));
