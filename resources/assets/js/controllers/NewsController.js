angular.module('NewsController', ['angularUtils.directives.dirPagination'])
	.controller('NewsController', ['$scope', '$http', '$routeParams',

		function($scope, $http, $routeParams) {
			$scope.getList = function() {
				$http.get('/api/news').then(function(data) {
					$scope.news = data.data;

				});
			}
			$scope.find = function() {
				$http.get('/api/news/' + $routeParams.id).then(function(data) {
					$scope.news_detail = data.data;
				});
			}

			$scope.find_cat = function() {
				$http.get('/api/category/' + $routeParams.id).then(function(data) {
					$scope.categories = data.data;
				});
			}
			$scope.number = 5;
		}
	]);