@extends('layouts.app')
<!-- resources/views/compra_exitosa.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Compra Exitosa</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .ello {
    margin-top: 100px;
    }
    .uno{
        font-family:"Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
        font-size: 40px;
        text-align: center;
    }
    .dos{
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
        font-size: 20px;
        text-align: center;
    }
</style>

</head>
<body>
    <div class="ello"></div>
    <div class="container">
        <h1 class="uno">Carga de voucher realizada</h1>
        <div class="alert alert-dark mt-3">
            En espera de la confirmación de voucher.
        </div>
        <!-- Puedes agregar aquí información adicional sobre la compra -->
    </div>
</body>
</html>
