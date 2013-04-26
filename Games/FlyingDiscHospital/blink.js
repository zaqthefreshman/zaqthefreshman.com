/*
var allElements = $("*");

$(document).load(function() {
	setInterval(setColor, 1000);
});

function randColor() {
	var hex = Math.round(Math.rand() * 273);
	return hex.toString(16);
}

function setColor() {
	for (var i = 0; i < allElements.length; i++)
	{
		allElements[i].css("background-color", randColor());
		allElements[i].css("border-color", randColor());
	}
}
*/

window.onload = function()
{
	setInterval(
		function()
		{
			var allElements = $("*");
			allElements.css("background-color", "#" + (Math.floor(Math.random() * 16777216)).toString(16));
			allElements.css("border-color", "#" + (Math.floor(Math.random() * 16777216)).toString(16));
		},
		250
	);
};