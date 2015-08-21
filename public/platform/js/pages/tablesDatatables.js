
var TablesDatatables = function() {

    return {
        init: function() {
            /* Initialize Bootstrap Datatables Integration */
            App.datatables();

            /* Initialize Datatables */
            $('#user-datatable').dataTable({
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 1, 5 ] } ],
                "iDisplayLength": 10,
                "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "Todos"]]
            });

            $('#courses-datatable').dataTable({
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 1, 5 ] } ],
                "iDisplayLength": 10,
                "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "Todos"]]
            });

            /* Add placeholder attribute to the search input */
            $('.dataTables_filter input').attr('placeholder', 'Buscar');
        }
    };
}();