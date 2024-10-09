<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar></x-navbar>
    <div class="container-fluid pe-5 ps-5 mb-3 mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                {{$slot}}

            </div>
        </div>
    </div>
</body>
</html>