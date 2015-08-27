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