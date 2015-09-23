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
angular.module('CategoryController', [])
	.controller('CategoryController', ['$scope', '$location', '$routeParams', 'Category', 'Restangular',
		function($scope, $location, $routeParams, Category, Restangular) {
			$scope.find = function() {
				Category.getAll()
					.then(function(data) {
						$scope.categories = data;
						console.log(data);
					});
			};

			$scope.findOne = function() {
				Category.getOne()
					.then(function(data) {
						$scope.category = data;
					});
			};

			$scope.store = function(category) {
				$scope.loading = true;
				Category.create(category)
					.then(function(data) {
							$location.path('category/index');
						},
						function(error) {
							console.log("Could not create category" + error);
						});
			};

			$scope.create = function() {
				$scope.category = {
					cat_status: '1'
				};
			}

			$scope.update = function(category) {
				$scope.loading = true;
				Category.getEdit(category)
					.then(function(data) {
						category.put()
							.then(function(data) {
								$scope.loaing = false;
							});
					});
			};

			$scope.destroy = function(category) {
				$scope.loaing = true;
				Category.delete(category)
					.then(function() {
						var index = $scope.categories.indexOf(category);
						if (index > -1) {
							$scope.categories.splice(index, 1);
						}
					});
			}

		}
	]);
 angular.module('HeaderController', [])
 	.controller('HeaderController', function($scope, $location) {
 		$scope.isActive = function(viewLocation) {
 			return viewLocation === $location.path();
 		};
 	});
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

			$scope.findOne = function() {
				News.getOne()
					.then(function(data) {
						$scope.news = data;
					});
			};

			$scope.create = function() {
				News.getCreate()
					.then(function(data) {
						$scope.category = data;
						$scope.news = {
							news_status: '1'
						};
					});
			};

			$scope.edit = function() {
				News.getCreate()
					.then(function(data) {
						$scope.category = data;
					});
			};

			$scope.store = function(news) {
				$scope.loading = true;
				News.create(news)
					.then(function(data) {
							$location.path('news/index');
						},
						function(error) {
							console.log("Could not create news" + error);
						});
			};

			$scope.update = function(news) {
				$scope.loading = true;
				News.getEdit(news)
					.then(function(data) {
						news.put()
							.then(function(data) {
								$scope.loaing = false;
							});
					});
			};

			$scope.destroy = function(news) {
				$scope.loaing = true;
				News.delete(news)
					.then(function() {
						var index = $scope.news.indexOf(news);
						if (index > -1) {
							$scope.news.splice(index, 1);
						}
					});
			};

			$scope.$location = $location;
		}
	]);
angular.module('UserController', [])
	.controller('UserController', ['$scope', '$location', '$routeParams', 'User', 'Restangular',
		function($scope, $location, $routeParams, User, Restangular) {
			$scope.find = function() {
				User.getAll()
					.then(function(data) {
						$scope.users = data;
						console.log(data);
					});
			};

			$scope.findOne = function() {
				User.getOne()
					.then(function(data) {
						$scope.user = data;
					});
			};

			$scope.destroy = function(user) {
				$scope.loaing = true;
				User.delete(user)
					.then(function() {
						var index = $scope.users.indexOf(user);
						if (index > -1) {
							$scope.users.splice(index, 1);
						}
					});
			};
		}
	]);
angular.module('CategoryService', [])
	.factory('Category', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('category').getList();
			},

			getOne: function() {
				return Restangular.one('category', $routeParams.id).get();
			},

			create: function(category) {
				return Restangular.all('category').post(category);
			},

			getEdit: function(category) {
				return Restangular.one('category', category.id).get();
			},

			delete: function(category) {
				return Restangular.one('category', category.id).remove();
			}
		}
	});
angular.module('NewsService', [])
	.factory('News', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('news').getList();
			},

			getOne: function() {
				return Restangular.one('news', $routeParams.id).get();
			},

			getCreate: function() {
				return Restangular.all('news/create').getList();
			},

			create: function(news) {
				return Restangular.all('news').post(news);
			},

			getEdit: function(news) {
				return Restangular.one('news', news.id).get();
			},

			delete: function(news) {
				return Restangular.one('news', news.id).remove();
			}
		}
	});
angular.module('UserService', [])
	.factory('User', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('user').getList();
			},

			getOne: function() {
				return Restangular.one('user', $routeParams.id).get();
			},

			// create: function(user) {
			// 	return Restangular.all('user').post(user);
			// },

			// getEdit: function(user) {
			// 	return Restangular.one('user', user.id).get();
			// },

			delete: function(user) {
				return Restangular.one('user', user.id).remove();
			}
		}
	});
//# sourceMappingURL=admin.js.map