@extends('layouts.master')
@section('root')

@if(session()->has('success'))
<div class="m-4 text-success">
  {{ session()->get('success') }}
</div>
@endif
<div class="col-md-12">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Liste des rendez-vous</h3>
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
            <th>Medecin</th>
            <th>Patient</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rendezvouss as $rendezvous)
          <tr>
            <td>{{ $rendezvous->id }}</td>
            <td>{{ $rendezvous->medecin->first_name }} {{ $rendezvous->medecin->last_name }} {{ $rendezvous->medecin->specialite->type }}</td>
            <td>{{ $rendezvous->patient->first_name }} {{ $rendezvous->patient->last_name }}</td>
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
      <form action="{{ route('rendezvous.create') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label>Nom Medecin</label>
            <select class="form-control select2" style="width: 100%;" name="medecin_id">
              @foreach($medecins as $medecin)
              <option value="{{ $medecin->id }}">{{ $medecin->last_name }} {{ $medecin->first_name }} {{ $medecin->specialite->type }}</option>
              @endforeach
            </select>
            @error('medecin_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Nom Patient</label>
            <select class="form-control select2" style="width: 100%;" name="patient_id">
              @foreach($patients as $patient)
              <option value="{{ $patient->id }}">{{ $patient->last_name }} {{ $patient->first_name }}</option>
              @endforeach
            </select>
            @error('patient_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Date de rendez-vous</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="date">
            @error('date')
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