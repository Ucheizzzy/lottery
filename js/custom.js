;(function ($) {
  'use strict'

  // MENU
  $('.navbar-collapse a').on('click', function () {
    $('.navbar-collapse').collapse('hide')
  })

  // CUSTOM LINK
  $('.smoothscroll').click(function () {
    var el = $(this).attr('href')
    var elWrapped = $(el)
    var header_height = $('.navbar').height()

    scrollToDiv(elWrapped, header_height)
    return false

    function scrollToDiv(element, navheight) {
      var offset = element.offset()
      var offsetTop = offset.top
      var totalScroll = offsetTop - navheight

      $('body,html').animate(
        {
          scrollTop: totalScroll,
        },
        300
      )
    }
  })
})(window.jQuery)

/**
 * Validate the contact form
 */

$(document).ready(function () {
  //Daily draw ajax
  $('#select').hide()
  $('#roll').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select').show(2000)
  })
  $('#select').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })

  const input = document.querySelector('#phone')
  window.intlTelInput(input, {
    initialCountry: 'ng',
    onlyCountries: ['ng'],

    utilsScript:
      'https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js',
  })
})
