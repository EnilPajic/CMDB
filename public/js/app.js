var App = angular.module('App', [
    'pascalprecht.translate',
    'ui.bootstrap'


]);

App.config(function($translateProvider){


    //$translateProvider.useStaticFilesLoader({
    //    //prefix: 'locale-',
    //    prefix: 'i18n/',
    //    suffix: '.json'
    //});
    $translateProvider.translations('en-US',{
        "TITLE":"Title",
        "NA_VRH":"back to top"
    })

    $translateProvider.translations('bs-Latn-BA',{
        "TITLE":"Naslov",
        "NA_VRH": "vrati na pocetak"
    })

    $translateProvider.preferredLanguage('en-US');
    $translateProvider.fallbackLanguage('en-US');


});

App.controller('translateCtr',function($scope,$translate){

/*alert("yoooo");*/
    $scope.dummy="testulaz";
    $scope.changeLanguage = function (langKey) {
        if(langKey==null || typeof (langKey)=='undefined'){
            langKey='en-US';
        }
        $translate.use(langKey);
        $scope.jezik = langKey;
    };
});
    $(window, document, undefined).ready(function() {
        $("#register").click(function(e) {

            $("#RegistrujSe").modal('show');



            e.preventDefault(); // avoid to execute the actual submit of the form.
        });



    });

App.directive('ngFilmTabela',function(){
    //U htmlu se poziva ng-film-tabela
    return {
        //ovo mozemo nakucati nesto za male stvari HTMLa da ne moramo kucat nesto novo kao pozadinsku stranicu
        //template: '<p>{{temp}}</p><button ng-click="dajFilmoveSve()">testDajFilmove</button><div ng-repeat="film in filmovi"><span>naziv: {{film.naziv}}</span>-<span>ocjena: {{film.ocjena_filma}}</span></div>',
        templateUrl:'Filmovi.html',
        controller: function($scope,$http){



            $scope.pageChanged = function() {
                $scope.dajStranicu();
                //$log.log('Page changed to: ' + $scope.currentPage);
            };


            //$scope.temp = "test!!!!!";
            //$scope.filmovi = [{
            //    naziv:"film1",
            //    ocjena_filma:"ocjena1"
            //},
            //    {
            //        naziv:'film2',
            //        ocjena_filma:'454'
            //    }
            //];
            $scope.trenutnaStranica = {
                size:10,
                page:1,
                totalItems:0
            }

            $scope.filmoviSvi = null;

            $scope.dajFilmoveSve = function(){
                $http({
                    method:'GET',
                    url:'/film/svi'
                }).success(function(data, status, x, y){
                    //alert(data + " "+status);
                    $scope.filmoviSvi = data.Data;
                    $scope.trenutnaStranica.totalItems = $scope.filmoviSvi.length;
                    $scope.dajStranicu();
                }).error(function(x,y,z){
                    alert('fail');
                })
            }

            $scope.dajStranicu = function(size,page){
                if(size){
                    $scope.trenutnaStranica.size = size;
                }
                if(page!=null && typeof (page)!='undefined'){

                    $scope.trenutnaStranica.page = page;
                }
                var ipoc = $scope.trenutnaStranica.size*($scope.trenutnaStranica.page-1);
                var ikraj = $scope.trenutnaStranica.size + ipoc;

                var filmovi = JSON.parse(JSON.stringify($scope.filmoviSvi.slice(ipoc,ikraj))) ;
                $scope.filmovi = filmovi;
            }

            $scope.dajFilmoveSve();
        }
    }
})

App.controller('filmoviCtrl',function($scope){

    $scope.test1="test!!";
    $scope.filmovi = [{
        naziv:"film1",
        ocjena_filma:"ocjena1"}
    ];
});

App.factory('BearerAuthInterceptor', function ($window, $q) {

    return {
        request: function(config) {

            config.headers = config.headers || {};
            alert ('zatrazeno: ' + $window.localStorage.getItem('token'));
            if ($window.localStorage.getItem('token')) {
                // may also use sessionStorage
                config.headers.Authorization = 'Bearer ' + $window.localStorage.getItem('token');
            }
            return config || $q.when(config);
        },
        response: function(response) {
            if (response.status === 401) {
                //  Redirect user to login page / signup Page.
            }
            return response || $q.when(response);
        }
    };
});

// Register the previously created AuthInterceptor.
App.config(function ($httpProvider) {
    $httpProvider.interceptors.push('BearerAuthInterceptor');
});