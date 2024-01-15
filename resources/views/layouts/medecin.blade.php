@extends('layouts.master')
@section('root')

@if(session()->has('success'))
  <div class="text-success">
    {{ session()->get('success') }}
  </div>
@endif
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des medecin</h3>
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
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputname1">Nom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nom">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Prenom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter prenom">
        </div>
        <div class="form-group">
          <label>Sepecialite</label>
          <select class="form-control select2" style="width: 100%;">
          @foreach($specialites as $specialite)
            <option value="{{ $specialite->id }}">{{ $specialite->type }}</option>
          @endforeach
          </select>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection