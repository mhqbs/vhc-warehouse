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
              <th scope="col">Vehicle</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
        
          <tbody>
            <tr>
                <td>Vehicle ID</td>
                <td>{{ $vsinfo["VehicleID"] }}</td>
            </tr>
            <tr>
                <td>Vehicle VIN</td>
                <td>{{ $vsinfo["vin"] }}</td>
            </tr>
            <tr>
                <td>Manufacturer</td>
                <td>{{ $vsinfo["manufacturer"] }}</td>
            </tr>
            <tr>
                <td>Model Type</td>    
                <td>{{ $vsinfo["modelType"] }}</td>
            </tr>
            <tr>
                <td>Year</td>
                <td>{{ $vsinfo["year"] }}</td>
            </tr>
            <tr>
                <td>Police Number</td>
                <td>{{ $vsinfo["policeNumber"] }}</td>
            </tr>
            <tr>
                <td>Region</td>
                <td>{{ $vsinfo["region"] }}</td>
            </tr>
            <tr>
                <td>Report Check</td>
                <td><span data-feather={{ ( $vsinfo["reportCheck"] == "PASS" ) ? "check-circle" : "x-circle" }}></span> {{ $vsinfo["reportCheck"] }}</td>
            </tr>
            <tr>
                <td>Last Maintenance</td>
                <td>{{ $vsinfo['lastMaintenance'] }}</td>
            </tr>
            <tr>
                <td>Next Maintenance</td>
                <td>{{ 
                $nextMain=date('Y-m-d', (strtotime('+30 Days', strtotime($vsinfo['lastMaintenance']))))
                }}</td>
            </tr>
            {{-- $nextMaint->end_at = Carbon::$vsinfo["lastMaintenance"]->addDays(30) --}}
                <td>Days Remaining</td>
                <td>
                {{ $elapsedDay=(strtotime($nextMain)-strtotime(today()))/60/60/24 }} Days
                </td>
            </tr>
            <tr>
                <td>Maintenance Action</td>
                <td>
                    <a href="/vehmain/{{ $vsinfo["id"] }}">
                    <button type="button" class="btn btn-primary btn-sm" {{ ( $elapsedDay >= 1) ? "disabled" : "active"}} > Maintenance Now
                    </button>
                </a>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection