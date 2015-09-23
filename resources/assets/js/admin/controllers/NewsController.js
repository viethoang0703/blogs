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
					});
			}

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
			}

			$scope.destroy = function(news) {
				$scope.loaing = true;
				News.delete(news)
					.then(function() {
						var index = $scope.news.indexOf(news);
						if (index > -1) {
							$scope.news.splice(index, 1);
						}
					});
			}

		}
	]);