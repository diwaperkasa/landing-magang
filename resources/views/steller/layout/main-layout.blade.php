<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield('title', 'Default Title')</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @include('steller.layout.navbar')  

    @include('steller.layout.header')

    @yield('content')
    
    @include('steller.layout.footer')
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <!-- steller js -->
    <script src="assets/js/steller.js"></script>
</body>
</html>