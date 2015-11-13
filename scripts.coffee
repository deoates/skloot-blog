$ ->

  contentOffset = $('div.entry-content').offset()

  $('.vertical-social').css
    left: contentOffset.left - 150

  if $('body').hasClass('single')
    $(window).scroll (e) ->
      if $(window).scrollTop() >= contentOffset.top - (85)
        $('aside.sidebar').addClass 'hide'
        $('.vertical-social').addClass 'show'
      else
        $('aside.sidebar').removeClass 'hide'
        $('.vertical-social').removeClass 'show'

  $('a[data-href="show-search"]').click (e) ->
    do e.preventDefault
    $('.header-search').toggleClass 'open'

