<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login - AASAO Admin </title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('backend/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

</head>

<body class="bg-light">

    <main class="logout-body">
        <div class="logo text-center mt-5">
            <h2 class="font-weight-bold"><a href="{{ route('home') }}">AASAO<span class="text-primary"> Alabama.</span></a></h2>
        </div>
        @yield('content')

    </main>
	<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('backend/js/custom.js') }}"></script>
</body>

</html>
