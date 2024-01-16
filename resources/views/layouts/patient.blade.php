@extends('layouts.master')
@section('root')
@if(session()->has('success'))
<div class="m-6 text-success ">
  {{ session()->get('success') }}
</div>
@endif
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Liste des patients</h3>
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
            <th>Numero</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($patients as $patient)
          <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->first_name }}</td>
            <td>{{ $patient->last_name }}</td>
            <td>{{ $patient->number }}</td>
            <td><button type="submit" class="btn btn-primary">rappel</button></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Insertion Patients</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('patients.create')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
          @error('first_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Prenom</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
          @error('last_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Numero Patient</label>
          <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}">
          @error('number')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">save</button>
      </div>
    </form>
  </div>
</div>
@endsection