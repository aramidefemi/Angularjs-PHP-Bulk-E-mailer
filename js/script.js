/* <!--This source code was Written by Oluwafemi Olasubomi Aramide  instagram @aramideajax -->
 */
'use_strict';

var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope, $http) { 
    femi = $scope;
    femi.report = null;
    femi.send= function (form) {
        femi.report = "Sending To Emails...";
        var request = $http({
            method: "post",
            url: "back/mailer",
            data: form,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        });
        /* Check whether the HTTP Request is successful or not. */
        request.success(function (data, status) {
            femi.report = "Emails Sent";
            console.log(data);
        });
    }
 

});