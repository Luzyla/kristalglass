<!DOCTYPE html>
<html><head>
<title>Kristal Glass</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" text="type/ccs" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    </head> 
    <Body>
     <?php   include ('Cabecera.php') ?>
     <section id="Contacto">
        <div id="Contacto_1"><h3 class="Cont">Contacto</h3></div>
        <div id="Contacto_2">
            <h4 id="textc">Envia tu Consulta:</h4><br>
            <Form  method="POST" action="contactenos.php">
            <div class="row g-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="nombre" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido" required>
            </div></div>
            <div class="form-floating text-muted">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo" required>
  <label for="floatingInput text-muted">Mail</label>
</div>
<div class="form-floating text-muted">
<input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="motivo">
<label for="floatingInput text-muted">Motivo</label>
</div>
  <textarea class="form-control" placeholder="Escribe tu consulta ..." id="floatingTextarea2" style="height: 100px" name="mensaje" required></textarea>
  <div class="col-12">
    <button type="submit" class="btn btn-danger">Enviar</button></Form>
  </div>
  <?php
    if(isset($_GET['ok'])){ ?>
<script type="text/javascript">
alert('Ha sido enviado tu consulta!')
</script>    
<?php
}
?>
        </div>
        <div id="Contacto_3">
          <div>
            <h3 id="textc">Para mayor información:</h3><br>
            <h5 id="textc1">Tel/Fax: 1152222553</h5>
            <h5 id="textc1">Cel: 1153047848/1157132141</h5>
            <h5 id="textc1" >Email: info@kristalglass.com.ar</h5>
            <h5 id="textc1">Dirección: Viaducto Chorroarin 496</h5>
            
            <a href="https://goo.gl/maps/RUjxev5wEBzKfL9t7"><iframe id="ras" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.529938132178!2d-58.477443985052865!3d-34.59075876431897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb611c29008b9%3A0xe58d778b1e1b643f!2sViad.%20Chorroar%C3%ADn%20496%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1647620189587!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></a>
          </div>
        </div>
    </section>
    <?php include('Pie.php') ?>
<script type="text/javascript" src="Alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </Body>
    </html>