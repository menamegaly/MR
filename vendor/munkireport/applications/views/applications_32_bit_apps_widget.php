	<div class="col-lg-4 col-md-6">
	<div class="panel panel-default" id="32-bit-apps-widget">
		<div class="panel-heading" data-container="body" >
			<h3 class="panel-title"><i class="fa fa-code"></i>
    			<span data-i18n="applications.32_bit_apps"></span>
    			<list-link data-url="/show/listing/applications/applications"></list-link>
			</h3>
		</div>
		<div class="list-group scroll-box"></div>
	</div><!-- /panel -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {
	
	var box = $('#32-bit-apps-widget div.scroll-box');
	
	$.getJSON( appUrl + '/module/applications/get_32_bit_apps', function( data ) {
		
		box.empty();
		if(data.length){
			$.each(data, function(i,d){
				var badge = '<span class="badge pull-right">'+d.count+'</span>';
                box.append('<a href="'+appUrl+'/show/listing/applications/applications/#'+d.name+'" class="list-group-item">'+d.name+badge+'</a>')
			});
		}
		else{
			box.append('<span class="list-group-item">'+i18n.t('applications.no_32_bit')+'</span>');
		}
	});
});	
</script>

