(function($) {
  var has_child = $('#menu-main .menu-item-has-children');
  var sub_menu  = $('#menu-main .dropdown-content');
  has_child.addClass('dropdown-button');
  for (var i=0; i < has_child.length; i++) {
    $('#menu-main .dropdown-content:eq('+i+')').attr('id', 'dropdown'+i);
    $('#menu-main .menu-item-has-children:eq('+i+')').attr('data-activates', 'dropdown'+i);
    $('#menu-main .menu-item-has-children:eq('+i+')').attr('data-beloworigin', 'true');
    $('#menu-main .menu-item-has-children:eq('+i+')').attr('data-hover', 'true');
  }
/*
  $('img').addClass('materialboxed');
  $('img.avatar').removeClass('materialboxed');
*/
  $('textarea').addClass('materialize-textarea');
  $('input[type="submit"]').addClass('btn waves-effect blue');
  $('textarea#comment').attr('placeholder', 'Your comment here...');
  $('.page-numbers, .comment-reply-link, #menu-main .menu-item, #menu-main li a').addClass('waves-effect');
  $('.widget_search input#s').addClass('white');
  //initializing Mobile Nav
  $(".button-collapse").sideNav();

  //initializing masonry jquery plugin
  $('.grid').masonry({
    itemSelector: '.grid-item'
  });
}(jQuery));
