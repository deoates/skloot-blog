(function() {
  $(function() {
    var contentOffset;
    contentOffset = $('div.entry-content').offset();
    $(window).resize(function(e) {
      return contentOffset = $('div.entry-content').offset();
    });
    $('.vertical-social').css({
      left: contentOffset.left - 150
    });
    if ($('body').hasClass('single')) {
      $(window).scroll(function(e) {
        if ($(window).scrollTop() >= contentOffset.top - 85.) {
          $('aside.sidebar').addClass('hide');
          return $('.vertical-social').addClass('show');
        } else {
          $('aside.sidebar').removeClass('hide');
          return $('.vertical-social').removeClass('show');
        }
      });
    }
    return $('a[data-href="show-search"]').click(function(e) {
      e.preventDefault();
      return $('.header-search').toggleClass('open');
    });
  });

}).call(this);
