 @if ($dato=="inicio")
    <div class="card-header card-header-primary" >
        <h4 class="card-title mt-0" >Resultados</h4>
          <p class="card-category" >recientes</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <tbody>
            @if (!@empty ($query))
              @foreach ($query as $date)
                <tr>
                  <td><a href="#"><span ><img style="border-radius:100%" src="{{ asset("img/new_logo.png") }}" alt="user" width="50" />{{' '.$date[1]}}</a></td>
                  <td><a href="#"><span ><img style="border-radius:100%" src="{{ asset("img/new_logo.png") }}" alt="user" width="50" />{{' '.$date[2]}}</a></td>
                  <td>{{$date[3]}}</td>
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