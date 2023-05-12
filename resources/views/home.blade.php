@extends('layouts.app')

@section('title document', 'Trains table')

@section('content')
<div class="container">

  <h1 class="text-center my-5">Train table</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Departure Date</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Arrival Date</th>
        <th scope="col">Code</th>
        <th scope="col">Wagons</th>
        <th scope="col">In time</th>
        <th scope="col">Confirmed</th>
      </tr>
    </thead>
    <tbody>
      @forelse ( $trains as $train)
        <tr>
          <td>{{$train->company}}</td>
          <td>{{$train->departure_station}}</td>
          <td>{{$train->arrival_station}}</td>
          <td>{{$train->departure_time}}</td>
          <td>{{$train->departure_date}}</td>
          <td>{{$train->arrival_time}}</td>
          <td>{{$train->arrival_date}}</td>
          <td>{{$train->code}}</td>
          <td>{{$train->wagon}}</td>
          <td>{{$train->in_time}}</td>
          <td>{{$train->confirmed}}</td>
        </tr>
      @empty
        <div class="alert alert-warning" role="alert">
          No trains founded
        </div>
    </tbody>
  </table>

</div>

@endforelse