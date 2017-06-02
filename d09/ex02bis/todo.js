function strIsEmpty(str) {
	return (str.length === 0 || !str.trim());
}

function check ()
{
	$('#ft_list').html(decodeURIComponent(getCookie('todo')));
}

function getCookie(name)
{
	var nom = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(nom) == 0) return c.substring(nom.length,c.length);
	}
	return "";
}

function setCookie(name, value, exdays)
{
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = name + "=" + value + "; " + expires;
}


$('#button').click(function()
{
	var td = prompt("Quelle est votre tache?");
	if (!strIsEmpty(td))
	{
		$("#ft_list").prepend("<div class=td onclick=del(this)>" + td + "</div>");
		var c = $("#ft_list").html();
		setCookie('todo', encodeURIComponent(c), 1);
	}
});



function del(i)
{
	if (confirm("Voulez vous vraiment effacer cette tache ?"))
	{
		$(i).remove();
		var c = $("#ft_list").html();
		setCookie('todo', encodeURIComponent(c), 1);
	}
}
