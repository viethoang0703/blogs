angular.module('appRoutes', [])
	.config(['$routeProvider', '$locationProvider', '$httpProvider',
		function($routeProvider, $locationProvider, $httpProvider) {
			$routeProvider
				.when('/auth', {
					templateUrl: 'auth/admin',
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
					redirectTo: '/admin'
				});

			//$locationProvider.html5Mode(true);
		}
	]);