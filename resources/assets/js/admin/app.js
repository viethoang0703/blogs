angular.module('AdminApp', [
		'ngRoute',
		'ngSanitize',
		'ngResource',
		'restangular',
		'appRoutes',

		'NewsController',
		'CategoryController',
		'UserController',

		'NewsService',
		'CategoryService',
		'UserService',
	])
	.config(function(RestangularProvider, $httpProvider) {
		RestangularProvider.setBaseUrl('/admin');
	});