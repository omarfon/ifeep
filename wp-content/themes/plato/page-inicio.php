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
<div class="container">
  <div class="row">
    <div class="contenedor_presentacion col-xs-12 col-lg-8">
    <p class="tituloPresentacion">Bienvenido al portal de cursos de Ifeep</p>
    <p class="parrafoPresentacion">El Instiuto de  formación y extensión profesional IFEEP es una entidad dedicada a la educación, que creé firmemente en el auto aprendizaje y la superación personal por tanto nos enfocamos en proporcionar las mejores herramientas que potencién a los alumnos en el desarrollo personal y mejorar los materiales educativos que favorezcan al alumno y reduzcan los tiempos de aprendizaje.</p>
    <div class="container mgtop">
    <p class="tituloBloqueHome">Sobre Nuestras Ventajas</p>
    <div class="col-xs-12 col-lg-8">
      <div class="row">
        <div class="col-xs-12 col-md-4 fondoCeleste">
          <p class="tituloVentajas">Cuales son las ventajas</p>
          <ul class="ventajas">
            <li>Ahorro de tiempo y dinero</li>
            <li>Repeticiones constantes</li>
            <li>Material didactico especializado</li>
            <li>Pruebas automatizadas</li>
            <li>Certificaciones a distancia</li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="col-xs-12 col-md-6 curso">
            <img src="" alt="">
            <div>
              
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
              seis de 8
          </div>
          <div class="col-xs-12 col-md-12">
              doce de 8
          </div>
        </div>
      </div>
</div>
</div>
  </div>
  <div class="col-xs-12 col-lg-4 mgtop">
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
              <p class="explicaComo">Los cursos son  </p>
          </div>
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="#">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/estudia.png" ></div>
              </a>
              <p class="tituloComoParrafo">Estudia</p>
              <p class="explicaComo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
          </div>
          <div class="col-xs-6 col-md-3 col-lg-3 marco">
              <a href="#">
                <div class="icono"><img src="<?php echo get_template_directory_uri()?>/assets/images/certificate.png" alt=""></div>
              </a>
              <p class="tituloComoParrafo">Certificate</p>
              <p class="explicaComo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
          </div>
        </div>
    </div>
      <div class="botonIr">
        <a href="cursos">Ver todos nuestros cursos</a>
      </div>
    </div>



<?php get_footer();?>
