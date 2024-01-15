@extends('layouts.master')
@section('root')
<div class="col-md-12">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des Specialites</h3>
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
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Type de specialite</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nom">
        </div>
        <div class="card-footer">
         <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection