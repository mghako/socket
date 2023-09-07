<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing Socket</title>
        @vite('resources/js/app.js')
        <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        
        <span id="random_number_data"></span>
    </body>
    
    
<script>
    const socket = io('http://localhost:1234');

    socket.on('connect', () => {
        console.log('Connected to WebSocket');
    });

    socket.on('send-random-number', (data) => {
        // document.getElementById("")
        console.log('Server responded:', data.response);
    });
</script>
</html>
