angular.module('AdminApp', [
		'ngRoute',
		'ngSanitize',
		'ngResource',
		'restangular',
		'appRoutes',

		'NewsController',
		'CategoryController',
		'UserController',
		'HeaderController',

		'NewsService',
		'CategoryService',
		'UserService',
	])
	.config(function(RestangularProvider, $httpProvider) {
		RestangularProvider.setBaseUrl('/admin');
	});