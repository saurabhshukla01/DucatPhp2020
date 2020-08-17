(function(){

function validateEmail(email) { 
     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(email);
  }
  
  $(function () {

  
    
    opts1 = [100,200,300,400,500,600,700,800,900,1000];
    $("#slider1").slider({
      value: 5,
      orientation: "horizontal",
      range: "min",
      min: 0,
      max: opts1.length-1,
      slide: function( event, ui ) {
        var id = $(this).attr("id").substr('slider'.length);
        jQuery(".amount"+id).val(opts1[ui.value]);
        jQuery(this).find('.ui-slider-handle').text( "$"+opts1[ui.value]);
      }
    }).draggable();
    $("#slider1").children(".ui-slider-handle").text( "$"+opts1[$("#slider1" ).slider( "value" )]);
    
    jQuery( ".amount1" ).val( opts1[$("#slider1" ).slider( "value" )] );
    
  $('#contact input').focus(function(){
    $(this).removeClass('error-input');
  });
  $('#contact textarea').focus(function(){
    $(this).removeClass('error-input');
  });
  $('.contact-form input').focus(function(){
    $(this).parents('.form-group').removeClass('has-error');
  });
  
  var validateInput = function(input){
    input.parents('.form-group, .checkbox').find('.success').remove();
    if(input.attr('type')=='email'&&!validateEmail(input.val())) { input.parents('.form-group').addClass('has-error'); return false; }
    else if(input.attr('type')=='checkbox'&&!input.prop('checked')) { input.parents('.checkbox').addClass('has-error'); return false; }
    else if(input.attr('type')!='checkbox'&&input.val()=='') { input.parents('.form-group').addClass('has-error'); return false; }
    else {
      if(input.attr('class')!='amount1'){
        input.parents('.form-group').append('<span class="success"></span>');
      }
    }
    return true;
  }
  $('.validate input').focus(function(){
    $(this).parents('.form-group, .checkbox').removeClass('has-error');
    $(this).parents('.form-group .success, .checkbox .success').remove();
  });
  $('.validate input').blur(function(){
    validateInput($(this));
  });
  $('.validate').submit(function(){
    result=true;
    var inputs=$(this).find('input[type=text], input[type=checkbox], input[type=email]');
    for(i=0;i<inputs.length;i++) { if(!validateInput(inputs.eq(i))) { result=false; }; }
    return result;
  });
  
    $('.faq-page ul h3 a').click(function(ev){  
      $('.faq-page ul li').removeClass('active');
      $(this).parents('.faq-page ul li').toggleClass('active');
      ev.preventDefault();
    })
    
    //$('.form-group.select').selectitem();
  
  });
})();