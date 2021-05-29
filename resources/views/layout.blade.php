<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0">
<title>Блог</title>
<!-- <link href='styles/style.css' rel="stylesheet" type="text/css" > -->
</style>
</head>
<body>
    @include('header')
    <div id="content">
      @yield('content')
    </div>
    @include('footer')
</body>
</html>