$(document).ready(function () {
    // Actualizar año en el footer
    const añoActual = new Date().getFullYear();
    $('#añoActual').text(añoActual);

    // Inicializar DataTable si existe la tabla
    if ($('#tabla-personas').length) {
        $('#tabla-personas').DataTable({
            responsive: true,
            autoWidth: false,
            pagingType: 'simple_numbers',
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 25, 50],
                [3, 5, 10, 25, 50]
            ],
            language: {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró nada - lo siento",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            initComplete: function () {
                $(this.api().table().node()).css('visibility', 'visible');
            }
        });
    }

    // Lógica de eliminación con SweetAlert2
    $(document).on('click', '.btn-delete', function (e) {
        e.preventDefault();
        const url = $(this).data('url');
        const nombre = $(this).data('nombre') || 'este registro';

        Swal.fire({
            title: '¿Estás seguro?',
            text: `Vas a eliminar a: ${nombre}. ¡No podrás revertir esto!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    });
});
