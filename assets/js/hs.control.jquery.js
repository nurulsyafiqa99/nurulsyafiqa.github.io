$(function () { $('.tooltip-show').tooltip('show');}); 
$(function () { $('.tooltip-hide').tooltip('hide');}); 
$(function () { $('.tooltip-destroy').tooltip('destroy');}); 
$(function () { $('.tooltip-toggle').tooltip('toggle');}); 
$(function () { $(".tooltip-options a").tooltip({html : true }); });
$(function () { $("[data-toggle='tooltip']").tooltip(); });

/*Validation*/
$(document).ready(function() {
			$('.form-horizontal').validate({
				rules: {
					username : {
						//digits: true,
						minlength:5,
						maxlength:15
					},
					titleRecipe: {
						required: true
					},
					category : {
						required: true
					},
					sex : {
						required:true
					},
					date: {
						indonesianDate:true
					},
					password2: {
						equalTo: "#password"
					}
				},
				messages: {
					username:{
						required: "Username harus diisi",
						minlength: "Username minimal 5 karakter",
						maxlength: "Username maksimal 15 karakter"
					
					},
					titleRecipe: {
						required: "Nama Resep Harus diisi",
					},
					password: {
						required: "Password harus diisi",
					},
					category: {
						required: "Password harus diisi",
					},
					sex: {
						required: "Jenis Kelamin harus dipilih",
					},
					password2: {
						required: "Password harus diisi",
						equalTo: "Password tidak sama"
					}
				}
			});
		});
		
		$.validator.addMethod(
			"indonesianDate",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
			},
			"Please enter a date in the format DD/MM/YYYY"
		);

//modals insert bahan
//parsing parameter
//insert Data
$(document).ready(function(){
	var id_recipe;
	var bahan;
	id_recipe = $("#idRecipe").val();

	$("#btnTambahBahan").click(function(){
		id_recipe = $("#idRecipe").val();
		bahan = $("#addBahan").val();
		$("#addBahan").focus();
		$.ajax({
			url: "module/manipulation_data.php",
			data: "execute=addBahan&id="+id_recipe+"&bahan="+bahan,
			cache:false,
			success:function(){
				$("#modalBahan").modal('hide');
				$(".view-bahan").load("module/manipulation_data.php","execute=view-bahan&id="+id_recipe);
				$("#addBahan").val("");
				$(".recipe-bahan").load("module/manipulation_data.php","execute=recipe-bahan&id="+id_recipe);
			}
		});
	});

	//Tambah Cara Pembuatan
	$("#btnAddMaking").click(function(){
		id_recipe = $("#idRecipe").val();
		addMaking = $("#addMaking").val();
		$.ajax({
			url: "module/manipulation_data.php",
			data: "execute=addMaking&id="+id_recipe+"&making="+addMaking,
			cache:false,
			success:function(){
				$("#modalAddMaking").modal('hide');
				$(".view-making").load("module/manipulation_data.php","execute=view-making&id="+id_recipe);
				$("#addMaking").val("");
				$(".recipe-making").load("module/manipulation_data.php","execute=recipe-making&id="+id_recipe);
			}
		});
	});
	//Tambah Gambar
	$("#btnAddImage").click(function(){
		var image = $('#addImage').val();
		$.ajax({
			url: "module/manipulation_data.php",
			data: "execute=addImage&id="+id_recipe+"&image="+addImage,
			cache:false,
			success:function(){
				$("#modalAddMaking").modal('hide');
				$(".view-making").load("module/manipulation_data.php","execute=view-making&id="+id_recipe);
				$("#addMaking").val("");
				$(".recipe-making").load("module/manipulation_data.php","execute=recipe-making&id="+id_recipe);
			}
		});
		alert("Tambah Image"+image);
		// id_recipe = $("#idRecipe").val();
		// addMaking = $("#addMaking").val();
		// $.ajax({
		// 	type:POST,
		// 	url: "module/manipulation_data.php",
		// 	data: "execute=addMaking&id="+id_recipe+"&making="+addMaking,
		// 	cache:false,
		// 	success:function(){
		// 		$("#modalAddMaking").modal('hide');
		// 		$(".view-making").load("module/manipulation_data.php","execute=view-making&id="+id_recipe);
		// 		$("#addMaking").val("");
		// 		$(".recipe-making").load("module/manipulation_data.php","execute=recipe-making&id="+id_recipe);
		// 	}
		// });
	});
	//menampilkan Modals
	$("#sendParameterImage").click(function(){
		var idParameter = $(this).data('id');
		$(".modal-body #idRecipe").val(idParameter);

	});
	$("#sendParameterBahan").click(function(){
		var idParameter = $(this).data('id');
		$(".modal-body #idRecipe").val(idParameter);
	});
	$("#sendParameterMaking").click(function(){
		var idParameter = $(this).data('id');
		$(".modal-body #idRecipe").val(idParameter);

	});

	//Delete Bahan
	$("#btnDeleteBahan").click(function(){
		var idParameter = $(this).data('id');
		//var idParameter = $(this).data('id');
		alert('delete'+idParameter);

	});
	//menampilkan Bahan

	$(".view-bahan").load("module/manipulation_data.php","execute=view-bahan&id="+id_recipe);
	$(".view-making").load("module/manipulation_data.php","execute=view-making&id="+id_recipe);

	//
	//Rating
	//

	$(function () {
		var that = this;
		var id_recipe2 = $('#jRate').data('id');

		var toolitup = $("#jRate").jRate({
			rating: 1,
			strokeColor: 'black',
			precision: 1,
			minSelected: 1,
			onChange: function(rating) {
				//console.log("OnChange: Rating: "+rating);
			},
			onSet: function(rating) {
				console.log("OnSet: Rating: "+rating);
				alert(rating+id_recipe2+id_recipe);
			}
		});

		$('#btn-click').on('click', function() {
			toolitup.setRating(3);				
		});
		
	});

});

