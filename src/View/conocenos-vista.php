<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();
$administrativos->setConnection($conn->getDB());

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento =  $administrativos->getJefeDepartamento();
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/conocenos2.jpg" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Conócenos</h1>
        <h1 class="fw-bold text-light d-md-flex d-none">
          Ingeniería Eléctrica
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- Fin Portada-->

<!-- Departamento de Sistemas -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/instalaciones2.jpg" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Eléctrica - Electrónica</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> La carrera de Ingeniería Mecatrónica pertenece al
              departamento de Metal - Mecánica, el objetivo principal del
              departamento es poner al alcance de los estudiantes diferentes
              laboratorios de cómputo para el desarrollo de sus materias
              prácticas y la orientación en los diversos trámites requeridos a
              lo largo de su plan de estudios, como pueden ser la liberación de
              créditos complementarios, servicio social, residencias
              profesionales.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Departamento de Sistemas -->

<!-- Descripción Jefa/e del departamento -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombrePuesto . "de Eléctrica - Electrónica";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='<?php if ($jefeDepartamento)  echo $jefeDepartamento->imagen; ?>' alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Jefa/e del departamento -->

<!-- Descripción Coordinador -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='<?php if ($coordinador) echo $coordinador->imagen; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombrePuesto . " de " . $coordinador->nombreCarrera;
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Coordinador -->


<!-- Instalaciones -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Instalaciones
            </h2>
            <div class="separadorSeccionOscura"></div>
            <h4 class="text-center text-light fw-bold fs-3">
              Laboratorios de cómputo
            </h4>
          </div>
          <div class="col-12">
            <h6 class="text-center text-warning fw-bold fs-6">
              “El verdadero progreso es el que pone la tecnología al alcance de
              todos.”<br />
            </h6>

            <p class="text-light" style="text-align: justify">
              El departamento de sistemas y computación cuenta con diversos
              laboratorios de equipo de cómputo en dónde los estudiantes podrán
              desempañarse en desarrollar diversos programas, aplicaciones y
              proyectos a lo largo de sus clases prácticas en la carrera de
              ingeniería en sistemas computacionales. <br /><br />
              Los laboratorios de cómputo están orientados a servir como
              herramientas de aprendizaje y apoyo didáctico tanto para los
              docentes como los alumnos.
            </p>
            <div class="justify-content-center text-center">
              <p><a class="btn-warning w-auto btn font-bold" target="_blank" href="https://bit.ly/3ZrhDeQ">
                  Reglamento de Laboratorio</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <!-- Galería con modal para laboratorios de cómputo -->
      <div class="contenedor-galeria bg-dark">
        <div class="row">
          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_3878.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_1110.webp" alt="" />
            </a>
          </div>

          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_3879.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_0959.webp" alt="" />
            </a>
          </div>
        </div>
      </div>
      <!-- Fin Galería con modal para laboratorios de cómputo -->
    </div>
  </div>
</section>
<!--Fin Instalaciones-->

<!-- Modals de la galería-->
<!-- Imagen 1 -->
<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_3878.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 2 -->
<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_1110.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 3 -->
<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_3879.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 4 -->
<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_0959.webp" alt="" />
    </div>
  </div>
</div>
<!-- Fin Modals de la galería-->

<!-- Laboratorio de cómputo intensivo -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="img/IMG_1713.webp" class="img-fluid rounded" alt="" />
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Laboratorio de Cómputo Intensivo
            </h2>
            <div class="separadorSeccionOscura"></div>
            <h4 class="text-center text-light fw-bold fs-3">
              Responsable: Abelardo Rodríguez León
            </h4>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              Adicionalmente a las oficinas administrativas y laboratorios de
              cómputo, la carrera de ingeniería en sistemas computacionales
              cuenta con el apoyo de un laboratorio de servidores en dónde el
              alumnado tendrá la oportunidad de interactuar con clústeres con
              diferentes enfoques tecnológicos.
            </p>
          </div>
          <div class="col-12">
            <div class="bg-dark">
              <ul class="m-3 text-warning font-bold" style="text-align: justify">
                <li>Agave: Clúster de alto procesamiento.</li>
                <li>Peyote: Clúster de visualización en 4K.</li>
                <li>Saguar: Clúster de servicios de virtualización.</li>
                <li>Nopal: Clúster de alto rendimiento.</li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              El Dr. Abelardo Rodríguez León (responsable del laboratorio de
              servidores) pone a disposición el equipo a aquellos alumnos que
              deseen realizar proyectos, experimentos, investigaciones, realizar
              servicio social o residencias profesionales dentro del
              laboratorio.

              <br />
              <br />
              Información de contacto: abelardo.rl@veracruz.tecnm.mx
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Daniela Castro Rodriguez, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo,
    Yelitza Magali Rosas Jiménez, Eric Manuel Montalvo Cruz y Gabriel Escobar Medina</p>
</div>
<!-- Fin Laboratorio de cómputo intensivo -->