@extends('layouts.app')
@section('content')
@php
    use Carbon\Carbon;
@endphp
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>No la arman de ingenieros</strong> En turismo si..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif

    <form action="{{route('tasks.update',$task)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" value="{{old('title',$task->title)}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" 
                    placeholder="Descripción...">{{old('description',$task->description)}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha límite:</strong>  
                    <input type="date" name="date" class="form-control" value="{{old('date',Carbon::parse($task->date)->format('Y-m-d'))}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado (inicial):</strong>
                    <select name="status" class="form-select">
                        <option value="" {{ old('status',$task->status) == '' ? 'selected' : '' }}>-- Elige el status --</option>
                        <option value="Pendiente" {{ old('status',$task->status) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="En proceso" {{ old('status',$task->status) == 'En proceso' ? 'selected' : '' }}>En progreso</option>
                        <option value="Terminado" {{ old('status',$task->status) == 'Terminado' ? 'selected' : '' }}>Completada</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection