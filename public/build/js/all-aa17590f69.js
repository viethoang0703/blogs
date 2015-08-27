angular.module('HomeApp', [
	'ngRoute',
	'ngSanitize',
	//'ngResource',
	//'restangular',
	'appRoutes',
	'NewsController',
	//'NewsService',
	'SidebarController',
	'CommentController',
	'CommentService',
]);
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
angular.module('CommentController', [])
	.controller('CommentController', function($scope, $http, $routeParams, Comment) {
		$scope.loading = true;
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});
		// Thực hiện khi comment form submit
		$scope.submitComment = function(new_detail) {
			//Gọi services và truyền data sang service thực hiện save
			$scope.commentData.news_id = new_detail.id;
			Comment.save($scope.commentData).success(function(data) {
				$scope.commentData = {};
				$scope.news_detail.comment.push(data);
			});
		};

		$scope.deleteComment = function(news_detail, person) {
			Comment.destroy(person.id).success(function(person) {
				var idx = $scope.news_detail.comment.indexOf(person);
				$scope.news_detail.comment.splice(idx, 1);
			});
		};
	});
angular.module('NewsController', ['angularUtils.directives.dirPagination'])
	.controller('NewsController', ['$scope', '$http', '$routeParams',

		function($scope, $http, $routeParams) {
			$scope.commentData = {};
			$scope.getList = function() {
				$http.get('/api/news').then(function(data) {
					$scope.news = data.data;

				});
			}
			$scope.find = function() {
				$http.get('/api/news/' + $routeParams.id).then(function(data) {
					$scope.news_detail = data.data;
					$scope.commentData.news_id = $scope.news_detail.id;
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
angular.module('CommentService', [])
	.factory('Comment', function($http) {
		return {
			get: function() {
				return $http.get('/api/comments');
			},
			//Gọi api và truyền data nhận được (theo phương thức Post và route đến /api/comments)
			save: function(commentData) {
				return $http({
					method: 'POST',
					url: '/api/comments',
					headers: {
						'Content-Type': 'application/x-www-form-urlencoded'
					},
					data: $.param(commentData)
				});
			},

			destroy: function(id) {
				return $http.delete('/api/comments/' + id);
			}
		}
	});

//# sourceMappingURL=all.js.map