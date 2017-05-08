<?php
/*
Template Name: inicio
 */
?>

<?php get_header();?>
<div class="">
<?php
echo do_shortcode('[smartslider3 slider=2]');
?>
</div>
<div class="container-full paddingAdic">
  <div class="row">
    <div class="contenedor_presentacion col-xs-12 col-lg-9">
      <p class="tituloPresentacion">Bienvenido al portal de cursos de Ifeep</p>
      <p class="parrafoPresentacion"><span>El Instituto de  Formación Empresarial y Extensión Profesional IFEEP </span>es una entidad dedicada a brindar servicios educativos integrales y personalizados a la medida de las necesidades de los alumnos logrando que alcancen sus objetivos académicos y profesionales, desarrollando para ello materiales educativos propios que favorezcan al alumno y reduzcan los tiempos de aprendizaje. Contamos con las mejores herramientas que potencién las habilidades de nuestros alumnos. </p>
      <p class="parrafoPresentacion">IFEEP tiene como misión la mejora continua de los materiales y estrategías educativas que apoyen el entrenamiento y aprendizaje de cada programa seleccionado por el alumno, cumpliendo con ello su proposito de desarrollar mejores profesionales y personas.</p>
      <div class="container-full mgtop">
    <div class="col-xs-12 col-lg-12">
      <div class="row">
        <div class="col-xs-12 col-lg-4 fondoCeleste">
          <p class="tituloBloqueHome">Sobre Nuestras Ventajas</p>
          <ul class="ventajas">
            <li>Ahorro de tiempo y dinero</li>
            <li>Repeticiones constantes</li>
            <li>Material didactico especializado</li>
            <li>Pruebas automatizadas</li>
            <li>Certificaciones a distancia</li>
          </ul>
        </div>
        <div class="col-xs-12 col-lg-8">
        <p class="tituloBloqueHome">Algunos de nuestros cursos</p>
        <a href="http://localhost:8888/wordpress/cursos/" class="col-xs-12 col-lg-6">
              <img class="predefinidaImg img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/gestionSalud.png">

        </a>
        <a href="http://localhost:8888/wordpress/cursos/" class="col-xs-12 col-lg-6 ">
              <img class="predefinidaImg img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/adminSalud.png">
        </a>
      </div>
        </div>
      </div>
</div>
</div>
  <div class="col-xs-12 col-lg-3 mgtop">
    <aside>
<?php get_sidebar();?>
    </aside>
  </div>

  </div>

</div>

  <div class="comoFuncionan">
    <div class="container">
      <h3 class="tituloComo">Como funcionan nuestros cursos</h3>
        <div class="row">
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="http://localhost:8888/wordpress/register">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/registrate.png"></div>
              </a>
              <p class="tituloComoParrafo">Registrate</p>
              <p class="explicaComo">Registrate para acceder a los cursos que tenemos preparado para ti... </p>
          </div>
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="http://localhost:8888/wordpress/cursos">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/busca.png"></div>
              </a>
              <p class="tituloComoParrafo">Busca Curso</p>
              <p class="explicaComo">Los cursos estan hechos a tu medida busca el que se acomode a tus necesidades.  </p>
          </div>
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="#">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/estudia.png" ></div>
              </a>
              <p class="tituloComoParrafo">Estudia</p>
              <p class="explicaComo">Estudia y repite la clase todas las veces que sean necesarias, ademas el material interactivo te ayudará a prepararte</p>
          </div>
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="#">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/certificate.png" alt=""></div>
              </a>
              <p class="tituloComoParrafo">Certificate</p>
              <p class="explicaComo">Una serie de examenes preparados para que gradualmente estes preparado para para la certificación</p>
          </div>
        </div>
    </div>
      <div class="botonIr">
        <a href="cursos">Ver todos nuestros cursos</a>
      </div>
    </div>



<?php get_footer();?>
