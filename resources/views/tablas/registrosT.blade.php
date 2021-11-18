<table id="registros" class="table table-striped table-bordered border-dark table-light text-center">
                        
                        
    <thead>
        <tr>
            <th>USUARIO</th>
            <th>FECHA</th>
            <th>ENTRADA</th>
            <th>COMIDA</th>
            <th>REGRESO</th>
            <th>SALIDA</th>
            <th>VACACIONES</th>
            <th>FINALIZA VACACIONES</th>
            <th>ENFERMEDAD</th>
        </tr>
    </thead>

    <tbody>
        
    @foreach ($consultas as $consulta)
    <tr>
        <td>{{$consulta->name}}</td>
        <td>{{$consulta->fecha}}</td>
        <td>{{$consulta->entrada}}</td>
        <td>{{$consulta->comida}}</td>
        <td>{{$consulta->comida_regreso}}</td>
        <td>{{$consulta->salida}}</td>
        <td>{{$consulta->vacaciones}}</td>
        <td>{{$consulta->fin_vacaciones}}</td>
        <td>{{$consulta->enfermedad}}</td>
    </tr>   
    @endforeach
        
    </tbody>
</table>