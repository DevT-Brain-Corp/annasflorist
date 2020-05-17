<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="mt-100">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><h2>Annas FLorist</h2></center>
            </div>
            <div class="card-body">
                <h2>Hi,<strong>{{ $name }}</strong></h2>
                <p>{{ $isi }}</p>
                <p>blA BL blanaohaiohcjasi</p>
                <p>{{ $total }}</p>
            </div>
        </div>
    </div>
</div>
<style>
    .mt-100{
        margin-top: 70px;
    }
    .container{
        margin-left: 50px;
        margin-right: 50px;
    }
    .card{
        border: black;
        background: #00E676;
    }
</style>
</body>
</html>
