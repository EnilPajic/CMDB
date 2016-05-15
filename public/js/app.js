var App = angular.module('App', [
    'pascalprecht.translate',

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

alert("yoooo");
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
alert ('RADIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII');
$("#register").click(function(e) {

            $("#RegistrujSe").modal('show');



    e.preventDefault(); // avoid to execute the actual submit of the form.
});
});