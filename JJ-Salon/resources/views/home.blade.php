@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif







                    @if(Auth()->user()->name == 'admin')

                    <h1>You are an admin!</h1>



                    @else


                    <h1>Hello, {{auth()->user()->name}}</h1>

                    <p>To view you appointments, please click  <a href="/appointments">HERE</a> </p>


                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
