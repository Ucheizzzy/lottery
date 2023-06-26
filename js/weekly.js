$(document).ready(function () {
  //weekly draw
  //button one
  $('#select_one').hide()
  $('#roll_one').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select_one').show(2000)
  })
  $('#select_one').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })

  //button two
  $('#select2').hide()
  $('#roll2').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select2').show(2000)
  })
  $('#select2').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })

  //button three
  $('#select3').hide()
  $('#roll3').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select3').show(2000)
  })
  $('#select3').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })

  //button four
  $('#select4').hide()
  $('#roll4').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select4').show(2000)
  })
  $('#select4').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })

  //button five
  $('#select5').hide()
  $('#roll5').on('click', function (e) {
    e.preventDefault()
    $(this).hide()
    $('#select5').show(2000)
  })
  $('#select5').on('click', function (e) {
    e.preventDefault()
    $(this).show(2000)
  })
})
