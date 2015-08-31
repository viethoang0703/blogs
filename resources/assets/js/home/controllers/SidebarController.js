angular.module('SidebarController', [])
	.controller('SidebarController', ['$scope', '$http',

		function($scope, $http) {
			$scope.getLastest = function() {
				$http.get('/api/news').then(function(data) {
					$scope.lastest = data.data;
				});

				$http.get('/api/prd').then(function(data) {
					$scope.prds = data.data;
				});

				$http.get('/api/cat_dropdown').then(function(data) {
					$scope.dropdownlist = data.data;
				});
			}
		}
	]);