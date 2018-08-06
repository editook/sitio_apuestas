 @if ($dato=="inicio")
    <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Resultados</h4>
                  <p class="card-category">recientes</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>JUEGO</th>
                        <th>EQUIPO</th>
                        <th>EQUIPO</th>
                        <th>RESULTADOS</th>
                      </thead>
                      <tbody>
                        @if (!@empty ($query))
                            @foreach ($query as $date)
                            <tr>
                              <td>{{$date[0]}}</td><td>{{$date[1]}}</td>
                              <td>{{$date[2]}}</td><td>{{$date[3]}}</td>
                            </tr>
                            @endforeach
                        @else
                            <h2>No hay resultados para ver</h2>
                        @endif
                        
                      </tbody>
                    </table>
                  </div>
                </div>
@endif