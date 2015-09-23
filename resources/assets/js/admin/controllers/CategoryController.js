angular.module('CategoryController', ['angularUtils.directives.dirPagination'])
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