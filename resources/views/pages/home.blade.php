@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>
            <span>Flight Board - Real Time</span>
            <a href="./departure"><button class="btn btn-secondary btn-space float-end me-2">Departure</button></a> 
            <a href="./arrival"><button class="btn btn-secondary btn-space float-end me-2">Arrival</button></a>
        </h1>

        <hr/>

        <table id="example" class="table table-striped" style="width:100%" aria-label="flights">
            <thead>
                <tr>
                    <th id="1">Date</th>
                    <th id="2">Flight</th>
                    <th id="3">Airline</th>
                    <th id="4">Departure From</th>
                    <th id="5">Departure Time</th>
                    <th id="6">Arrival To</th>
                    <th id="7">Arrival Time</th>
                    <th id="8">Status</th>
                </tr>
            </thead>
            <tbody>
                        @foreach($flights['data'] as $airline)
                        <tr>   
                            <td>{{ $airline['flight_date'] }}</td>
                            <td>{{ $airline['flight']['number'] }}</td>
                            <td>{{ $airline['airline']['name'] }}</td>
                            <td>{{ $airline['departure']['airport'] }}</td>
                            <td>{{ substr($airline['departure']['estimated'], 11, 5) }}</td>
                            <td>{{ $airline['arrival']['airport'] }}</td>
                            <td>{{ substr($airline['arrival']['estimated'], 11, 5) }}</td>
                            <td>{{ $airline['flight_status'] }}</td>
                        </tr>
                        @endforeach
            

            </tbody>
            <tfoot>
                <tr>
                    <th id="1">Date</th>
                    <th id="2">Flight</th>
                    <th id="3">Airline</th>
                    <th id="4">Departure Frome</th>
                    <th id="5">Departure Time</th>
                    <th id="6">Arrival To</th>
                    <th id="7">Arrival Time</th>
                    <th id="8">Status</th>
                </tr>
            </tfoot>
        </table>



    </div>


@endsection