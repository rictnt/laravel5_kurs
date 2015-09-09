<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/angular.min.js"></script>
    </head>
    <body ng-app="App" ng-controller="AppController">
        <button ng-click="pobieranieAktualnegoCzasu()">Pobieranie aktualnego czasu</button>
        <span>Aktualny czas: </span>
        <span style="color: green" ng-bind="aktualnyCzas"></span>
        <span ng-show="loading" style="color: red;">Ładowanie...</span>
        <div></div>
        <button ng-click="uruchomienieZegara()">Uruchomienie zegara</button>
        <span>Zegar: </span>
        <span style="color: blue" ng-bind="zegar"></span>
        <script src="{{ asset('js/angularExample.js') }}"></script>
    </body>
</html>
