$(function() {
	$('#form').hide();
	
	$('#show-form').on('click', function() {
		$('#form').show();
		$('#show-form-button').hide();
	});
	
	$('#hide-form').on('click', function() {
		$('#show-form-button').show();
		$('#form').hide();
	});
	
	$('#add-item').on('click', function() {
		var item = $('#item').val();
		
		if(item != '') {
			$.post('listaddajax.php', {item: item}, function(newid) {
				$('#my-list').append('<li class="my-list-item" id="my-list-item-' + newid + '" data-id="' + newid + '">' + item + '</li>');
				$('#item').val('');
				$('#show-form-button').show();
				$('#form').hide();
			});
		}
	});
	
	$('#my-list').on('click', '.my-list-item', function() {
		var id = $(this).data('id');

		$.post('listdeleteajax.php', {id: id}, function() {
			$('#my-list-item-'+id).remove();
		});
	});
});