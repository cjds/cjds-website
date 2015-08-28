<!DOCTYPE html>
<html ng-app>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carl Saldanha | Designer & Developer</title>

    <link rel="stylesheet" href="{{URL::asset('css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/main.css', false);}}" />
    <script src="{{URL::asset('js/vendor/modernizr.js')}}"></script>
	<style>

</style>
</head>
<body >
<nav class="top-bar" data-topbar >
  <ul class="title-area left">
    <li class="name">
      <h1><a href="{{URL::to('');}}" style='text-align:left' >Carl Saldanha</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="{{URL::to('projects');}}">Projects</a></li>
      <li><a href="{{URL::to('resume');}}">Résumé</a></li>
      <li><a href="http://cjds.github.io/">Blog</a></li>
      </li>
    </ul>

  </section>
</nav>

@yield('content')
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script type="text/javascript">
      angular.module('ngAppDemo', []).controller('ngAppDemoController', function($scope) {
        $scope.a = 1;
        $scope.b = 2;
      });
    </script>
</html>




