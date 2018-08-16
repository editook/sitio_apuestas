@if ($dato=="inicio")
    <div class="card-header card-header-primary">
      <h4 class="card-title mt-0"> Partidas en linea</h4>
        <p class="card-category"> se estan transmitiendo los siguientes juegos</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <tbody>
            @if (!@empty ($query1))
              @foreach ($query1 as $date1)
                <tr>
                <td></span>{{$date1[0]}}</td>
                <td><a href="{{url("detalle/{$date1[1]}")}}"><span ><img style="border-radius:100%" src="{{ asset("img/new_logo.png") }}" alt="user" width="50" />{{' '.$date1[2]}}</a></td>
                <td><a href="#">VS</a></td>
                <td><a href="{{url("detalle/{$date1[1]}")}}"><span ><img style="border-radius:100%" src="{{ asset("img/new_logo.png") }}" alt="user" width="50" />{{' '.$date1[3]}}</a></td>
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