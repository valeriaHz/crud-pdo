<script>
    $(document).ready(()=>{
        $("#actualizar").click(()=>{
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            let categoria = $("#categoria").val()

            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    telefono,
                    email,
                    categoria,
                },
                type:"POST",
                success:(a) => {
                    console.log(a)
                    Swal.fire({
                    title: 'Contacto actualizado',
                    text: "Contacto actualizado con exito!",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./read"
                    })
                },
                error:() => {
                    Swal.fire({
                        icon: 'error',
                        text: 'Error al actualizar el contacto!'
                    })
                }
            })
        })
    })
</script>