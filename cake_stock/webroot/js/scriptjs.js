$('document').ready(function(){
	$('#search').keyup(function(){
		$.ajax({
			method: 'get',
			url : "<?= $this->Url->build(['controller' => 'Stock','action' => 'testajax']); ?>",
			data: {keyword:$(this).val()},
			success: function( response )
			{       
				alert(response);
				//$( '.table-content' ).html(response);
			}
		});
	});
});