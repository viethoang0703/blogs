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
			//Truyền giá trị news_id cho đối tượng comment
			$scope.commentData.news_id = new_detail.id;

			//Gọi services và truyền data sang service thực hiện save
			Comment.save($scope.commentData).success(function(data) {
				//Sau khi data được lưu thực hiện xóa DL người dùng đã nhập trên form
				$scope.commentData = {};

				//Đồng thời push vào 'news_detail.comment' để hiển thị comment vừa post luôn phía dưới 
				$scope.news_detail.comment.push(data);
			});
		};

		$scope.deleteComment = function(news_detail, person, index) {
			//Gọi service tìm và thực hiện xóa comment trong CSDL thông qua 'destroy' định nghĩa bên service
			Comment.destroy(person.id).success(function(news_detail) {
				//Lấy tổng số comment
				var len = $scope.news_detail.comment.length;
				//Không hiển thị comment vừa xóa ngay ở 'view'
				$scope.news_detail.comment.splice((len - index) - 1, 1);
			});
		};
	});