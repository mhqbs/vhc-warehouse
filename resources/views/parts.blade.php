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
          <th scope="col">Part Number</th>
          <th scope="col">Part Name</th>
          <th scope="col">Part Type</th>
          <th scope="col">Part Serial</th>
          <th scope="col">Part Manufacturer</th>
          <th scope="col">Vehicle Type</th>
          <th scope="col">Stock</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody id="myTable">
      @foreach ($parts as $pts)
        <tr>
          <td>{{ $pts["partNumber"] }}</td>
          <td>{{ $pts["PartName"] }}</td>
          <td>{{ $pts["PartType"] }}</td>
          <td>{{ $pts["PartSerial"] }}</td>
          <td>{{ $pts["PartManufacturer"] }}</td>
          <td>{{ $pts["VehicleType"] }}</td>
          <td>{{ $pts["PartStock"] }}</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">
              <span data-feather='edit'></span>
            </button> 
            <button type="button" class="btn btn-primary btn-sm">
              <span data-feather='x-circle'></span>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection