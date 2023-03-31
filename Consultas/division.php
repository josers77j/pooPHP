<?php
class Division
{
    public $n1;
    public $n2;

    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function dividir()
    {
        $res = $this->n1 / $this->n2;
        echo "La division entre " . $this->n1 . " y " . $this->n2 . " es igual a : " . $res;
    }
}

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

$division = new Division($n1, $n2);
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php
    include("../Includes/menu.php");
    ?>



    <div class="container p-3">

        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">Resultado</h5>
                <p class="card-text"><?php $division->dividir(); ?>.</p>
                <a href="https://youtu.be/4mw01RK9WlQ" class="btn btn-primary">Video random</a>
            </div>
        </div>
    </div><!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>