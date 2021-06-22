@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8">

          <div class="card">
            <div class="card-header">
              South Africa Public Holidays
            </div>
            <div class="card-body">
              {{-- <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}} 
               <table class="table table-striped mt-5">
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
              <a href="{{route('pdf')}}" class="btn btn-primary">Download PDF</a>
            </div>
          </div>
            </div>
    </div>
</div>

@endsection