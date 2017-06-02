$('#button').click(function()
{
	var td = prompt("Quelle est votre tache?");
	if (td)
	{
		$.ajax({
			url: 'insert.php?td=' + td,
			success: function(res){
				$('#ft_list').html(res);
			}
		});
	}
});
