$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="sekolah[]" placeholder="Detail sekolah" class="form-control name_list" /></td><td><input type="number" name="tahun[]" placeholder="Tahun Masuk" class="form-control name_list" /></td><td><input type="number" name="tahun2[]" placeholder="Tahun Lulus" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id_pendidikan"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"action.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
				$('#dynamic_field_modal').modal('hide');
			}
		});
	});

	$(document).on('click', '.delete', function(){	
		var id = $(this).attr("id_pendidikan");
		if(confirm("Hapus data?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{id:id},
				success:function(data)
				{
					load_data();
					alert("Data Dihapus");
				}
			});
		}
	});
});

$(window).on('load', function () {
	$('.left-bar').addClass('show');
})

$(window).scroll(function () { 
	const wScroll = $(this).scrollTop();
	
	// header parallax
	$('.header .photo').css({
		'transform' : 'translate(0px, -' + wScroll/6 + '%)'
	});

	$('.header .headtitle h1').css({
		'transform' : 'translate(0px, -' + wScroll/10 + '%)'
	});

	$('.header .header-content h3').css({
		'transform' : 'translate(0px, -' + wScroll/2 + '%)'
	});

	$('.header .header-content td').css({
		'transform' : 'translate(0px, -' + wScroll/3 + '%)'
	});

	// left-bar
	if(wScroll > $('.side-right-bar').offset().top - 420){
		$('.side-right-bar').addClass('side-right-bar-show');
	}
});