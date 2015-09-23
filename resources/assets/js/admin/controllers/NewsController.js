angular.module('NewsController', ['angularUtils.directives.dirPagination'])
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
			// $scope.uploadPic = function(file) {
			// 	file.upload = Upload.upload({
			// 		url: 'https://angular-file-upload-cors-srv.appspot.com/upload',
			// 		fields: {
			// 			username: $scope.username
			// 		},
			// 		file: file,
			// 	});

			// 	file.upload.then(function(response) {
			// 		$timeout(function() {
			// 			file.result = response.data;
			// 		});
			// 	}, function(response) {
			// 		if (response.status > 0)
			// 			$scope.errorMsg = response.status + ': ' + response.data;
			// 	});

			// 	file.upload.progress(function(evt) {
			// 		// Math.min is to fix IE which reports 200% sometimes
			// 		file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
			// 	});
			// }
		}
	]);