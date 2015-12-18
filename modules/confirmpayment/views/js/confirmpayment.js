 $(function() {
    $('.picZoomer').picZoomer();
    $('.fancybox-inner').addClass('picZoomer');
});

$(window).load(function() {
		$( ".nav-tabs li:first" ).addClass( "active" );
		$( ".tab-content .tab-pane:first" ).addClass( "active" );
});

 $(document).ready(function(){
	$('#datepicker').datepicker({
		dateFormat : 'yy-mm-dd'
	});	
});