var BaseUrl = $('meta[name=BaseUrl]').attr("content");

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

$(function(){
	$("input, textarea, select, button").uniform();
	$(".myform").uniform();
});
jQuery(document).ready(function(){
	//$('.content').css({'width':$(window).width()-165});
	//$('.cont-container').css({'width':$(window).width()-185});
	//$('.cont-container').css({'min-height':$(document).height()-60});
	$('#example').dataTable( {
		"sPaginationType": "bootstrap",
		"aoColumnDefs": [
							{ 'bSortable': false,'aTargets': [0,1]}
						]
		//'bStateSave':true
	});
	dataaction();
function dataaction(){
if(($('#example').height()+120)>840)
$('.cont-container').css({'min-height':$('#example').height()+150});
else
$('.cont-container').css({'min-height':840});
}
$('#search').keyup(function() {
var tr = 1;
dataaction();
$('#example tbody tr').each(function(){
	$(this).find('td:nth-child(2)').html(tr);
	tr++; 
});
});
$('.sorting').click(function() {
var tr = 1;
dataaction();
$('#example tbody tr').each(function(){
	$(this).find('td:nth-child(2)').html(tr);
	tr++; 
});
});
$('.pagination').click(function() {
var tr = ($('.pagination').find('ul li.active a').text() -1) * $('#pageselect').val() + 1;
dataaction();
$('#example tbody tr').each(function(){
	$(this).find('td:nth-child(2)').html(tr);
	tr++; 
});
});
$('#pageselect').click(function() {
var tr = ($('.pagination').find('ul li.active a').text() -1) * $('#pageselect').val() + 1;
dataaction();
$('#example tbody tr').each(function(){
	$(this).find('td:nth-child(2)').html(tr);
	tr++; 
});
$(this).prev('span').html($(this).find("option:selected").text());
});
$('#actionmsg').live('change',function() {
$(this).prev('span').html($(this).find("option:selected").text());
});
$('.actions').unbind('click');
  $(".sidemenu > li.normal").hover(function() {	  
  //do nothing if hovered over
  var position = $(this).position();
  var pos = $(this).position().top - $(window).scrollTop()+30;
  if((parseInt($(window).height()) - parseInt(pos)) < $(this).find('ul').height() )
  $(this).find('ul').css({'top':(parseInt($(window).height()-30) - parseInt(pos)) - $(this).find('ul').height()+'px','border':'2px solid #ececec','border-left':'none','border-top':'none'});
  else
  $(this).find('ul').css({'border':'1px solid #ececec','border-left':'none','border-top':'none'});
  $(this).find('ul').slideToggle('slow');
 }, function(){
  //hide on hover out
  $('.sidemenu li.normal ul').hide();   
  $('.sidemenu li ul').attr('style', '');   
 });
	// binds form submission and fields to the validation engine
	jQuery("#myForm").validationEngine('attach', { 
		autoHidePrompt:true,
		autoHideDelay:3000,
		onValidationComplete: function(form, status){
			if (status == true) {           
				jQuery('.helpfade').show();
				jQuery('.helptips').show();
				/*var id = $('.ckeditor').attr('id');
				if(typeof id !='undefined'){
					var editorcontent = CKEDITOR.instances[id].getData().replace(/<[^>]*>/gi, '');
					if (editorcontent.length<=10){
						jQuery('.helpfade').hide();
						jQuery('.helptips').hide();
						message("This field is required, Please give minimum 10 characters in the field of "+id);
						return false;
					}
				}*/
				form.validationEngine('detach');
				form.submit();
			}
		}
	});
	jQuery("#myForm1").validationEngine('attach', {
		autoPositionUpdate : true, 
		autoHidePrompt:true,
		autoHideDelay:3000,
		onValidationComplete: function(form, status){
			if (status == true) {           
				jQuery('.helpfade').show();
				jQuery('.helptips').show();
				var id = $('.ckeditor').attr('id');
				if(typeof id !='undefined'){
					var editorcontent = CKEDITOR.instances[id].getData().replace(/<[^>]*>/gi, '');
					if (editorcontent.length<=10){
						jQuery('.helpfade').hide();
						jQuery('.helptips').hide();
						message("This field is required, Please give minimum 10 characters in the field of "+id);
						return false;
					}
				}
				form.validationEngine('detach');
				form.submit();
			}
		}
	});
	$(".projectmenu li").click( function(){// When a top menu item is clicked...
		$(".projectmenu").find("ul").slideUp("normal"); // Slide up all sub menus except the one clicked
		$(this).find("ul").slideDown("normal");
	});
	
	$("[rel=imports]").fancybox({	
		'width'				: '6',
		'height'			: '4',
		'autoScale'			: false,
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'changeFade'		: 'slow',
		'type'				: 'iframe',
		'speedIn'           : 1000,
		'speedOut'          : 1000, 
		//'onClosed'			: function() {test();},
		'centerOnScroll'	: true,
		'onClosed'			: function() {
						parent.$('.helpfade').hide();
						parent.$('.helptips').hide();
						parent.location.reload(true); }
	});

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});	
	
	$("#StaticpageType").live('change',function(){
		if($(this).val()==0){
			$('#StaticpageContent').html('this is test message');
			$('#StaticpageContent').parent('dd').hide();
			$('#StaticpageContent').parent('dd').prev('dt').hide();
		}
		else{
			$('#StaticpageContent').html('');
			$('#StaticpageContent').parent('dd').show();
			$('#StaticpageContent').parent('dd').prev('dt').show();
		}
	});

	
	jQuery('a').click(function(){
		jQuery('.helpfade').show();
		jQuery('.helptips').show();
		if($(this).attr('href')=='#' || $(this).attr('target')=='_blank'){
			jQuery('.helpfade').hide();
			jQuery('.helptips').hide();
		}
	});
	
	$('#pricecatid').change(function(){
		$('#pricefetures').html(eval('pricefeatures'+$(this).val()));
	});
	$('#pricefetures input[type=checkbox]').live('click',function(){	
		if($(this).is(':checked')){
			$(this).attr('checked', 'checked');
			$(this).parents('div.checkbox').find('.checker span').attr('class','checked');
		}
		else{
			$(this).removeAttr('checked');
			$(this).parents('div.checkbox').find('.checker span').removeAttr('class');
		}
	});
	
	$('#action_btn').live('click',function(){
		var mg = $('#actionmsg').val();
		if($("input[rel=action]:checked").length>0){	
			var result = $.confirm({
				'title'		: mg+' Confirmation',
				'message'	: 'You are about to '+mg+' this item! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
							$('#myForm').submit();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
			if(!result)		
			return false;
		}
	});
	
	$('.confirdel').live('click',function(evt){
		//var action = $(this).parents('a').attr('href');
		jQuery('.helpfade').hide();
			jQuery('.helptips').hide();

		var action = $(this).attr('href');
		var result = $.confirm({
			'title'		: 'Delete Confirmation',
			'message'	: 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
			'buttons'	: {
				'Yes'	: {
					'class'	: 'blue',
					'action': function(){
						window.location = action;
					}
				},
				'No'	: {
					'class'	: 'gray',
					'action': function(){							
							$('.helpfade').hide();
							$('.helptips').hide();
						}	// Nothing to do in this case. You can as well omit the action property.
				}
			}
		});
		if(!result)		
		return false;
	});
	
	$(".gtable tr:nth-child(odd)").addClass('odd');
 	$(".gtable tr:nth-child(even)").addClass('even');
	
	$('.gtable tbody tr').live('click',function(e){
		if (e.target.tagName.toUpperCase() != "INPUT") {
			if($(this).find('input:checkbox').length){
				if($(this).find('input:checkbox').is(':checked')){
					$(this).find('input[type=checkbox]').removeAttr('checked');
					$(this).find('.checker span').removeAttr('class');
					$(this).find('td').removeAttr('class');
				}
				else{
					$(this).find('input[type=checkbox]').attr('checked', 'checked');
					$(this).find('.checker span').attr('class','checked');
					$(this).find('td').attr('class','extra');
				}
			}
		}
		else{
			if($(this).find('input:checkbox').is(':checked'))
				$(this).find('td').attr('class','extra');
			else
				$(this).find('td').removeAttr('class');
		}
	});

	$('#checkAllAuto').live('click',function(evt){
		if($(this).is(':checked')){
			$('input[type=checkbox]').attr('checked', 'checked');
			$('.checker span').attr('class','checked');
			$('.gtable tbody tr').find('td').attr('class','extra');
		}
		else{
			$('input[type=checkbox]').removeAttr('checked');
			$('.checker span').removeAttr('class');
			$('.gtable tbody tr').find('td').removeAttr('class');
		}
	});
	
	$(".logintab").click(function () {
		$('.emailformError').remove();
		$('#email').val('');
		$('.forgotBox').slideUp('normal', function() {
			$('.loginBox').slideDown(function() {
			});
		});
	});
	
	$(".forgottab").click(function () {
		$('.usernameformError').remove();
		$('.passwordformError').remove();
		$('#username').val('');
		$('#password').val('');
		$('.loginBox').slideUp('normal', function() { 
			$('.forgotBox').slideDown(function() {
			});
		});
	});
	
	
	
	$('#savebtn').click(function(){
		var menus = new Array();
		$(".savetxt").each(function() {
			 menus.push($(this).val());
		});
		var results = new Array();
          
          for (var j=0; j<menus.length; j++) {
              var key = menus[j].toString(); // make it an associative array
              if (!results[key]) {
                  results[key] = 1
              } else {
                  //results[key] = results[key] + 1;
				  message('<div class="error msg">Invalid menu position</div>,Something wrong you are enter in the order of menu position. So please correct and then save menu order.');
					return false;
              }
          }
			$.ajax({
			type: "POST",
			url: "staticpages/index",
			data: $("#myForm").serialize(),
			success: function(msg){
				//window.location.reload();
			}
			});
	});
	$('.chat').on('click',function(){
		jQuery('.helpfade').hide();
		jQuery('.helptips').hide();
		var rel=$(this).attr('rel');
		my_window=window.open(BaseUrl+'cschat/admin/index.php?id='+rel, 'Preview','width=760,height=600,scrollbars=yes'); 
		//window.open(BaseUrl+'cschat/admin/index.php?id=1', 'Preview','width=760,height=600,scrollbars=yes'); 
	});

     $('.chat2').on('click',function(){
		jQuery('.helpfade').hide();
		jQuery('.helptips').hide();
		var rel=$(this).attr('rel');
		my_window=window.open(BaseUrl+'admins/chat?id='+rel, 'Preview','width=760,height=600,scrollbars=yes'); 
		//window.open(BaseUrl+'cschat/admin/index.php?id=1', 'Preview','width=760,height=600,scrollbars=yes'); 
	});
	$('.chat3').on('click',function(){
		jQuery('.helpfade').hide();
		jQuery('.helptips').hide();
		var rel=$(this).attr('rel');
		my_window=window.open(BaseUrl+'admins/chat?id='+rel, 'Preview','width=760,height=600,scrollbars=yes'); 
		//window.open(BaseUrl+'cschat/admin/index.php?id=1', 'Preview','width=760,height=600,scrollbars=yes'); 
	});
	
	 $('.chat1').on('click',function(){
		jQuery('.helpfade').hide();
		jQuery('.helptips').hide();
		var rel=$(this).attr('rel');
		my_window=window.open(BaseUrl+'admins', 'Preview','width=760,height=600,scrollbars=yes'); 
		//window.open(BaseUrl+'cschat/admin/index.php?id=1', 'Preview','width=760,height=600,scrollbars=yes'); 
	});
	
	$('.chat3').live('click',function(evt){
		jQuery('.helpfade').hide();
		jQuery('.helptips').hide();
		var rel=$(this).attr('rel');
		my_window=window.open(BaseUrl+'admins/chat?id='+rel, 'Preview','width=760,height=600,scrollbars=yes'); 
	});
	
	
	
	/*window.onbeforeunload = function() {
    return "Are you sure?";
 };
 window.onunload=function(){alert('');};*/
 
$('.scon').on('click',function(){
		$('.sneed').show();
		$('.seoneed').show();
	});
$('.smanage').on('click',function(){
		$('.sneed').hide();
		$('.seoneed').show();
	});

    $('.logout').click(function() {
		 my_window.close ();
    });
	
	$(".texttab").click(function () {
		$('.texttabBox').slideUp('normal', function() { 
			$('.edittabBox').slideDown(function() {
			});
		});
	});

	$('input[rel="genpro"]').live('click',function(evt){
		if($(this).is(':checked'))
			$(this).parents('th').find('.checker span').attr('class','checked');
		else
			$(this).parents('th').find('.checker span').removeAttr('class');
	});
	
	/********** Dashboard ********************/
	


	
});