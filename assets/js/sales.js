var INDEX_ROW=1;
$(function() {
	$('#add_item').click(function(e) {
		var articulo = $('input[name="articulo0"]').val();
		var cantidad = $('input[name="cantidad0"]').val();
		var precio = $('input[name="precio0"]').val();
		var total = $('input[name="total0"]').val();
		var fila = '<tr class="fila'+INDEX_ROW+'">'+
                        '<td></td>'+
                        '<td width="50%"><input type="text" style="display:none" id="articulo'+INDEX_ROW+'" name="articulo[]" class="form-control show_input'+INDEX_ROW+'" value="'+(articulo!=''?articulo:'Default')+'"><span id="articulo_s'+INDEX_ROW+'" class="hide_span'+INDEX_ROW+'">'+(articulo!=''?articulo:'Default')+'</span></td>'+
                        '<td><input type="text" style="display:none" id="cantidad'+INDEX_ROW+'" onkeyup="change_qty('+INDEX_ROW+')" name="cantidad[]" class="form-control show_input'+INDEX_ROW+'" value="'+(cantidad!=''?cantidad:1)+'"><span id="cantidad_s'+INDEX_ROW+'" class="hide_span'+INDEX_ROW+'">'+(cantidad!=''?cantidad:1)+'</span></td>'+
                        '<td><input type="text" style="display:none" id="precio'+INDEX_ROW+'" onkeyup="change_price('+INDEX_ROW+')" name="precio[]" class="form-control show_input'+INDEX_ROW+'" value="'+(precio!=''?precio:0)+'"><span id="precio_s'+INDEX_ROW+'" class="hide_span'+INDEX_ROW+'">'+(precio!=''?precio:0)+'</span></td>'+
                        '<td><input type="text" style="display:none" id="total'+INDEX_ROW+'" readonly="" name="total[]" class="form-control show_input'+INDEX_ROW+'" value="'+(total!=''?total:0)+'"><span id="total_s'+INDEX_ROW+'" class="hide_span'+INDEX_ROW+'">'+(total!=''?total:0)+'</span></td>'+
                        '<td><button type="button" style="display:none" onClick="update_item('+INDEX_ROW+')" class="btn btn-success show_input'+INDEX_ROW+'">Save</button><button type="button" onClick="edit_item('+INDEX_ROW+')" class="btn btn-primary hide_span'+INDEX_ROW+'">Edit</button></td>'+
                        '<td><button type="button" onClick="delete_item('+INDEX_ROW+')" class="btn btn-danger">Delete</button></td>'+
	                '</tr>';
		$('#table tbody').append(fila);
		INDEX_ROW++;
		calcular_total();
		$('input[name="articulo0"]').val('');
		$('input[name="cantidad0"]').val(1);
		$('input[name="precio0"]').val(0);
		$('input[name="total0"]').val(0);
	});

	$('#form_data').submit(function(e) {
		e.preventDefault();

		if (validar()) {
			var formData = new FormData($('#form_data')[0]);
			$.ajax({
				url: base_url+'sales/add_sales',
				type: 'POST',
				dataType: 'json',
				data: formData,
				contentType:false,
				processData:false,

		        success: function(data)
		        {
		            if(data.status) //if success close modal and reload ajax table
		            {
		                refresh();
		            }
		            else
		            {
					alert('Error');
		            }
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		            alert('Error adding / update data');
		        }
			})
		}else{
			alert('Debe agregar como minimo un item');
		}
	});

	$('#hora').timepicker();
    // Bootstrap datepicker
    $('.form-control.fecha').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        language: 'es'
    });

    $('.form-control.revision').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        orientation: 'bottom'
    });

    $('.form-control.cilindro').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        orientation: 'bottom'
    });

    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                switch (e.srcElement.id) {
                    case "nom":
                        e.target.setCustomValidity("Cliente es requerido");
                        break;
                    case "ruc":
                        e.target.setCustomValidity("RUC es requerido");
                        break;
                }
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity("");
        };
    }

});

function validar() {
	var cont = 0;
	$('input[name="total[]"]').each(function(index, el) {
		cont ++;
	});
	return cont;
}

function refresh() {
	document.location.href = base_url+"customers";
}

function delete_item(index){
	$(".fila"+index).remove();
	calcular_total();
}
function edit_item(index){
	$(".show_input"+index).show();
	$(".hide_span"+index).hide();
}
function update_item(index){
	var articulo = $('#articulo'+index).val();
	var cantidad = $('#cantidad'+index).val();
	var precio = $('#precio'+index).val();
	var total = $('#total'+index).val();
 	$('#articulo_s'+index).text(articulo);
 	$('#cantidad_s'+index).text(cantidad);
	$('#precio_s'+index).text(precio);
	$('#total_s'+index).text(total);
	$(".show_input"+index).hide();
	$(".hide_span"+index).show();
	calcular_total();
}

function change_price(index){
	var cantidad = $('#cantidad'+index).val();
	var precio = $('#precio'+index).val();
	cantidad = cantidad!=''?cantidad:1;
	$('#total'+index).val(precio*cantidad);

}
function change_qty(index){
	var cantidad = $('#cantidad'+index).val();
	var precio = $('#precio'+index).val();
	var total = $('#total'+index).val();
	cantidad = cantidad!=''?cantidad:1;
	$('#total'+index).val(precio*cantidad);
}

function calcular_total(){
	var total = 0;
	var sub_total = 0;
	var igv = 0;
	$('input[name="total[]"]').each(function(index, el) {
		total = total+parseFloat($(el).val());
	});
	sub_total = total/1.18;
	igv = total - sub_total;
	$("#sub_total").val(sub_total.toFixed(2));
	$("#igv").val(igv.toFixed(2));
	$("#precio_total").val(total.toFixed(2));
}