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
        <?php
            $data = json_decode($json, TRUE);
            $data2 = json_decode($json2, TRUE);
            $trianRect = json_decode($jsonTR, TRUE);
        ?>
                
        <h3>Data controller: <span id="span1" class="color-text2">{{ $title }}</span></h3>
        <span class="color-text1">
            {{ $json }}
        </span>
        <br>
        
        <span class="color-text2">
            {{ $data[0] }} -- {{ $data[1] }}
        </span>
        <br>
        
        <span class="color-text3">
            {{ $json2 }}
        </span>
        <br>
        
        <span class="color-text4">
            {{ $data2['name'] }} -- {{ $data2['age'] }} 
        </span>
        <br>
        
        <span class="color-text1">
        @if(!empty($jsonTR))
            {{ $jsonTR }} 
        @else
            Not data found
        @endif
        </span>
        <br>
        
        <ul class="color-text2">
        @foreach($trianRect as $side => $value)
            <li>{{ $side }}: {{ $value }} </li>
        @endforeach
        </ul>
        <br>
        
        @include('templates/footer')
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script>
            $(function(){
                $('#span1').addClass('size-text1');
            });
        </script>
    </body>
</html>
