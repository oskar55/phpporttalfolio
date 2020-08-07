<?php

    use App\Models\Job;

    if (!empty($_POST)) {
        # code...
        $job = new Job();
        $job->title = $_POST['title'];
        $job->description = $_POST['description'];
        $job->save();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="margin-top:22px">
    </div>
    <div class="container">
        <div class="row">
            <!-- Formulario para enviar datos a la aplicacion -->
            <form action="addJob.php" method="post">
                <label for="">Title</label>
                <input type="text" name="title" id="">

                <label for="">Descripcion</label>
                <input type="text" name="description" id="">

                <input type="submit" value="Enviar Información">
            </form>    
        </div>    
    </div>
    
</body>
</html>