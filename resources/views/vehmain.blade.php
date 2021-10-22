@extends('layouts.main')
@section('container')
@include('partials.titlebar')
<h3>Vehicle ID : {{ $vehmain['VehicleID'] }}</h3>
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            <th>Part Name</th>
            <th>Condition</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Body Parts</td>
              <td class={{ ( $vehmain['Body'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Body'] }}</td>
            </tr>
            <tr>
              <td>Front Bumper</td>
              <td class={{ ( $vehmain['FrontBumper'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['FrontBumper'] }}</td>
            </tr>
            <tr>
              <td>Rear Bumper</td>
              <td class={{ ( $vehmain['RearBumper'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['RearBumper'] }}</td>
            </tr>
            <tr>
              <td>Grille</td>
              <td class={{ ( $vehmain['Grille'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Grille'] }}</td>
            </tr>
            <tr>
              <td>Head Lamp</td>
              <td class={{ ( $vehmain['HeadLamp'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['HeadLamp'] }}</td>
            </tr>
            <tr>
              <td>Fog Lamp</td>
              <td class={{ ( $vehmain['FogLamp'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['FogLamp'] }}</td>
            </tr>
            <tr>
              <td>Tail Lamp</td>
              <td class={{ ( $vehmain['TailLamp'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['TailLamp'] }}</td>
            </tr>
            <tr>
              <td>Oil</td>
              <td class={{ ( $vehmain['Oil'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Oil'] }}</td>
            </tr>
            <tr>
              <td>Oil Filter</td>
              <td class={{ ( $vehmain['OilFilter'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['OilFilter'] }}</td>
            </tr>
            <tr>
              <td>Air Cleaner</td>
              <td class={{ ( $vehmain['AirCleaner'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['AirCleaner'] }}</td>
            </tr>
            <tr>
              <td>Belt</td>
              <td class={{ ( $vehmain['Belt'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Belt'] }}</td>
            </tr>
            <tr>
              <td>Engine</td>
              <td class={{ ( $vehmain['Engine'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Engine'] }}</td>
            </tr>
            <tr>
              <td>Transmission</td>
              <td class={{ ( $vehmain['Transmission'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Transmission'] }}</td>
            </tr>
            <tr>
              <td>Battery</td>
              <td class={{ ( $vehmain['Battery'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Battery'] }}</td>
            </tr>
            <tr>
              <td>Alternator</td>
              <td class={{ ( $vehmain['Alternator'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Alternator'] }}</td>
            </tr>
            <tr>
              <td>Radiator</td>
              <td class={{ ( $vehmain['Radiator'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Radiator'] }}</td>
            </tr>
            <tr>
              <td>Suspensions</td>
              <td class={{ ( $vehmain['Suspensions'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Suspensions'] }}</td>
            </tr>
            <tr>
              <td>Steering</td>
              <td class={{ ( $vehmain['Steering'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Steering'] }}</td>
            </tr>
            <tr>
              <td>FrontBrake</td>
              <td class={{ ( $vehmain['FrontBrake'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['FrontBrake'] }}</td>
            </tr>
            <tr>
              <td>Rear Brake</td>
              <td class={{ ( $vehmain['RearBrake'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['RearBrake'] }}</td>
            </tr>
            <tr>
              <td>Sensors</td>
              <td class={{ ( $vehmain['Sensors'] == "PASS" ) ? "table-success" : "table-danger" }}>{{ $vehmain['Sensors'] }}</td>
            </tr>
          </tbody>
        </table>
      </div>

@endsection