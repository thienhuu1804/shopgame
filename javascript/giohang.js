function ajax(masp) {
    if(confirm("Bạn muốn thêm vào giỏ hàng?")){
        $.ajax({
		type:"GET",
		url:"xuly.php",
		data: {"masp":masp}
	}).done(function(data){
		$('.badge.badge-secondary').text(JSON.parse(data).tongsl);
	})
    }
}
function xoa(masp){
    if(confirm("Bạn muốn xóa khỏi giỏ hàng?")){
        $.ajax({
		type:"GET",
		url:"updatet.php",
		data:{"masp":masp}
	}).done(function(data){
		$('.badge.badge-secondary').text(data);
		$('tr#'+masp).hide();
	})
    }
}