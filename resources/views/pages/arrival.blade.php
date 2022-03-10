@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>
            <span>Flight Board - Arrival</span>
            <a href="./departure"><button class="btn btn-secondary btn-space float-end me-2">Departure</button></a> 
            <a href="./"><button class="btn btn-secondary btn-space float-end me-2">Home</button></a>
        </h1>

        <hr/>

        <table id="example" class="table table-striped" style="width:100%" aria-label="arrival">
            <thead>
                <tr>
                    <th id="1">Flight</th>
                    <th id="2">Airline</th>
                    <th id="3">Airport</th>
                    <th id="4">Arrival Time</th>
                    <th id="5">Terminal</th>
                    <th id="6">Gate</th>
                    <th id="7">Status</th>
                    <th id="8">Time Zone</th>

                </tr>
            </thead>
            <tbody>
                        @foreach($arrival['data'] as $airline)
                        <tr>   
                            <td>{{ $airline['flight']['number'] }}</td>
                            <td>{{ $airline['airline']['name'] }}</td>
                            <td>{{ $airline['arrival']['airport'] }}</td>
                            <td>{{ substr($airline['arrival']['scheduled'], 11, 5) }}</td>
                            <td>{{ $airline['arrival']['terminal'] }}</td>
                            <td>{{ $airline['arrival']['gate'] }}</td>
                            <td>{{ $airline['flight_status'] }}</td>
                            <td>{{ $airline['arrival']['timezone'] }}</td>
                        </tr>
                        @endforeach
            

            </tbody>
            <tfoot>
                <tr>
                    <th id="1">Flight</th>
                    <th id="2">Airline</th>
                    <th id="3">Airport</th>
                    <th id="4">Arrival Time</th>
                    <th id="5">Terminal</th>
                    <th id="6">Gate</th>
                    <th id="7">Status</th>
                    <th id="8">Time Zone</th>
                </tr>
            </tfoot>
        </table>



    </div>


@endsection