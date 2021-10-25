@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
<div class="btn-toolbar mb-2 mb-md-0">
    <button type="button" class="btn btn-sm btn-outline-secondary">
      <span data-feather="file-plus"></span>
      Add New Data
    </button>
</div>
</div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      
      <thead>
        <tr>
          <th scope="col">Vehicle ID</th>
          <th scope="col">VIN</th>
          <th scope="col">Make</th>
          <th scope="col">ModelType</th>
          <th scope="col">Year</th>
          <th scope="col">Police Number</th>
          <th scope="col">Region</th>
          <th scope="col">Report Check</th>
          <th scope="col">Last Maintenance</th>
          <th scope="col">Next Maintenance</th>
          <th scope="col">Elapsed</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody id="myTable">
      @foreach ($vehicles as $vehicle)
        <tr>
          <td>{{ $vehicle["VehicleID"] }}</td>
          <td>{{ $vehicle["vin"] }}</td>
          <td>{{ $vehicle["manufacturer"] }}</td>
          <td>{{ $vehicle["modelType"] }}</td>
          <td>{{ $vehicle["year"] }}</td>
          <td>{{ $vehicle["policeNumber"] }}</td>
          <td>{{ $vehicle["region"] }}</td>
          <td>{{ $vehicle["reportCheck"] }}</td>
          <td>{{ $vehicle["lastMaintenance"] }}</td>
          <td>{{ $nextMain=date('Y-m-d', (strtotime('+30 Days', strtotime($vehicle['lastMaintenance'])))) }}</td>
          <td>{{ $elapsedDay=(strtotime($nextMain)-strtotime(today()))/60/60/24 }} Days</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">
              <span data-feather='edit'></span>
            </button> 
            <button type="button" class="btn btn-danger btn-sm">
              <span data-feather='x-circle'></span>
            </button>
            <a href="/vin/{{ $vehicle->VehicleID }}">
            <button type="button" class="btn btn-success btn-sm">
              <span data-feather='eye'></span>
            </button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection