$(window).load(function () {
  
  /* function() -> checks value inside textbox */
  $('.form-row input').bind('checkValue', function () {
    var label = $(this).prev('label');
    if(this.value !== '') {
      label.addClass('show');
    } else {
      label.removeClass('show');
    }
  });

  $('.form-row input').on('keyup', function () {
    $(this).trigger('checkValue');
      }).on('focus', function () {
    $(this).prev('label').addClass('display');
      }).on('blur', function () {
    $(this).prev('label').removeClass('display');
      }).trigger('checkValue');

});