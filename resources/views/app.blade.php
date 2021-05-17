<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel with Vue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light" style="background-color: #0a4275;">
        <a class="navbar-brand text-white" href="/">
            <img src="{{ asset('images/logo.png') }}" width="30" height="30"
                class="d-inline-block align-top" alt="">
            <strong>CRUD POST</strong>
        </a>
    </nav>
    <div id="app">

    </div>


  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275; bottom: 0; position: fixed; width: 100%;">

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" target="_blank" href="https://muhammad-rizal.dev/">muhammad-rizal.dev</a>
    </div>
    <!-- Copyright -->
  </footer>


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
