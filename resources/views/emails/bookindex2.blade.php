<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Notificaciones</title>
</head>

<body>
    <section>
        <div style="margin-top: 50px;"></div>
        <center><img src="https://pachatusantrek.com/img/logo-pachatusan-trek.png" width="200px"></center>
        <center>
            <div style="background: #4d4d4dc0; width: 140px; height: 1px; margin-top:8px;margin-bottom:2px;"></div>
        </center>
        <div class="col-lg-6" style="text-align: left; padding: 20px 50px 0px 50px;">Hola Pachatusan Trek: <br>
            <p style="text-align: justify;">La página web acaba de recibir un nuevo mensaje desde la pagina web, a
                continuación los detalles:</p>
            <p style="text-align: justify;"></p>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <th>Mensaje</th>
                    <td>{{ $mensaje }}</td>
                </tr>
            </table>
            <br>
            <div style="width: 100%: background:#000;">
                <p style="text-align:center; color:#fff; padding:1em 2em">Copyright© 2024 Pachatusan Trek | Todos
                    los derechos reservados </p>
            </div>
        </div>
    </section>

</body>

</html>
