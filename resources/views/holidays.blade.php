@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                  <tr>            
                    <th scope="col">Holiday</th>
                    <th scope="col">Date</th>          
                  </tr>
                </thead>
                <tbody>
                  @foreach($holidays as $holiday)
                  <tr>            
                    <td>{{$holiday->name}}</td>
                    <td>{{$holiday->date}}</td>            
                  </tr> 
                  @endforeach         
                </tbody>
              </table>
              <a class="btn btn-primary" href="{{route('pdf')}}">Download PDF</a>
        </div>
    </div>
</div>

@endsection