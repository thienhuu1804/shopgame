function ajax(masp) {
	$.ajax({
		type:"GET",
		url:"xuly.php",
		data: {"masp":masp}
	}).done(function(data){
		alert(data);
		$('.badge.badge-secondary').text(JSON.parse(data).tongsl);
	})
}
function xoa(masp)
{
	$.ajax({
		type:"GET",
		url:"updatet.php",
		data:{"masp":masp}
	}).done(function(data){
		alert(data);
		$('.badge.badge-secondary').text(data);
		$('tr#'+masp).hide();
	})
}