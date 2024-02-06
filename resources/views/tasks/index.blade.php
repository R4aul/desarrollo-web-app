@extends('layouts.app')
@section('content')
<div>
    <a class="btn btn-primary" href="{{route('tasks.create')}}">Crear tarea</a>
</div>
<div class="col-12 mt-4">
    <table class="table table-bordered text-white">
        <thead>
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td class="text-black">{{ $task->title }}</td>
                    <td class="text-black">{{ $task->description }}</td>
                    <td class="text-black">{{ $task->date }}</td>
                    <td class="text-black">
                        <span class="badge bg-warning fs-6">{{ $task->status }}</span>
                    </td>
                    <td>
                        <a href="{{route('tasks.edit',$task) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection