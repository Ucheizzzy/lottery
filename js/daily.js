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
})
