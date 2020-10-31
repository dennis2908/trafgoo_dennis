<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Michael Dennis</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {
		  font-family: "Lato", sans-serif;
		}

		.sidenav {
		  height: 100%;
		  width: 160px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 20px;
		}

		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 14px;
		  color: #818181;
		  display: block;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.main {
		  margin-left: 160px; /* Same as the width of the sidenav */
		  font-size: 14px; /* Increased text to enable scrolling */
		  padding: 0px 10px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 14px;}
		}
		</style>
    </head>
    <body>
	    <div class="sidenav">
		  <a href="{!! route('dmadmin') !!}">User</a>
		</div>

		<div class="main">
		  @yield('content')		
		</div>
        

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        @stack('scripts')
    </body>
</html>