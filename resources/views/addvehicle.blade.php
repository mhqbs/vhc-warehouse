@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
  {{-- <div class="btn-toolbar mb-2 mb-md-0">
        Add New Vehicle
  </div> --}}
</div>
<form>
    <div class="mb-3">
      <label for="inputVehicleId" class="form-label">Vehicle ID</label>
      <input type="text" class="form-control" id="inputVehicleId" placeholder="H00XX">
    </div>
    <div class="mb-3">
        <label for="vinId" class="form-label">Vehicle Identification Number</label>
        <input type="text" class="form-control" id="inputVinId" placeholder="HX-122SHS9XXXX">
    </div>
    <div class="mb-3">
        <label for="modelType" class="form-label">Model Type</label>
        <input type="text" class="form-control" id="modelType" placeholder="HonXX">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="text" class="form-control" id="year" placeholder="20XX">
    </div>
    <div class="mb-3">
        <label for="policeNumber" class="form-label">Police Number</label>
        <input type="text" class="form-control" id="PoliceNumber" placeholder="B 1111 XX">
    </div>
    <div class="mb-3">
        <label for="region" class="form-label">Region</label>
        <input type="text" class="form-control" id="region" placeholder="Jakarta">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- 
    VehicleID
  vin
  manufacturer
  modelType
  year
  policeNumber
  region
  reportCheck
  lastMaintenance
    --}}
@endsection