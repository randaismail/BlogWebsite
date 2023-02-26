<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="IR-fa" dir="rtl">
 
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
     <meta name="author" content="Lukasz Holeczek">
     <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
     <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
     <title>{{ trans('words.tileSite') }}</title>
     <!-- Icons -->
     <link href="{{asset('adminassetes/css/font-awesome.min.css')}}" rel="stylesheet">
     <link href="{{asset('adminassetes/css/simple-line-icons.css')}}" rel="stylesheet">
     <!-- Main styles for this application -->
     <link href="{{asset('adminassetes/dest/style.css')}}" rel="stylesheet">
    
     <!-- dataTables-->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

 </head>
 <!-- BODY options, add following classes to body to change options
         1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
         2. 'sidebar-nav'		  - Navigation on the left
             2.1. 'sidebar-off-canvas'	- Off-Canvas
                 2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
                 2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
         3. 'fixed-nav'			  - Fixed navigation
         4. 'navbar-fixed'		  - Fixed navbar
     -->
 
 <body class="navbar-fixed sidebar-nav fixed-nav">

     @include('dashboard.layouts.navbar')
     @include('dashboard.layouts.sidebar')
      <!-- Main content -->
        <main class="main">
            @yield('content')
        </main>
     @include('dashboard.layouts.aside-menu')
     @include('dashboard.layouts.footer')

     <!-- Bootstrap and necessary plugins -->
     <script src="{{asset('adminassetes/js/libs/jquery.min.js')}}"></script>
     <script src="{{asset('adminassetes/js/libs/tether.min.js')}}"></script>
     <script src="{{asset('adminassetes/js/libs/bootstrap.min.js')}}"></script>
     <script src="{{asset('adminassetes/js/libs/pace.min.js')}}"></script>
 
     <!-- Plugins and scripts required by all views -->
     <script src="{{asset('adminassetes/js/libs/Chart.min.js')}}"></script>
 
     <!-- CoreUI main scripts -->
 
     <script src="{{asset('adminassetes/js/app.js')}}"></script>
 
     <!-- Plugins and scripts required by this views -->
     <!-- Custom scripts required by this view -->
     <script src="{{asset('adminassetes/js/views/main.js')}}"></script>
 
     <!-- Grunt watch plugin -->
     <script src="//localhost:35729/livereload.js"></script>

     <!-- dataTables-->
     <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

     @stack('javascripts')


 </body>
 
 </html>
 