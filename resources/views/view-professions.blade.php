<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View 4</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    </head>
    <body>
                        
        <h3><span id="span1" class="color-text1">{{ $title }}</h3>
                
        <ul class="color-text2">
        @foreach($professions as $profession)
            <li>{{ $profession->id }} -- {{ $profession->description }} </li>
        @endforeach
        </ul>
        <br>
        
        @include('templates/footer')
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script>
            $(function(){
                
            });
        </script>
    </body>
</html>
