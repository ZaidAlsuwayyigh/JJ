@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello {{$user->name}}</div>

                <div class="card-body">
                  @foreach($appointments as $appointment)
                  <h1> The service needed: {{$appointment->menuofservices}}</h1>
                  <h1> The service needed: {{$appointment->price}}</h1>
                  <h1> The service needed: {{$appointment->bookAppointment}}</h1>
                  <br>

                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
