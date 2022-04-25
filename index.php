<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia y Polimorfismo </title>
</head>
<body>
    <?php
        include('class/class-alumno.php');
        include('class/class-profesor.php');

        $alumno = new Alumno("Carlos", "Muñoz", 23, "Masculino", "Ing en Sistemas", "55412154", 4.5);
        $maestro = new Profesor("Felipe", "Moreno", 45, "Masculino", "Ing en Sistemas", "5845", 4500000, "8-5");
        
        /*
        echo $alumno->getNombre();
        echo $alumno->getApellido();
        echo $alumno->getEdad();
        echo $alumno->getGenero();
        echo $alumno->getCarrera();
        echo $alumno->getCuenta();
        echo $alumno->getPromedio();

        $alumno->cancelarCarrera();  */

        $alumno->matricular();
        echo "<br>";
        $alumno->reprobar();
        echo "<br>";
        $alumno->aprobar();

        echo "<br>";
        $maestro->reprobar();
        echo "<br>";
        $maestro->aprobar();


    ?>

</body>
</html>