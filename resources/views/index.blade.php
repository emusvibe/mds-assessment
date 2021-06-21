@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5 offset-3">
        <div class="col-md-8">
            <div class="jumbotron">
                <h3 class="display-8 offset-1">South Africa Public Holidays</h3>
                
                <hr class="my-4">
                <p>This app displays a list of all South African Public Holidays for the year 2021</p>
                <p class="lead">
                    <br>
                  <a class="btn btn-primary btn-lg" href="{{route('holidays')}}" role="button">Fetch Holidays</a>
                </p>
              </div>
        </div>
    </div>
</div>


@endsection