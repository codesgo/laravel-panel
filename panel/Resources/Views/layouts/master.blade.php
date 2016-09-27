<!DOCTYPE html>
<html lang="en">

	<head>

		<!-- Basic -->
		<title>Panel - @yield('title')</title>
		<meta charset="utf-8">
		<meta name="keywords" content=""/>
		<meta name="description" content="">
		<meta name="author" content="codesgo.com">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" />

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/panel/css/plugins.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/panel/css/styles.css">

	</head>

	<body>

		@include('panel::layouts.header')

		@include('panel::layouts.side')

		@yield('content')

		@include('panel::layouts.footer')


		<!-- Vendor -->
		<script src="/panel/js/plugins.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="/panel/js/scripts.js"></script>

	</body>
</html>
