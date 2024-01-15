@extends('layouts.master')
@section('root')

@if(session()->has('success'))
  <div class="text-success">
    {{ session()->get('success') }}
  </div>
@endif
<div class="col-md-12">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des rendez-vous</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Medecin</th>
            <th>Patient</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rendezvouss as $rendezvous)
          <tr>
            <td>{{ $rendezvous->id }}</td>
            <td>{{ $rendezvous->medecin_id }}</td>
            <td>{{ $rendezvous->patient_id }}</td>
            <td>{{ $rendezvous->date }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Creation de rendez-vous</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
      <div class="form-group">
          <label>Nom Medecin</label>
          <select class="form-control select2" style="width: 100%;">
          @foreach($medecins as $medecin)
            <option value="{{ $medecin->id }}">{{ $medecin->last_name }} {{ $medecin->first_name }}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Nom Patient</label>
          <select class="form-control select2" style="width: 100%;">
          @foreach($patients as $patient)
            <option value="{{ $patient->id }}">{{ $patient->last_name }} {{ $patient->first_name }}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Date de rendez-vous</label>
          <input type="date" class="form-control" id="exampleInputEmail1" placeholder="date">
        </div>
        <div class="card-footer">
         <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection