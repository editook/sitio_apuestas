@extends('Plantilla_inicio.base')

@section('Panel.contenido-izquierdo')
    <div class="card-header card-header-primary">
        <h4 class="card-title mt-0">izquierdo</h4>
        <p class="card-category">recientes</p>
    </div>
@endsection

@section('contenido-izquierdo')
    <div class="card-header card-header-primary">
        <h4 class="card-title mt-0">Apuestas Hechas</h4>
        <p class="card-category">recientes</p>
    </div>
    
@endsection
@section('contenido-derecho')
    <div class="card-header card-header-primary">
        <h4 class="card-title mt-0">Apuestas Hechas</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <tbody>
            @if (!@empty ($query2))
              @foreach ($query2 as $date)
                <tr>
                  <td>{{$date[0]}}</td>
                  <td>{{$date[1]}}</td>
                  <td>{{$date[2]}}</td>
                </tr>
              @endforeach
            @else
              <h2>No hay apuestas realizadas</h2>
            @endif
          </tbody>
        </table>
      </div>
    </div>
@endsection