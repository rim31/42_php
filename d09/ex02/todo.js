var button = document.getElementById("button");
button.addEventListener("click", check);
button.addEventListener("click", todo);
var td = 0;

function strIsEmpty(str) {
	return (str.length === 0 || !str.trim());
}
function check ()
{
	var task = document.getElementById('ft_list');
	task.innerHTML = decodeURIComponent(getCookie('todo'));
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

function todo()
{
	var td1 = prompt("Quelle est votre tache?");
	if (!strIsEmpty(td1))
    {
		var container = document.getElementById('ft_list');
		var h = document.createTextNode(td1);
		var div = document.createElement("div");
		div.appendChild(h);
		div.setAttribute("id", td)
		div.setAttribute("onclick", "del(this)")
		container.insertBefore(div, container.firstChild);
		date=new Date;
		date.setMonth(date.getMonth()+1);
		date = date.toUTCString();
		setCookie('todo', encodeURIComponent(container.innerHTML), 1);
		td++;
	}
}

function del(i)
{
	 if (confirm("Voulez vous vraiment effacer cette tache ?"))
	 {
		var task = document.getElementById('ft_list');
		task.removeChild(i);
		setCookie('todo', encodeURIComponent(task.innerHTML), 1);


     }
}
