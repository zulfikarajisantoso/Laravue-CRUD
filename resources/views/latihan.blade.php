<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravue</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
    
    
        <!-- <headercom></headercom> -->
        <router-view></router-view>
        <footercom></footercom>
    </div>
    <script src="{{asset('js/app.js')}}" ></script>
</body>
</html>