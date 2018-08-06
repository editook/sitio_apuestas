 @if ($dato=="inicio")
    <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Partidas en linea</h4>
                  <p class="card-category"> se estan transmitiendo los siguientes juegos</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>TIEMPO</th>
                        <th>JUEGO</th>
                        <th>EQUIPO1</th>
                        <th>EQUIPO2</th>
                      </thead>
                      <tbody>
                         @if (!@empty ($query1))
                            @foreach ($query1 as $date1)
                              <tr>
                              <td>{{$date1[0]}}</td>
                              <td>{{$date1[1]}}</td>
                              <td>{{$date1[2]}}</td>
                              <td>{{$date1[3]}}</td>
                              </tr>
                            @endforeach
                          @else
                            <h2>No hay registro de una nueva partida</h2>
                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>
@endif