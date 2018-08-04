
<div class="wrapper ">
    <div class="main-panel">
      @include('Panel.Panel_lateral_superior')
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                @include('Plantilla_inicio.contenido-inicio')
                @yield('contenido-derecho')
                  <!-- contenido que tendra lado izquierdo-->
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                @include('Plantilla_inicio.contenido-inicio-resultados')
                @yield('contenido-derecho')
                <!-- contenido que tendra lado derecho-->
              </div>
            </div>

          </div>
        </div>
      </div>
     
    </div>
  </div>
