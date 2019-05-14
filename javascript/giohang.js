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
			data:{"masp":masp,
			"xoa":1}
		}).done(function(data){
			update (data,masp);
			$('tr#'+masp).hide();
		})
	}
}
function tangsanpham (masp)
{
	var sl = $('tr#'+masp+' td:eq(3) input#itemAmount').val();
	sl = Number(sl)+1;
	$('tr#'+masp+' td:eq(3) input#itemAmount').val(sl);
	$.ajax({
		type:"GET",
		url:"updatet.php",
		data:{"masp":masp,
		"soluong":sl,
		"xoa":0}
	}).done(function(data){	
		//$('.col-md-12 tr td:eq(4)').text(formatNumber(JSON.parse(data).tien,".",",")+" vnđ");
		$('tr#'+masp+' td:eq(4)').text(formatNumber(JSON.parse(data).tien,".",",")+" vnđ");
		update (data,masp);
	})
}
function giamsanpham (masp)
{
	var sl = $('tr#'+masp+' td:eq(3) input#itemAmount').val();
	sl = Number(sl)-1;
	if (sl<1)  sl=1;
	$('tr#'+masp+' td:eq(3) input#itemAmount').val(sl);
	$.ajax({
		type:"GET",
		url:"updatet.php",
		data:{"masp":masp,
		"soluong":sl,
		"xoa":0}
	}).done(function(data){
		$('tr#'+masp+' td:eq(4)').text(formatNumber(JSON.parse(data).tien,".",",")+" vnđ");
		update (data,masp);
	})

}
function nhapsosanpham (masp)
{
	var sl = $('tr#'+masp+' td:eq(3) input#itemAmount').val();
	if (sl<1)  sl=1;
	$('tr#'+masp+' td:eq(3) input#itemAmount').val(sl);
	$.ajax({
		type:"GET",
		url:"updatet.php",
		data:{"masp":masp,
		"soluong":sl,
		"xoa":0}
	}).done(function(data){
		$('tr#'+masp+' td:eq(4)').text(formatNumber(JSON.parse(data).tien,".",",")+" vnđ");
		update (data,masp);
	})
}
function formatNumber(nStr, decSeperate, groupSeperate) {
	nStr += '';
	x = nStr.split(decSeperate);
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
	}
	return x1 + x2;
}
function update(data,masp)
{
	$('.badge.badge-secondary').text(JSON.parse(data).tongsl);
	$('#tongsoluong').text(JSON.parse(data).tongsl);
	$('#tongsotien').text(formatNumber(JSON.parse(data).tongtien,".",",")+" vnđ");
	if(JSON.parse(data).tongsl == 0)
	{
		$('.col-sm-9.right').html(`<img class="img-responsive" width="900x" height=500px" src="img/giohangrong.png">
			<a href="http://localhost:8080/DoAn/shopgame/index.php?page=home"><button type="button" class="btn btn-warning">Mua ngay</button></a>`);
	}
}
