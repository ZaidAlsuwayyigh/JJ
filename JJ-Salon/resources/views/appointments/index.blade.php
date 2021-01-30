@extends('layouts.app')

@section('content')

<div class="flex justify-center ">
  <table class="border-separate border border-green-800 ...">
    <thead>
      <tr>
        <th class="border border" >Customer Name</th>
        <th class="border border" >Service</th>
        <th class="border border" >Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($appoints as $appoint)
      <tr>
        <td class="border border-green-600 ...">{{auth()->user()->name}}</td>
        <td class="border border-green-600 ...">{{$appoint->menuofservices}}</td>
        <td class="border border-green-600 ...">{{$appoint->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
