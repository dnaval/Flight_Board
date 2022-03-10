<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('/css/dnaval.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="asset('favicon.ico')">
        <title>{{config('app_name','Flight_Board')}}</title>
    
        <style>
          .imgblurfx {
              filter: none; 
              -webkit-filter: blur(0px); 
              -moz-filter: blur(0px); 
              -ms-filter: blur(0px);
              filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='0');
              image-rendering: auto;
          }
        </style>
      </head>
      <body>
    
         <!-- CONTENT -->
          @yield('content')
          <!-- END CONTENT -->
    
    
        <!--  JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
    
        <!-- Data table JS script -->
        <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable( {
            "columnDefs": [
                {
                    
                }
            ]
        } );
        } );
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
        
      </body>
</html>
