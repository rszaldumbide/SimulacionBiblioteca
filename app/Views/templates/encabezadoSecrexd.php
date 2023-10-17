<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/js.js"></script>
    
</head>

<!-- js -->
<script src="<?php echo base_url(); ?>/js/js.js"></script>
     <!--Jquery-->
     <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!--Bootstrap JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tb').DataTable();
        $('#tblApi').DataTable();
    });
    </script>

<body>
    <header>
        <div class="bg-dark p-2" style="display: flex; justify-content: space-between;">
        <div class="text-center ps-5">
            
            <a href='https://postimg.cc/XrnWgNBF' target='_blank'>
                <img src='https://i.postimg.cc/XrnWgNBF/logo-peque-o-rs.png' border='0' alt='logo-peque-o-rs'/>
            </a>
        </div>
        <div class="text-center ps-5 pe-5">
            <a style="text-decoration: none;" href="#">Bienvenido, <?=session('rol');?></a>
            <a class="btn btn-info" href="<?= base_url('/salir') ?>
                        ">Cerrar Sesion</a>
        </div>
        </div>
        
        <nav class="bg-dark text-center">
                <ul class="navlist">
                    <li>
                        <a href="#
                        ">Ver Libros solicitados</a>
                    </li>    
                </ul>
            </nav>
    </header>

        