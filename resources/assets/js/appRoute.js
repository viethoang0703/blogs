angular.module('appRoutes', [])
	.config(['$routeProvider', '$locationProvider', '$httpProvider',
		function($routeProvider, $locationProvider, $httpProvider) {
			$routeProvider
				.when('/', {
					templateUrl: '/home/index',
					controller: 'NewsController',
				})
				.when('/index', {
					templateUrl: '/home/index',
					controller: 'NewsController',
				})
				.when('/:controller/:id?', {
					templateUrl: function(params) {
						var allowedParams = ['controller'];
						var paramVals = [];
						for (var key in params) {
							if (allowedParams.indexOf(key) !== -1) {
								paramVals.push(params[key]);
							}
						}
						return '/home/' + paramVals.join('/') + '/view';
					}
				})
				.when('/:controller/:action?/:id?', {
					templateUrl: function(params) {
						var allowedParams = ['controller', 'action'];
						var paramVals = [];
						for (var key in params) {
							if (allowedParams.indexOf(key) !== -1) {
								paramVals.push(params[key]);
							}
						}
						return '/home/' + paramVals.join('/');
					}
				})
				.otherwise({
					redirectTo: '/index'
				});
			$locationProvider.html5Mode({
				enabled: true,
				requireBase: false
			});
		}
	]);