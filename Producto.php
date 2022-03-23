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
     <section id="Productos">
        <h2 id="P_1">Productos</h2>
    <nav id="Produ_1">
        <ul> 
            <li><a href="#Productos" onclick="mostrar('Cristales'), ocultar('Herrajes'), ocultar('Artesanal')">Cristales</a></li>
            <li><a href="#Productos" onclick="mostrar('Herrajes'), ocultar('Cristales'), ocultar('Artesanal')">Herrajes</a></li> 
            <li><a href="#Productos" onclick="mostrar('Artesanal'), ocultar('Cristales'), ocultar('Herrajes')">Artesanal</a></li>
        </ul>
    </nav>
    <div id="Cristales" style="display: none;">
        <h3 class="R">Cristales</h3>
        <img src="tdv.jpg" class="F1">
        <div id="Liscris">
        
            <a href=""> <button class="btn btn-danger" id="buto"> Float</button></a>
            <a href=""> <button class="btn btn-danger" id="buto"> Cristales de Seguridad</button></a>
            <a href=""> <button class="btn btn-danger" id="buto"> Espejos</button></a>
            <a href=""> <button class="btn btn-danger" id="buto"> Esmerilados</button>
            <a href=""> <button class="btn btn-danger" id="buto"> Fantasia</button></a>
            <a href="https://www.vasa.com.ar/productos/" target="new"><button class="btn btn-danger" id="buto">Más info</button></a>
        
</div>
</div>
    <div id="Herrajes" style="display: none;">
        <h3 class="D">Herrajes</h3>
        <img src="tdh.png" class="F2">
        <div id="Lisherra">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Herrajes para vitrinas
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse text-danger" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Los herrajes de estanteria se dice por los soportes, para puertas pivot y cerradura afines. Se utiliza herrajes de la empresa <a id="Enlace1" href="https://www.hafele.com.ar/es/info/productos/55619/" target="new">Häfele</a>.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Herrajes para Puertas
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Las empresas que nos provee el material son templadoras y la empresa <a id="Enlace1" href="http://www.herrajespanher.com.ar/inicio.html" target="new">Panher</a> que nos garantiza dichos herrajes.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Herrajes de aluminios
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Estos herrajes se utilizan para carpinteria de aluminio, tanto para corredizas de vitrinas y perimetrales. No las provee una empresa como  <a href="http://www.mundoaluminio.com.ar/" target="new" id="Enlace1">mundo aluminio</a>.</div>
                  </div>
                </div>
              </div>
        </ul>
    </div>
    </div>
    <div id="Artesanal" style="display: none;">
        <h3 class="I">Artesanal</h3>
        <img src="dta.png" class="F3">
        <nav id="LisArt">
            <ul>
                <li>Pulido</li>
                <li>Agujeros</li>
                <li>Biselados</li>
                <li>Deco</li>
                <a href="bootstrap/index.html" target="new"> <button class="btn btn-danger">Más info</button></a>
            </ul>
        </nav>
    </div>
    </div>
    </section>
    <?php include('Pie.php') ?>
<script type="text/javascript" src="Alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </Body>
    </html>