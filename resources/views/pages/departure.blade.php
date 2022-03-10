@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>
            <span>Flight Board - Departure</span>
            <a href="./"><button class="btn btn-secondary btn-space float-end me-2">Home</button></a> 
            <a href="./arrival"><button class="btn btn-secondary btn-space float-end me-2">Arrival</button></a>
        </h1>

        <hr/>

        <table id="example" class="table table-striped" style="width:100%" aria-label="departure">
            <thead>
                <tr>
                    <th id="1">Flight</th>
                    <th id="2">Airline</th>
                    <th id="3">Airport</th>
                    <th id="4">Departure Time</th>
                    <th id="5">Terminal</th>
                    <th id="6">Gate</th>
                    <th id="7">Status</th>
                    <th id="8">Time Zone</th>

                </tr>
            </thead>
            <tbody>
                        @foreach($departure['data'] as $airline)
                        <tr>   
                            <td>{{ $airline['flight']['number'] }}</td>
                            <td>{{ $airline['airline']['name'] }}</td>
                            <td>{{ $airline['departure']['airport'] }}</td>
                            <td>{{ substr($airline['departure']['scheduled'], 11, 5) }}</td>
                            <td>{{ $airline['departure']['terminal'] }}</td>
                            <td>{{ $airline['departure']['gate'] }}</td>
                            <td>{{ $airline['flight_status'] }}</td>
                            <td>{{ $airline['departure']['timezone'] }}</td>
                        </tr>
                        @endforeach
            

            </tbody>
            <tfoot>
                <tr>
                    <th id="1">Flight</th>
                    <th id="2">Airline</th>
                    <th id="3">Airport</th>
                    <th id="4">Departure Time</th>
                    <th id="5">Terminal</th>
                    <th id="6">Gate</th>
                    <th id="7">Status</th>
                    <th id="8">Time Zone</th>
                </tr>
            </tfoot>
        </table>



    </div>


@endsection