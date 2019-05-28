(function($){
$('.add-stock').on('click', function(){
	var input = `<div class="row">
        <div class="input-field col m10 s10">
          <input id="stock" name="stock[]" type="text">
          <label for="stock">Stock</label>
        </div>
        <div class="input-field col m2 s2">
          <a class="btn-floating mb-1 btn-large waves-effect waves-light right close">
            <i class="material-icons">close</i>
          </a>
        </div>
      </div>`;

	// $('.stock-form').prepend(input);
	$('.stock-form').find('button').parent().parent().before(input);
});

$(document).on('click', '.close', function(event){
	$(this).parent().parent().remove();
});

$('.stock-form').on('submit', function(event){
	var form = $(this).serialize();
	event.preventDefault();
	// console.log(form);

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/stock.php',
        data: form,
        contentType: 'json',
        dataType: 'json',
        processData: false,
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data.message);
	            $('#log').removeClass('hide');        		
	            $('#log').find('p').html(data.message);      		
        	}
        }
    });
});
	

$(document).on("click", ".edit", function () {
     var category = $(this).data('category');
     var subcat_id = $(this).data('subcat_id');
     var subcategory = $(this).data('subcategory');
     $("#modal1 .modal-body #category").val( category );
     $("#modal1 .modal-body #subcat_id").val( subcat_id );
     $("#modal1 .modal-body #subcategory").val( subcategory );

});

$('.subcat-form').on('submit', function(event){
	var form = $(this).serialize();
	$.ajax({
        url: 'http://localhost/lexuspos/src/php/category.php?action=update',
        data: form,
        contentType: 'json',
        dataType: 'json',
        processData: false,
        type: 'POST',
        success: function(data, status, xhr){
        	console.log(data);
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	            M.toast({
					html: data.message
				});   		
        	}
        }
    });
	event.preventDefault();
});


$(document).on("click", "._hide", function () {
     var subcat_id = $(this).data('subcat_id');
     $("#modal2 .modal-body #subcat_id").val( subcat_id );
});

$('#hide-category-form').on('click', function(event){
	var form = $(this).serialize();
	console.log(form);
	$.ajax({
        url: 'http://localhost/lexuspos/src/php/category.php?action=hide',
        data: form,
        contentType: 'json',
        dataType: 'json',
        processData: false,
        type: 'POST',
        success: function(data, status, xhr){
        	console.log(data);
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	            M.toast({
					html: data.message
				});   		
        	}
        }
    });
	event.preventDefault();
});

$(document).on("click", "._delete", function () {
     var subcat_id = $(this).data('subcat_id');
     $("#modal3 .modal-body #subcat_id").val( subcat_id );
});


$('.settings-form').on('submit', function(event){
	
    $(this).find('button').attr('disabled','disabled');

	var fd = new FormData();
	var form_data = $(this).serializeArray();
	var logo = $('#company-logo')[0].files[0];
	
	$.each(form_data, function(key,input){
        fd.append(input.name,input.value);
    });
    fd.append('logo', logo);
    // console.log(form_data);
	
	$.ajax({
        url: 'http://localhost/lexuspos/src/php/settings.php?action=true',
        data: fd,
        contentType: false,
        dataType: 'text',
        enctype: 'multipart/form-data',
        processData: false,
        type: 'POST',
        success: function(data, status, xhr){
        	console.log(data);
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	   //          M.toast({
				// 	html: data.message
				// });   		
        	}
        }
    });
	event.preventDefault();
});


$('.multiple-form').on('submit', function(event){
	$('table.hide').removeClass('hide');
	var numbers = $('input[name="number"]').val();
	var forms = [];
    var button = `<div class="row">
					<div class="input-field col s12">
						<button class="btn cyan waves-effect waves-light right submit" type="submit" name="action">Submit
						  <i class="material-icons right">send</i>
						</button>
			        </div>
				</div>`;        

	for (var i = 1; i <= numbers; i++) {
		var row = '';
		row = '<tr>';
		row += '<td><input type="text" name="item_' + i + '" id="item" class="validate"></td>';
		row += '<td><input type="text" name="quantity_' + i + '" id="quantity" class="validate"></td>';
		row += '<td><input type="text" name="cost_' + i + '" id="unit-cost" class="validate"></td>';
		row += '<td><input type="text" name="price_' + i + '" id="price" class="validate"></td>';
		row += '<td><input type="text" name="profit_' + i + '" id="profit" class="validate"></td>';
		row += '<td><input type="text" name="reorder_' + i + '" id="re-order" class="validate"><input type="hidden" name="stack" id="stack" value="' + i + '"></td>';
	
		forms.push(row);
	}
	forms.push(button);

	$('#multiple').html(forms);

	event.preventDefault();
});


$(document).on('submit', '.add-item-form', function(event){
	var fd = new FormData();
	var forms = $(this).serializeArray();
	console.log(forms);

	$.each(forms, function(key, input){
		fd.append(input.name, input.value);
	});

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/stockItem.php?action=additem',
        data: fd,
        contentType: false,
        dataType: 'text',
        enctype: 'multipart/form-data',
        processData: false,
        type: 'POST',
        success: function(data, status, xhr){
        	// console.log(data);
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	   //          M.toast({
				// 	html: data.message
				// });   		
        	}
        }
    });

	event.preventDefault();
});


$(document).on('change', '#category', function(){
	var category = $(this).val();
	var data = { category : category };
	$.ajax({
        url: 'http://localhost/lexuspos/src/php/category.php?action=populate',
        data: $.param(data),
        // contentType: false,
        dataType: 'json',
        processData: true,
        type: 'POST',
        success: function(data, status, xhr){
        	var options = '';
        	if(status == 'success' && xhr.readyState == 4){
        		$.each(data.message, function(i, input){
        			options += "<option value='" + input.subcat_id + "'>" + input.category.toLowerCase()  + "</option>"; 
        		});

        		$('select#subcategory').html(options);
        	}
        }
    });
});


$(document).on('keyup', '#unit-cost', function(){
	console.log("You just keyed up with: " + $(this).val());
	var tr = $(this).parent().parent();
	var price = parseInt(tr.find('#price').val()) - parseInt($(this).val());
	console.log(Math.abs(price));
	if(isNaN(price)){
		tr.find('#profit').val(0);
	}else{
		tr.find('#profit').val(price);
	}
});

$(document).on('keyup', '#price', function(){
	console.log("You just keyed up with: " + $(this).val());
	var tr = $(this).parent().parent();
	var price =  parseInt($(this).val()) - parseInt(tr.find('#unit-cost').val());
	console.log(Math.abs(price));
	if(isNaN(price)){
		tr.find('#profit').val(0);
	}else{
		tr.find('#profit').val(price);
	}
});


$(document).on("click", ".station_delete", function () {
     var station_id = $(this).data('id');
     $("#modal .modal-body #station_id").val( station_id );
});

$(document).on("click", ".station_edit", function () {
     var station_id = $(this).data('id');
     var station = $(this).data('station');
     $("#modal1 .modal-body #station_id").val( station_id );
     $("#modal1 .modal-body #station").val( station );
});


$('#delete-station-form').on('submit', function(event){
	var data = $(this).serialize();

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/stations.php?action=delete',
        data: data,
        contentType: false,
        dataType: 'json',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	   			 M.toast({
					html: data.message
				});   
				$('#modal').modal('close');		
        	}
        }
    });

	event.preventDefault();
});


$('#edit-station-form').on('submit', function(event){
	var data = $(this).serialize();

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/stations.php?action=edit',
        data: data,
        contentType: false,
        dataType: 'json',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
	   			 M.toast({
					html: data.message
				});   
				$('#modal1').modal('close');		
        	}
        }
    });

	event.preventDefault();
});


$('#role-privilege-form').on('submit', function(event){
	var arr = new Array();
	var privileges = $('.privilege:checked');
	console.log(privileges);
	var role = $(this).find('#role').val();
	$.each(privileges, function(key, input){
		arr.push(input.value);
	});
	var fd = { privilege: arr, role: role };
	console.log(fd);
	$.ajax({
        url: 'http://localhost/lexuspos/src/php/roles.php?action=privilege',
        data: fd,
        contentType: false,
        dataType: 'json',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
				M.toast({
					html: data.message
				});    
        	}
        }
    });

	event.preventDefault();
});


$('.role-change').on('change', function(event){
	var role = $(this).val();
	var data = { role };
	console.log(data);

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/roles.php?action=callback',
        data: fd,
        contentType: false,
        dataType: 'json',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
				M.toast({
					html: data.message
				});    
        	}
        }
    });
});

$(document).on("click", ".staff_edit", function () {
	var staff_id = $(this).data('id');
	var email = $(this).data('email');
	var firstname = $(this).data('fname');
	var lastname = $(this).data('lname');
	var role = $(this).data('role');
	$("#modal1 .modal-body #staff_id").val( staff_id );
	$("#modal1 .modal-body #email").val( email );
	$("#modal1 .modal-body #firstname").val( firstname );
	$("#modal1 .modal-body #lastname").val( lastname );
	$("#modal1 .modal-body #role").val( role );
});


$('#update-staff-form').on('submit', function(event){
	var data = $(this).serialize();
	console.log(data);

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/staff.php?action=update',
        data: data,
        contentType: false,
        dataType: 'json',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
				M.toast({
					html: data.message
				}); 
				swal({
					title: 'Success',
					icon: 'success'
				});
				$('#modal1').modal('close');
        	}
        }
	});
	
	event.preventDefault();
});

$(document).on("click", ".staff_logout", function () {
	var staff_id = $(this).data('id');
	$("#modal .modal-body #staff_id").val( staff_id );
});


$('#logout-staff-form').on('submit', function(event){
	var data = $(this).serialize();
	console.log(data);

	$.ajax({
        url: 'http://localhost/lexuspos/src/php/staff.php?action=logout',
        data: data,
        contentType: false,
        dataType: 'text',
        type: 'POST',
        success: function(data, status, xhr){
        	if(status == 'success' && xhr.readyState == 4){
	            console.log(data);
				/* M.toast({
					html: data.message
				}); */ 
				$('#modal').modal('close');
        	}
        }
	});
	
	event.preventDefault();
});


})($);