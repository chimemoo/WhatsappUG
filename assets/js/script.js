$('#generate').click(function(){
	var num = $('#numphone').val();
	var text = $('#text').val();

	if(num == '')
	{
		num=088888888888;
	}

	$.ajax({
		url : 'process.php?num='+num+'&text='+text,
		method : 'GET',
		type : 'JSON',
		success:function(data)
		{
			$('#link').val(data);
		}
	});
});