<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #1abc9c;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .title {
                display: grid;
                place-content: center;
                height: 1vh;
                
            }
            a{
                color:white;
                font-family: sans-serif;
                font-size: 80px;
                font-weight: bold;
                text-decoration: none;
            }
            .image{
                
                display: grid;
                place-content: center;
                height: 50vh;
               
            }
        </style>
    </head>
    <body >
        <div class="image">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"  alt="Admin" class="rounded-circle" width="350">
        </div>
        <div class="title">
           <a href="/home" class="btn btn-primary ">Student Management</a>
        </div>   
    
    
    </body>
</html>
