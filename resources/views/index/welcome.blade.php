@extends('index.template.main')

@section('title', 'Home')

@section('section')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <center>
            <img class="img-responsive" src="{{asset('img/Fondo-6.2.jpg')}}">
          </center> 
        </div>
      </div>
    </div >
    <!-- /.carousel-slide -->
    <div class="container" style="margin-top: 20px;" id="cursos">
      <div class="ima-titulo" >
        <img aling="left" class="img-responsive" src="{{asset('img/NC.png')}}" style="width: 590px; height: 105px;">
      </div>
    <!-- /.carousel-slide -->
 
    <!--modulos-->
    <div class="col-lg-12">
      <div class="row" style="text-align: center;">
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #80ccd5;border-radius: 10px;">
            <div class="panel-body hex1">
              <center>
                <img class="img-responsive" src="{{asset('img/mate-1.png')}}">
              </center>
            </div>
            <div class="panel-heading">
                <strong style="color: #80ccd5;"><p>MATEMÁTICAS 1</p></strong>
                <button type="button" class="btn btn-default">VER CURSO</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #f9cadb;border-radius: 10px;">
            <div class="panel-body hex2">
              <center>
                <img class="img-responsive" src="{{asset('img/mate-2.png')}}">
              </center>
            </div>
            <div class="panel-heading">
                <strong style="color: #f9cadb;"><p>MATEMÁTICAS 2</p></strong>
                <button type="button" class="btn btn-default">VER CURSO</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default" style="background-color: #f08bb5;border-radius: 10px;">
              <div class="panel-body hex3">
                <center>
                    <img class="img-responsive" src="{{asset('img/mate-3.png')}}">
                </center>
              </div>
              <div class="panel-heading">
                <strong style="color: #f08bb5;"><p>MATEMÁTICAS 3</p></strong>
                <button type="button" class="btn btn-default">VER CURSO</button>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default" style="background-color: #d93381;border-radius: 10px;">
              <div class="panel-body hex4">
                <center>
                  <img class="img-responsive" src="{{asset('img/mate-4.png')}}">
                </center>
              </div>
              <div class="panel-heading">
                <strong style="color: #d93381;"><p>MATEMÁTICAS 4</p></strong>
                <button type="button" class="btn btn-default">VER CURSO</button>
              </div>
            </div>
        </div>
    </div>
    <div class="ima-barra-curso"> 
    </div> 
    <div class="row" style="text-align: center;">
        <div class="col-md-3">
        <div class="panel panel-default" style="background-color: #865a9f;border-radius: 10px;">
          <div class="panel-body hex5">
            <center>
              <img class="img-responsive" src="{{asset('img/calculo-d.png')}}">
            </center>
          </div>
          <div class="panel-heading">
            <strong style="color: #865a9f;"><p>CÁLCULO DIFERENCIAL</p></strong>
            <button type="button" class="btn btn-default">VER CURSO</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default" style="background-color: #4987c5;border-radius: 10px;">
          <div class="panel-body hex6">
            <center>
              <img class="img-responsive" src="{{asset('img/calculo-i.png')}}">
            </center>
          </div>
          <div class="panel-heading">
            <strong style="color: #4987c5;"><p>CÁLCULO INTEGRAL</p></strong>
            <button type="button" class="btn btn-default">VER CURSO</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default" style="background-color: #7d7971;border-radius: 10px;">
          <div class="panel-body hex7">
            <center>
              <img class="img-responsive" src="{{asset('img/estadistica.png')}}">
            </center>
          </div>
          <div class="panel-heading">
            <strong style="color: #7d7971;"><p>PROBABILIDAD & ESTADÍSTICA</p></strong> 
            <button type="button" class="btn btn-default">VER CURSO</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default" style="background-color: #f8be90;border-radius: 10px;">
          <div class="panel-body hex8">
            <center>
              <img class="img-responsive" src="{{asset('img/mate-financiera.png')}}">
            </center>
          </div>
          <div class="panel-heading">
            <strong style="color: #f8be90;"><p>MATEMÁTICAS FINANCIERAS</p></strong> 
            <button type="button" class="btn btn-default">VER CURSO</button>
          </div>
        </div>
      </div>
    </div>
    <div class="ima-barra-curso">
    </div>

        <div class="row" style="text-align: center;" >
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #fae18a;border-radius: 10px;">
                    <div class="panel-body hex9">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/mate-discretas.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                    <strong style="color: #fae18a;"><p>MATEMÁTICAS DISCRETAS</p></strong> 
                      <button type="button" class="btn btn-default">VER CURSO</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" style="background-color: #6c71af;border-radius: 10px;">
                    <div class="panel-body hex10">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/mate-vjuegos.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                     <strong style="color: #6c71af;"><p>MATEMÁTICAS & VIDEOJUEGOS</p></strong> 
                      <button type="button" class="btn btn-default">VER CURSO</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
          </div>
    </div>
    <!--/.modulos-->
  </div>
  <!-- fin de cursos -->

    <div class="ima-barra" id="quienes">
      <center>
            <img class="img-responsive" src="{{asset('img/Cinta.png')}}" style="width: 1350px; height: 5px;">
      </center>
    </div>


<!-- Quienes somos -->
  <div class="container"  align="right">
           <div class="ima-titulo">
            <img class="img-responsive" src="{{asset('img/QS.png')}}" style="width: 590px; height: 105px;">
             </div>
      <div class="col-lg-12" align="left">
        <img class="img-responsive" src="{{asset('img/logo.png')}}" style="width: 120px; height: 120px;margin-top: -120px;">
        <div class="col-md-6">
          <div class="marco-left">
          <p class="marco" class="text-justify" align="center">
            &copy; CICAINTE  es una empresa multidisciplinaria comprometida con la educación y los negocios, apoyados en las tecnologías de la información y comunicación, que ofrece una variedad de productos y servicios integrales, para satisfacer las necesidades de nuestros clientes. Somos una empresa especializada en ofrecer consultoría, capacitación y desarrollo de productos, procesos y servicios para la educación.</p>
            </div>
        </div>
        <div class="col-md-6">
      <!--   style="width: 650px; height: 250px;" -->
          <img class="img-responsive" align="center" src="{{asset('img/qsomos.jpg')}}" >
        </div>
      </div>
  </div>
<!-- Fin quienes somos -->


<div class="ima-barra">
  
</div>

<hr>
<!-- Objetivo del programa -->
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-6 ">
        <div class="align-middle">
          <img class="img-responsive"  align="center" src="{{asset('img/ObjPro.png')}}" style="width: 650px; height: 250px; ">
        </div>
      </div>
      <div class="col-md-6">
      <div class="marco2" >
          <p class="text-justify">
          Desarrollar una plataforma educativa en el área de matemáticas dirigida a estudiantes, profesores y directivos de escuelas de nivel medio superior que permita lo siguiente:</p>
          <ul>
            <li>Implementar estrategias de enseñanza y aprendizaje innovadoras en el área de matemáticas.</li>
            <li>Facilitar el trabajo colegiado entre profesores de matemáticas.</li>
            <li>Apoyar que la enseñanza y aprendizaje de las matemáticas sea una herramienta social que permita resolver problemas cotidianos.</li>
            <li>Utilizar y/o desarrollar nuevos materiales de apoyo para el docente en matemáticas.</li>
            <li>Evaluar, guiar y dar seguimiento al desempeño de los alumnos en matemáticas.</li>
            <li>Focalizar acciones y atención en matemáticas a los alumnos de acuerdo a sus necesidades.</li>
            <li>Apoyar el desarrollo de las competencias matemáticas definidas en los planes de estudio vigentes.</li>
          </ul>
          </div>
      </div>
    </div>
  </div>
<!-- Fin objetivo del programa -->


<div class="ima-barra">
    
</div>


<!-- Nuestros expertos -->
<div class="container">
  <div class="col-md-12" align="center" id="equipo">
    <div class="col-md-12">
    
     <font size="6" color="#67bad3">NUESTROS EXPERTOS Y AUTORES</font> 
    <p class="text-center" align="center" style="font-size: 15px">
      "Hoy, la sociedad reclama que sus ciudadanos tengan una base mínima de conocimientos matemáticos, pues resulta cada vez más raro encontrar parcelas de desarrollo humano en las que las matemáticas no hayan penetrado y sean utilizadas"</p>
      
    </div>



    <div class="col-md-12 col-md-offset-1">
      <div class="row" style="text-align: center;" id="cursos">
             <div class="col-md-2">
                <div class="panel panel-default" style="background-color: #ffffff;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/jac.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 15px"> Jaime Aguilar</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default" style="background-color: #ffffff;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/ebc.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 15px"> Elizabeth Baca</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default" style="background-color: #ffffff;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/blanco.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 15px"> Yessica Contreras</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default" style="background-color: #ffffff;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/blanco.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 15px"> Mariana Jiménez</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default" style="background-color: #ffffff;border-radius: 10px;">
                    <div class="panel-body">
                    <CENTER>
                        <img class="img-responsive" src="{{asset('img/imc.png')}}">
                    </CENTER>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 15px"> Ismael Muñoz</h5>
                    </div>
                </div>
            </div>
      </div>
  </div>
  </div>
</div>
<!-- FIn nuestros expertos -->

<div class="ima-barra">
    <center>
          <img class="img-responsive" src="{{asset('img/Cinta.png')}}" style="width: 1350px; height: 5px;">
    </center>
</div>


<!-- Estructura del curso -->
    <div class="container" id="estructura">
                  <div class="ima-titulo">
                  <img aling="left" class="img-responsive" src="{{asset('img/EC.png')}}" style="width: 590px; height: 105px;">
                  </div>
                  <center>
                  <img class="img-responsive" src="{{asset('img/estrategia.png')}}" style="width: auto; height: 300px;">
                  </center>
    </div>
<!-- Fin estructura del curso -->


 <div class="ima-barra">
    <center>
          <img class="img-responsive" src="{{asset('img/Cinta.png')}}" style="width: 1350px; height: 5px;">
    </center>
  </div>


  <div class="container">
    <div class="col-md-12 col-md-offset-1">
      <div class="row" style="text-align: center;">
        <div class="col-md-4">
                <center>
                <a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/MarcoKarlii">Tweets by MarcoKarlii</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </center>
        </div>
        <div class="col-md-6">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/rn_YodiJO6k" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>


<div class="ima-barra">
    <center>
          <img class="img-responsive" src="{{asset('img/Cinta.png')}}" style="width: 1350px; height: 5px;">
    </center>
</div>

<!-- Contacto -->
  <div class="container" id="contacto">
    <div class="ima-titulo" align="right">
            <img class="img-responsive" src="{{asset('img/contacto.png')}}" style="width: 590px; height: 105px;">
             </div>
    <div class="col-md-12">
      <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4567033302724!2d-98.69627157851757!3d20.07318688321902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7ad8d82d9b3%3A0x90fe08bec037b949!2sCalle+Reforma%2C+Apepelco%2C+Pachuquilla%2C+Hgo.!5e0!3m2!1ses!2smx!4v1479506919256" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>Dirección: Reforma 297, Pachuquilla Mineral de la Reforma, Hidalgo.</p>
        <p>Teléfono: (044) 7712088011.</p>
        </div>
      <div class="col-md-5">
              <p style="font-size: 15px"> Envíanos tus sugerencias, preguntas y comentarios o siguenos en redes sociales, estamos para atenderte.</p>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" name="nombre" placeholder="nombre" required />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="email" required />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="asunto" placeholder="asunto"/>
                </div>
                <div class="form-group">
                  <textarea  rows="8" class="form-control" name="mensaje" placeholder="mensaje" required /></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Enviar Mensaje">
                </form>
      </div>

      
    </div>
  </div>



@endsection



   