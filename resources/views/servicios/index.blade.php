@extends('layouts.app')

@section('content')
<a href="{{ route('servicios.create') }}">Create new servicio</a>

<table>
    <thead>
        <tr>
            <th>Nombre servicio</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Numero de reserva</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->nro_habitacion }}</td>
                <td>{{ $servicio->tipo }}</td>
                <td>{{ $servicio->precio }}</td>
                <td>{{ $servicio->disponibilidad }}</td>
                <td>{{ optional($servicio->Servicios->first())->fecha_entrada }}</td>
                <td>
                    <a href="{{ route('reservas.shows', $servicios->id) }}">Ver</a>
                    <a href="{{ route('reservas.edit', $servicios->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('servicio.destroy', $servicios->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection