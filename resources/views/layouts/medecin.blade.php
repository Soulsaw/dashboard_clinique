@extends('layouts.master')
@section('root')

@if(session()->has('success'))
<div class="m-4 text-success ">
  {{ session()->get('success') }}
</div>
@endif
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Liste des medecins</h3>
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
            <th style="width: 10px">#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Specialite</th>
          </tr>
        </thead>
        <tbody>
          @foreach($medecins as $medecin)
          <tr>
            <td>{{ $medecin->id }}</td>
            <td>{{ $medecin->first_name }}</td>
            <td>{{ $medecin->last_name }}</td>
            <td>{{ $medecin->specialite->type }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card card-primary">
    <!-- -->
    <div class="card-header">
      <h3 class="card-title">Insertion Medecins</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('medecins.create') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputname1">Nom</label>
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter nom">
          @error('first_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Prenom</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter prenom">
          @error('last_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label>Sepecialite</label>
          <select class="form-control select2" style="width: 100%;">
            @foreach($specialites as $specialite)
            <option value="{{ $specialite->id }}">{{ $specialite->type }}</option>
            @endforeach
          </select>
          @error('specialite_id')
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