function message(msg){
	var msg = msg.split(',');
	var result = $.confirm({
		'title'		: msg[0],
		'message'	: msg[1],
		'buttons'	: {
			'Close'	: {
				'class'	: 'close',
				'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
			}
		}
	});
	if(!result)		
	return false;
}

$(document).ready(function(){
	
	$("#myForm").validationEngine();
	
	$('#recaptcha_response_field').addClass('validate[required]');
	
	$("#proposalform").validationEngine('attach', {promptPosition : "topLeft", autoPositionUpdate : true});
	
	$("input").keypress(function(evt){
		if(evt.which === 32){
			var len = $(this).val().length;
			if($(this).val().substr((parseInt(len) - 1),len)==" "){
				$(this).val().slice((parseInt(len) - 1),len);
			 return false;
			}
		}
	});
	$("body").keypress(function(evt){
			//alert('');
		if(evt.which === 17) //17 is ascii code for ctrl
		{
			evt.keyCode = 0;
			evt.cancelBubble = true;
			return false;
		} 
	});
	//Cufon.replace('h1, h2, p');
	/*$('input').bind("cut copy paste",function(evt) {
		evt.preventDefault();
	});
	$('textarea').bind("cut copy paste",function(evt) {
		evt.preventDefault();
	});*/
	
	$('.indiadet').click(function(){		
		$('.homepage').slideUp('normal', function() {
			$('.investindia').slideDown(function() {
			});
		});
	});
	
	$('.homedet').click(function(){		
		$('.investindia').slideUp('normal', function() {
			$('.homepage').slideDown(function() {
			});
		});
	});
    //On Select Event
    $("select").each(function(){
		$(this).css({'opacity':0,'filter':'alpha(opacity=0)'});
		$(this).parent('dd').css({'position':'relative'});
		$(this).before('<div class="formfieldsbg"></div><span class="selectopt">Active</span>');
		$(this).prev('span').html($(this).find("option:selected").text());		
		//$(this).find('option[value=97]').css({'color':'#3A3AFF','font-weight':'bold'});
		//$(this).find('option:contains(India)').css({'color':'#3A3AFF','font-weight':'bold'});
		if($(this).find('option[value=97]').text()=='India')
		$(this).find('option[value=97]').css({'color':'#3A3AFF','font-weight':'bold'});
    });
    //On Select Event
    $("input[type=file]").each(function(){
		$(this).css({'opacity':0,'filter':'alpha(opacity=0)'});
		$(this).parent('dd').css({'position':'relative'});
		$(this).before('<span class="filetxt">No file selected</span><div class="formfilebg"></div>');
    });
    //On Change Event
    $("input[type=file]").change(function(){
		$(this).parent('dd').find('span.filetxt').html($(this).val().substr(0,15));
    });
    //On Select Event
    $("input[type=checkbox]").each(function(){
		$(this).css({'opacity':0,'filter':'alpha(opacity=0)'});
		$(this).parent('div').addClass('checkbox');
		$(this).before('<span></span>');
    });
    //On click Event
    $("input[type=checkbox]").click(function(){
		if($(this).prop("checked")){
			//box was just unchecked, uncheck span
			$(this).prev('span').addClass('checked');
		}else{
			//box was just checked, check span.
			$(this).prev('span').removeClass('checked');
		}
    });
    //On Select Event
    $("input[type=radio]").each(function(){
		$(this).css({'opacity':0,'filter':'alpha(opacity=0)'});
		$(this).before('<span></span>');
    });
    //On click Event
    $("input[type=radio]").click(function(){
		$('div.radiobtns').find('span').removeClass('radiochecked');
		if($(this).prop("checked")){
			$(this).prev('span').addClass('radiochecked');
		}else{
			//box was just unchecked, uncheck span
			$(this).prev('span').removeClass('radiochecked');
		}
    });
    //On Change Event
    $("select").change(function(){
		if($(this).attr('class')!='property_options')
		$(this).prev('span').html($(this).find("option:selected").text());
    });
    //On input Event
    $("input[type=text]").each(function(){
		$(this).before('<span class="inputbox"></span>');
    });
    //On input Event
    $("input[type=password]").each(function(){
		$(this).before('<span class="inputbox"></span>');
    });
    //On input Event
   /* $("input[type=submit].btns").each(function(){
		$(this).parent('dd').css({'position':'relative'});
		$(this).css({'width':$(this).attr('value').length*11+'px'});
		$(this).before('<span class="span"></span><span class="btn-text">'+$(this).attr('value')+'</span>');
    });*/
	
	$('#nav li').hover(
	function () {
	$('#slidedownmenu', this).stop(true, true).slideDown(); /*slideDown the subitems on mouseover*/
	}, function () {
	$('#slidedownmenu', this).stop(true, true).slideUp(100);  /*slideUp the subitems on mouseout*/
	});
	$('#slidedownmenu li').hover(
	function () {
	$('#sidemenu', this).stop(true, true).slideDown(); /*slideDown the subitems on mouseover*/
	}, function () {
	$('#sidemenu', this).stop(true, true).slideUp(100);  /*slideUp the subitems on mouseout*/
	});	
	
	$('#price-menu li:first-child').addClass('buttonHover');
	$('.web-price-container').eq(0).addClass('show');
	
	
	$('.portfolio-menu li').click(function(){
		$('.portfolio-menu li').removeClass('buttonHover');
		$(this).addClass('buttonHover');
	});
	
	$('.price-menu li').click(function(){
		$('.price-menu li').removeClass('buttonHover');
		$('.web-price-container').fadeOut(500);
		$(this).addClass('buttonHover');
		$('div [data-tags='+$(this).attr('data-option-value')+']').fadeIn(500);
	});
	$('#steps li').eq(0).addClass('show').addClass('current');
	$('#steps li').last().css('right', '-2px');
	
	
	$('.openings a.read-more').click(function(){
		$('div.openings').find('p.short-desc').slideDown('slow');
		$('div.openings').find('.careerdetails').hide();
		$(this).parents('div.openings').find('p.short-desc').slideUp('slow');
		$(this).parents('div.openings').find('.careerdetails').slideDown('slow');
		$('html, body').animate({ scrollTop: $(this).parents('div.openings').offset().top }, 500);
	});

});

function viewcvv(){
	$('#viewcvv').show();
}
function viewcvv1(){
	$('#viewcvv').hide();
}