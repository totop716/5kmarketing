$(document).ready(function(){
  $('.gotoprevstep').hide(); $('.submitform').hide(); $('#app_step2_form').hide();
  $('.whatisavailable').hide(); $('.retirementpart').hide(); $('.rebooktalktime').hide();
  $('.additionalsalepossible input').click(function(){
    if($(this).val() == '1'){
      $('.whatisavailable').show();
      $('.retirementpart').hide();
    }else{
      $('.whatisavailable').hide();
      $('.retirementpart').show();
    }
  });
  $('.retirementpart input').click(function () {
    if ($(this).val() == '1') {
      $('.rebooktalktime').show();
    }else{
      $('.rebooktalktime').hide();
    }
  });
  $('.gotoprevstep').click(function(){
    var current_step = parseInt($('li.step-item.current').attr('step'));
    $('.complete-text .percent').html(((current_step-2) / $('li.step-item').length * 100) + '%');
    $('li.step-item').each(function () {
      if ($(this).attr('step') < current_step - 1) {
        $(this).addClass('active');
      }else{
        $(this).removeClass('active');
      }
    });
    $('li.step-item.current').removeClass('current');
    $('li#app_step' + (current_step - 1)).addClass('current');
    $('#app_step' + (current_step) + '_form').hide();
    $('#app_step' + (current_step - 1) + '_form').show();
    if (current_step == 2) {
      $('.gotoprevstep').hide();
      $('.submitform').hide();
    }
    $('.gotonextstep').show();
  })
  $('.gotonextstep').click(function(){
    var current_step = parseInt($('li.step-item.current').attr('step'));
    $('.complete-text .percent').html((current_step / $('li.step-item').length * 100) + '%');
    $('li.step-item').each(function(){
      if($(this).attr('step') <= current_step){
        $(this).addClass('active');
      }
    });
    $('li.step-item.current').removeClass('current');
    $('li#app_step'+(current_step+1)).addClass('current');
    $('#app_step' + (current_step) + '_form').hide();
    $('#app_step'+(current_step+1)+'_form').show();
    if(current_step == 1){
      $('.gotoprevstep').show();
    }
    if (current_step == $('li.step-item').length - 1){
      $('.gotonextstep').hide();
      $('.submitform').show();
    }
    if ($('#appointmentStatus').val() == 'sale'){
      $('#app_step' + (current_step + 1) + '_form').find('.sale-part').show();
      $('#app_step' + (current_step + 1) + '_form').find('.nosale-part').hide();
    } else if ($('#appointmentStatus').val() == 'nosale'){
      $('#app_step' + (current_step + 1) + '_form').find('.sale-part').hide();
      $('#app_step' + (current_step + 1) + '_form').find('.nosale-part').show();
    } else{
      $('#app_step' + (current_step + 1) + '_form').find('.sale-part').hide();
      $('#app_step' + (current_step + 1) + '_form').find('.nosale-part').hide();
    }
  });
});