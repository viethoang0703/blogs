angular.module('AdminApp', [
	'ngRoute',
	'ngSanitize',
	'ngResource',
	'restangular',
	'appRoutes',

	'NewsController',
	'NewsService',
]);
angular.module('appRoutes', [])
	.config(['$routeProvider', '$locationProvider', '$httpProvider',
		function($routeProvider, $locationProvider, $httpProvider) {
			$routeProvider
				.when('/', {
					templateUrl: 'auth/admin',
					//controller: 'NewsController',
				})
				.when('/:controller/:action?/:id?', {
					templateUrl: function(params) {
						var allowedParams = ['controller', 'action', 'id'];
						var paramVals = [];
						for (var key in params) {
							if (allowedParams.indexOf(key) !== -1) {
								paramVals.push(params[key]);
							}
						}
						return '/auth/' + paramVals.join('/');
					}
				})
				.otherwise({
					redirectTo: '/index'
				});

			//$locationProvider.html5Mode(true);
		}
	]);
angular.module('NewsController', [])
    .controller('NewsController', ['$scope', '$location', '$routeParams', 'News', 'Restangular',
        function($scope, $location, $routeParams, News, Restangular) {
            $scope.find = function() {
                News.getAll()
                    .then(function(data) {
                        $scope.news = data;
                        console.log(data);
                    });
            };
        }
    ]);
angular.module('NewsService', [])
	.factory('News', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('back/news').getList();
			}
		}
	});
//# sourceMappingURL=admin.js.map