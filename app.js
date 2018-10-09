var app = angular.module("reviveMailer", []);

app.controller("MainCtrl", function($http, $timeout) {
    this.loadSettings = function() {
        var self = this;
        $http.get('loadSettings.php').then(function(result) {
            self.contacts = result.data.contacts;
        }, function() {
            self.contacts = [];
        }).finally(function() {
            self.step = 1;
        });
    };

    this.login = function() {
        var self = this;
        var req = {
            method: 'POST',
            url: 'login.php',
            data: {authCode: self.authCode}
        };

        $http(req).then(function(result) {
            self.isAuthorized = result.data.isAuthorized;
            self.isAuthorizing = true;

            if (self.isAuthorized) {
                self.loadSettings();
            }
        }, function() {
            self.isAuthorized = false;
        }).finally(function() {
            $timeout(function() { self.isAuthorizing = false; }, 5000);
        })
    };
});