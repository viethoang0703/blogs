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