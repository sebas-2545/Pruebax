    $(document).ready(function() {
        $('#reporteTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Reporte de Empleados'
                }
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json'
            },
            scrollX: true,
            responsive: true
        });
    });
