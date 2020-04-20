@extends("layouts.plantilla")







@section('cabecera')

    <h1>Galería</h1>

@endsection



@section('infoGeneral')

    <table class="table" width="50%" border="1"  >
        <thead>
        <tr>
            <th>Prueba</th>
            <th>Prueba</th>
            <th>Prueba</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $a)
            <tr>

                <td>{{$a}}</td>
                <td>{{$a}}</td>
                <td>{{$a}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection



@section('pie')
    <p>cabecera</p>
@endsection