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