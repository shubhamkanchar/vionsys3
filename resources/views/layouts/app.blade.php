<!doctype html>
<html lang="zxx">

<head>
	@include('layouts.css',['tilte'=>$title])
    @yield('css')
</head>

<body>

	@include('layouts.header')
	
    @yield('content')
	
	@include('layouts.footer')

    @yield('model')
	<!-- jQuery Min JS -->
	@include('layouts.script')
    @yield('script')
</body>

</html>