<script>
    $(document).ready(()=>{
        $("#actualizarCategoria").click(()=>{
            let id = $("#id").val()
            let nombre = $("#nombre").val()

            $.ajax({
                url: "./app/model/process/updateCategoria.process.php",
                data: {
                    id,
                    nombre
                },
                type:"POST",
                success:(a) => {
                    console.log(a)
                    Swal.fire({
                    title: 'Categoria actualizada',
                    text: "Categoria actualizada con exito!",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./createCategoria"
                    })
                },
                error:() => {
                    Swal.fire({
                        icon: 'error',
                        text: 'Error al actualizar la categoria!'
                    })
                }
            })
        })
    })
</script>