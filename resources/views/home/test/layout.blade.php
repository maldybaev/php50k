 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Блог</title>
<style type="text/css" media="screen">
@import url( style.css );
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