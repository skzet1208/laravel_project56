<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>たいとる</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
          #app {
              display: flex;
              height: 100%;
              justify-content: center;
              align-items: center;
          }
        </style>

        <script>
         window.Laravel = {
             csrfToken: "{{ csrf_token() }}"
         };
        </script>
    </head>
    <body>
      <div id="app">
        <el-container>
          <el-header>
            <navbar></navbar>
          </el-header>

          <el-main>
            <div class="container">
              <router-view></router-view>
            </div>
          </el-main>

          <el-footer>Footer</el-footer>
        </el-container>

      </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
