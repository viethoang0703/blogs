angular.module('HomeApp', [
	'ngRoute',
	'ngSanitize',
	//'ngResource',
	//'restangular',
	'appRoutes',

	'NewsController',
	'SidebarController',
	'CommentController',

	//'NewsService',
	'CommentService',
]);
angular.module('appRoutes', [])
	.config(['$routeProvider', '$locationProvider',
		function($routeProvider, $locationProvider) {
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
						var allowedParams = ['controller', 'action', 'id'];
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
//# sourceMappingURL=auth.js.map