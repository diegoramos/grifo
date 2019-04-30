$(function() {

$('#customers-table').DataTable({ 
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "scrollX": true,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url+'customers/ajax_list',
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
    });

})


function imprimir_pdf(id) {
    $.ajax({
        url : base_url+'imprimir/print_documento/'+id,
        type: "POST",
        dataType: "html",
        success: function(data)
        {
            $('#ipdf').html(data);
            $('#modal_print').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error al imprimir');
        }
    });
}
