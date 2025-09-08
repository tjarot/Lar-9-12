<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/scss/app.scss')
</head>
<body>
    <div class="container text-center py-4">
        <h1>Aprilia Mutiara Kasih</h1>
        <button id="myPopover" type="button" class="btn btn-lg btn-danger mt-4"
        data-bs-toggle="popover" title="Lagi serius..."
        data-bs-content="Buku Laravel Uncover top bgt!">
        Aprilia Mutiara Kasih</button>
    </div>
    @vite('resources/js/app.js')
</body>
</html>