<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Sekolah APP</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
        @if(session()->has('success'))
        <div class="alert alert-success w-100">{{ session('success') }}</div>
        @endif

        @if(session()->has('danger'))
        <div class="alert alert-danger w-100">{{ session('danger') }}</div>
        @endif
        </div>
       </div>
    </div>
    
        <div class="col-sm-12">
            @yield('content')
        </div>

    <script src="/js/bootstrap.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>