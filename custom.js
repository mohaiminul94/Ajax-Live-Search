$(document).ready(function() {
	$('#search').keyup(function() {
		var sValue= $('#search').val();
		// alert(sValue);
		$.ajax({
			url:'search.php',
			data:'uSearch='+sValue,
			success: function(data) {
				var resultCount= $('#feedback').html(data).find('tr').length;
				$('#result').html(resultCount);
			}
		});
	});
});
