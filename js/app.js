(function($) {
  var has_child = $('#menu-pages .menu-item-has-children').not('#mobile-demo .menu-item-has-children');
  var sub_menu  = $('#menu-pages .dropdown-content');
  console.log(has_child);
  has_child.addClass('dropdown-button');
  for (var i=0; i < has_child.length; i++) {
    $('#menu-pages .dropdown-content:eq('+i+')').attr('id', 'dropdown'+i);
    $('#menu-pages .menu-item-has-children:eq('+i+')').attr({
      'data-activates': 'dropdown'+i,
      'data-beloworigin': 'true',
      'data-hover': 'true'
    });
  }


/*
  $('img').addClass('materialboxed');
  $('img.avatar').removeClass('materialboxed');
*/
  $('textarea').addClass('materialize-textarea');
  $('input[type="submit"]').addClass('btn waves-effect blue');
  $('textarea#comment').attr('placeholder', 'Your comment here...');
  $('.page-numbers, .comment-reply-link, #menu-pages .menu-item, #menu-pages li a').addClass('waves-effect');
  $('.widget_search input#s').addClass('white');
  //initializing Mobile Nav
  $(".button-collapse").sideNav();

  //initializing masonry jquery plugin
  $('.grid').masonry({
    itemSelector: '.grid-item'
  });
}(jQuery));
