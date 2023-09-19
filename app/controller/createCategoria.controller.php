<script>
    $(document).ready(()=>{
        $("#crearCategoria").click(()=>{
            let categoria = $("#categoria").val()

            $.ajax({
                url: "./app/model/process/createCategoria.process.php",
                data: {
                    categoria
                },
                type:"POST",
                success:(a) => {
                    console.log(a)
                    Swal.fire({
                    title: 'Categoria guardada',
                    text: "Categoria guardada con exito!",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./readCategoria"
                    })
                },
                error:() => {
                    Swal.fire({
                        icon: 'error',
                        text: 'Error al agregar el contacto!'
                    })
                }
            })
        })
    })
</script>