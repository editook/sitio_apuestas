
<div class="wrapper ">
    <div class="main-panel">
      @include('Panel.Panel_lateral_superior')
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                @yield('contenido-derecho')
                
                  <!-- contenido que tendra lado izquierdo-->
                  @if ($dato=="inicio")
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Partidos en linea</h4>
                        <p class="card-category">En Transmision</p>
                    </div>
                
                    <div class="card-body">
                    <form>
                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                  @endif
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                @yield('contenido-derecho')
                
              </div>
            </div>

          </div>
        </div>
      </div>
     
    </div>
  </div>
