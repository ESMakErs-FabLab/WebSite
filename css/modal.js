
var a = document.getElementsByTagName("a");
var buttons = document.getElementsByTagName("button");
var globalModal = null;

for (var i = 0; i < a.length; i++)
{
	a[i].onmouseover = function() {
		this.style.cursor = "pointer";
	}

	a[i].onclick = function() {
		this.onmouseover
		DisplayModal(this);
	}
}

for (var i = 0; i < buttons.length; i++)
	buttons[i].onclick = function() {
		DisplayModal(this);
	}

window.onclick = function(event) {
	if (event.target == globalModal)
		globalModal.style.display = "none";
}

function DisplayModal(element)
{
	if (element.getAttribute("target") != null)
	{
		globalModal = document.getElementById(element.getAttribute("target"));
		if (globalModal != null)
			globalModal.style.display = "block";
	}
}