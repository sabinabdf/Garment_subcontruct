<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Dashboard | Broker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- Plugins css-->
        <link href="{{asset('admin_assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
       

    </head>

    <body>
        <div id="wrapper">