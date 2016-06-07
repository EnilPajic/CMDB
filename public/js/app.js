var App = angular.module('App', [
    'ngRoute',
    'pascalprecht.translate',
    'ui.bootstrap'


]);

App.provider('razmjena',function(){
    this.objekat = "hiiii";

    this.$get = function(){
        var obj = this.objekat;
        return {
            getObjekat: function(){
                return obj;
            },
            setObjekat:function(ob){
                this.objekat = ob;
            }
        }
    }

    //this.setObjekat = function(obj){
    //    this.objekat = obj;
    //}
    //var objekat = "";
    //return {
    //    setObjekat: function(obj){
    //        objekat = obj;
    //    },
    //    getObjekat:function(){
    //        return objekat;
    //    },
    //    alert:function(){
    //        alert('test');
    //    }
    //}
})

App.config(function($translateProvider,$routeProvider){


    //$translateProvider.useStaticFilesLoader({
    //    //prefix: 'locale-',
    //    prefix: 'i18n/',
    //    suffix: '.json'
    //});
    $translateProvider.translations('en-US',{

        "HOME":"Home",
        "ABOUT":"About",
        "CONTACT":"Contact",
        "TITLE":"Title",
        "NA_VRH":"back to top",
        "VIEW_MORE1": "An ancient struggle between two Cybertronian races, the heroic Autobots and the evil Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager.",
        "VIEW_MORE2": "Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity.",
        "VIEW_MORE3":"When bitten by a genetically modified spider, a nerdy, shy, and awkward high school student gains spider-like abilities that he eventually must use to fight evil as a superhero after tragedy befalls his family.",
        "FEATURETE_HEADER1": "First featurette heading. It'll blow your mind.",
        "FEATURETE_HEADER2":"Oh yeah, it's that good. See for yourself.",
        "FEATURETE_HEADER3":"And lastly, this one. Checkmate.",
        "FEATURETE_CONTENT1":"The fictional character Batman, a comic book superhero featured in DC Comics publications and created by Bob Kane and Bill Finger, has appeared in various films since his inception.",
        "FEATURETE_CONTENT2":"Transformers is a 2007 American science fiction action film based on the Transformers toy line. The film, which combines computer animation with live-action, is directed by Michael Bay, with Steven Spielberg serving as executive producer.",
        "FEATURETE_CONTENT3":"Life of Pi is a 2012 American survival drama film based on Yann Martel's 2001 novel of the same name. Directed by Ang Lee, the film's adapted screenplay was written by David Magee, and it stars Suraj Sharma, Irrfan Khan, Rafe Spall, Gérard Depardieu, Tabu, and Adil Hussain."


    })

    $translateProvider.translations('bs-Latn-BA',{

        "HOME":"Pocetna",
        "ABOUT":"O nama",
        "CONTACT":"Kontakt",
        "TITLE":"Naslov",
        "NA_VRH": "vrati na pocetak",
        "VIEW_MORE1":"Drevna borba između dva Cybertronian trke, herojske Autoboti i zli Deseptikoni, dolazi na Zemlju, sa trag do konačnog vlast drži tinejdžer.",
        "VIEW_MORE2":"najmoćniji heroji Zemlje moraju doći zajedno i uče da se bore kao tim, ako žele da zaustave nestašne Loki i njegova vanzemaljska armija od porobljava čovječnosti ..",
        "VIEW_MORE3":"Kada ugrizao genetski modificirani pauk, a štreber, stidljiv i nespretan srednjoškolac dobici pauka poput sposobnosti da na kraju mora koristiti u borbi protiv zla kao superheroj nakon tragedije zadesi njegova porodica.",
        "FEATURETE_HEADER1": "Prva featurette naslovom. To će vas oduševiti.",
        "FEATURETE_HEADER2":"O da, to je to dobro. Uvjerite se sami.",
        "FEATURETE_HEADER3":"I na kraju, ovo jedan. Šah-mat.",
        "FEATURETE_CONTENT1":"U izmišljeni lik Batman, strip superheroj pojavljuje u DC Comics publikacijama i stvorio Bob Kane i Bill Finger, pojavio se u raznim filmovima od njegovog osnivanja.",
        "FEATURETE_CONTENT2":"Transformers je 2007. godine američki naučne fantastike akcioni film baziran na transformatorima igračka linije. Film, koji kombinuje kompjutersku animaciju sa živim akcije, u režiji Michaela Bay, Steven Spielberg služi kao izvršni producent.",
        "FEATURETE_CONTENT3":"Život Pi je 2012 američki opstanak drama film zasnovan na 2001 romanu istog imena Yann Martela. U režiji Ang Lee, adaptirani scenario filma napisao je David Magee, a zvijezde Suraj Sharma, Irfan Khan, Rafe Spall, Gérard Depardieu, Tabu, i Adil Hussain."



    })

    $translateProvider.preferredLanguage('en-US');
    $translateProvider.fallbackLanguage('en-US');


    $routeProvider
        .when('/test1',{
            templateUrl:"/dashboard"
            //template: "<h1>test1 ruta</h1>"
            //controller: "homeController"
        })
    $routeProvider
        .when('/myadmin',{
            templateUrl:"/admin"
            //template: "<h1>test1 ruta</h1>"
            //controller: "homeController"
        })

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
/*    $(window, document, undefined).ready(function() {
 $("#register").click(function(e) {

 $("#RegistrujSe").modal('show');



 e.preventDefault(); // avoid to execute the actual submit of the form.
 });



 });*/

//za kolačiće
function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}
function setCookie(key, value) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}
App.controller('loginCTRL', ['$scope','$http','razmjena','$location', function($scope,$http,razmjena,$location) {
    $scope.LogujSe = function LogujSe ()
    {
        var pass = document.getElementById("main_form_pass");
        var em = document.getElementById("main_form_email");
        var FD = new FormData();
        FD.append ("email", em.value);
        FD.append ("password", pass.value);
        $.ajax(
            {

                url: 'login',
                type: 'POST',
                processData: false,
                contentType: false,
                data: FD,
                success: function (r) {
                    TK = JSON.parse(JSON.stringify(r));
                    localStorage.setItem('token', TK.token);
                    var html = $http({method: 'POST', url: '/dashboard', headers: {
                        'Authorization': 'Bearer ' + TK.token
                    }

                    }).then (function (resp) {
                        var m = document.getElementById("Kontejner_wrappera");
                        $location.url('/test1');
                        m.innerHTML= "";
                        //razmjena.setObjekat(resp.data);
                        //ocument.body.innerHTML = resp.data;
                        //angular.element(document.getElementById('yourControllerElementID')).scope().get();
                    });


                },
                error: function (rr) {
                    var k = JSON.stringify(rr.responseJSON);
                    var z = JSON.parse(k);
                    alert (z.error);
                }

            }
        )
    };
    /**
     * @return {boolean}
     */
    $scope.Admin = function ()
    {

 //                   var html = $http({method: 'GET', url: '/admin', headers: {
//                        'Authorization': 'Bearer ' + localStorage.getItem("token")
//                    }

  //                  }).then (function (resp) {

                        var m = document.getElementById("ukloni");
                        $location.url('/myadmin');
                        m.innerHTML= "";
                        //razmjena.setObjekat(resp.data);
                        //ocument.body.innerHTML = resp.data;
                        //angular.element(document.getElementById('yourControllerElementID')).scope().get();
 //                   });
        return false;

    }
    $scope.Filmovi = function ()
    {

            $location.url('/test1');
            m.innerHTML= "";
            //razmjena.setObjekat(resp.data);
            //ocument.body.innerHTML = resp.data;
            //angular.element(document.getElementById('yourControllerElementID')).scope().get();


    }

}]);



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

