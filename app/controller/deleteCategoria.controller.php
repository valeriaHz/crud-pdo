<script>
    const eliminarCategoria = (id) => {
        Swal.fire({
            title: '¿Estas seguro de eliminar el contacto?',
            text: "No podras recuperar el contacto eliminado!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar Contacto!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: (a) => {
                        console.log(a)
                        Swal.fire({
                            title: 'Contacto eliminado',
                            text: "Eliminaste el contacto con exito!",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok!'
                        }).then((result) => {
                            location.reload()
                        })
                    },
                    error: () => {
                        Swal.fire({
                            icon: 'error',
                            text: 'Error al eliminar el contacto!'
                        }) 
                    }
                })
                
            }
        })
    }
</script>