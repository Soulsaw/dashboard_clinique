@extends('layouts.master')
@section('root')
@if(session()->has('success'))
<div class="text-success">
  {{ session()->get('success') }}
</div>
@endif
<div class="col-md-12">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Liste des Secialites</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 20px">#</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
          @foreach($specialites as $specialite)
          <tr>
            <td>{{ $specialite->id }}</td>
            <td>{{ $specialite->type }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Creation de Specialites</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('specialites.create') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Type de specialite</label>
          <input type="text" class="form-control" id="type" name="type" placeholder="Enter la specialite" value="{{ old('number') }}">
          @error('type')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">save</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection