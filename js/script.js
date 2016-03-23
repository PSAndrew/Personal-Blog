$(".contentContainer").css("min-height",$(window).height());

$("textarea").css("height",$(window).height()/1.5);

$("textarea").keyup(function(){
	$.post("entryupdate.php", {entry:$("textarea").val()});
});