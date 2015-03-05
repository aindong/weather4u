@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="center">Welcome to weather4u</h1>
        <p class="center">Search the weather on your city</p>
        <br/><br/>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                {{ Form::open(['method' => 'get', 'class' => 'form-inline']) }}
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" id="exampleInputName2" placeholder="Enter your city here">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" class="form-control" id="exampleInputName2" placeholder="Enter your country code here">
                    </div>
                    <button type="submit" class="btn btn-primary">Get Weather</button>
                {{ Form::close() }}

                <div class="content center">
                    @if($weather->data->cod == 200)
                        <h1 class="uppercase">Some Information</h1>
                        <p>Coordinates: LON: {{ $weather->data->coord->lon }}, LAT: {{ $weather->data->coord->lat }}</p>
                        <p>Country Id: {{ $weather->data->sys->id }}</p>
                        <p>Country Code: {{ $weather->data->sys->country }}</p>
                        <p>City: {{ $weather->data->name }}</p>
                        <p>Sunrise: {{ date('M d Y H:i:s', $weather->data->sys->sunrise) }}</p>
                        <p>Sunset: {{ date('M d Y H:i:s', $weather->data->sys->sunset) }}</p>
                        <hr/>
                        <h1 class="uppercase">Weather Information</h1>
                        <p>Weather: {{ $weather->data->weather[0]->main }}</p>
                        <p>Description: {{ $weather->data->weather[0]->description }}</p>

                        <hr/>
                        <p>Temperature: {{ ((float)$weather->data->main->temp - 273.15) * 1.8000 + 32.00 }} Fahrenheit</p>
                    @else
                        ERROR ON REQUEST with REQUEST OF : {{ $weather->request }}
                    @endif
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@stop

