    <!-- /.navbar-default -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="{{url('/')}}" data-toggle="tooltip" data-placement="bottom"  title="&copy; Plataforma Matemática"><img src="{{asset('img/Plataforma Formativa_LOGO2.png')}}"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{url('/#quienes')}}">¿QUIÉNES SOMOS?</a></li>
              <li><a href="{{url('/#estructura')}}">ESTRUCTURA DE CURSOS</a></li>
              <li><a href="{{url('/#cursos')}}">CURSOS</a></li>
              <li><a href="{{url('/#contacto')}}">CONTACTO</a></li>
              <li><a href="" class="ingresar">REGISTRARSE</a></li>
              <a href="{{url('/administrador')}}" class="btn btn-danger registro">INGRESAR</a>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar-default./ --> 