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