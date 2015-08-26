angular.module('CommentController', [])
	.controller('CommentController', function($scope, $http, Comment) {
		$scope.commentData = {};
		$scope.loading = true;
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});

		// Thực hiện khi comment form submit
		$scope.submitComment = function() {
			$scope.loading = true;

			//Gọi services và truyền data sang service thực hiện save
			Comment.save($scope.commentData)
				.success(function(data) {
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});
				})
				.error(function(data) {
					console.log(data);
				});
		};

		$scope.deleteComment = function(id) {
			$scope.loading = true;
			Comment.destroy(id)
				.success(function(data) {
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});
				});
		};

	});