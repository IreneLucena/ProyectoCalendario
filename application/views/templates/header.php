<!DOCTYPE html>
<html>
<head>
    <!-- CSS -->
    <link href='<?= base_url() ?>assets/css/main.css' rel='stylesheet' />
    <link href='<?= base_url() ?>assets/css/bootstrap/business-casual.css' rel='stylesheet' />

    <!--
    <link href='<?= base_url() ?>assets/css/fullcalendar/fullcalendar.css' rel='stylesheet' type='text/css'/>
    <link href='<?= base_url() ?>assets/css/fullcalendar/fullcalendar.min.css' rel='stylesheet' type='text/css'/>
    <link href='<?= base_url() ?>assets/css/fullcalendar/fullcalendar.print.css' rel='stylesheet' type='text/css'/>
    -->

    <link href='//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.1/fullcalendar.min.css' type='text/css' rel='stylesheet' />
    <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.1/fullcalendar.print.css' media='print' type='text/css' rel='stylesheet' />

    <!-- SCRIPTS -->
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js' type='text/javascript'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js' type='text/javascript'></script>
    <script src='<?= base_url() ?>assets/js/main.js' type='text/javascript'></script>
    <script src='//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js' type='text/javascript'></script>
    <script type='text/javascript' src='<?= base_url() ?>assets/js/bootstrap/bootstrap.js'></script>
    <script type='text/javascript' src='http://momentjs.com/downloads/moment.js'></script>
    <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.1/fullcalendar.min.js'></script>
</head>
<body>
<div class="navbar-header">
    <div class="brand">Booking Aulas</div>
    <div class="menu">
        <ul>
            <li><a href="<?=base_url('usuario/perfil')?>">Perfil</a></li>
            <li><a href="<?=base_url('booking/create')?>">Reserva</a></li>
            <li><a href="<?=base_url('objetoreservable/modificar')?>">OR modificar</a></li>
        </ul>
    </div>
</div>