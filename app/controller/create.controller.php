<script>
    $(document).ready(()=>{
        $("#crear").click(()=>{
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            let categoria = $("#categoria").val()

            $.ajax({
                url: "./app/model/process/create.process.php",
                data: {
                    nombre,
                    telefono,
                    email,
                    categoria,
                },
                type:"POST",
                success:(a) => {
                    console.log(a)
                    Swal.fire({
                    title: 'Contacto guardado',
                    text: "Contacto guardado con exito!",
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
                        text: 'Error al agregar el contacto!'
                    })
                }
            })
        })
    })
</script>