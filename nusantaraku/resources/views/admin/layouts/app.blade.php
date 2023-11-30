<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/icons/remixicon.css" rel="stylesheet">
<link href="/icons/remixicon.woff2" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            align-items: center;
        }
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
        .card-dis{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-bottom: 1rem;
        }
        .card{
            margin-top: 1rem;
            margin-left: 1rem;
            margin-right: 1rem;
            background-color: #e4e4e492;
        }
        @media screen and (max-width: 599px) {
            .card-dis{grid-template-columns: 1fr;}
        }
        @media screen and (min-width: 600px) {
            .card-dis{grid-template-columns: repeat(2,1fr)}
        }
        @media screen and (min-width: 1200px) {
            .card-dis{grid-template-columns: repeat(3,1fr)}
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

 @include('admin.layouts.header')

 <div class="container-fluid">
   <div class="row">
     @include('admin.layouts.sidebar')

     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       @yield('container')
       </div>
     </main>
   </div>
 </div>
    <script src="/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script><script src="dashboard.js"></script>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
  </body>
</html>
