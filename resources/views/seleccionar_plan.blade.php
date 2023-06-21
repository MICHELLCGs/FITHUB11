<!-- resources/views/seleccionar_plan.blade.php -->
@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   

<style>
.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */}
.ello {
  margin-top: 60px;
}
body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
  .card-body {
    background-color:white; 
  }

h1, h2, h3, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
}
h4,h5{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.uno{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    margin-top: 30px;
}
#but{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 18px;

}
</style>
 <!-- Custom styles for this template -->
 <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>
<div>     
<header>


</header>
<div class="ello"></div>
<div class="card flex-row my-5 border-0 rounded-3 overflow-hidden">
  <div class="card-body">
<div class="blog-post"  >
    <div class="container">
        <h1 class="display-4 fst-italic">Comprando tu FitPlan</h1>
        <h4 class="mt-4">Para poder obtener tu FitHub debes hacer el pago a la siguiente cuenta bancaria: <br></h4>
        <h5 > <br>Cuenta BCP Soles es 21505419817058.<br><br>
        Cuenta interbancaria es 00221510541981705827. </h5>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('realizar-pago') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
              
            </div>
           <div class="form-group">
            <div class="uno">
                <label for="plan" >Selecciona un plan:</label>
                <select  name="plan" id="plan">
                    <option value="1">FitPlan </option>
                </select>
                </div>
            </div> 
            <div class="uno">
            <div class="form-group">
            <i class="fa-solid fa-triangle-exclamation" style="color: #28325b;"></i>
                <label for="voucher">Sube tu voucher:</label>
                <input type="file" class="form-control-file" name="voucher" id="voucher" required>
            </div>
            <button type="submit" id="but" class="btn btn-dark">Realizar pago</button>
            </div>
        </form>
        </div>
       </div>
     </div>
    </div>
</body>
</html>