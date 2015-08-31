angular.module('NewsService', [])
	.factory('News', ['$resource',
		function($resource) {
			return $resource('/back/news/:newsId', {
				todoId: '@id'
			}, {
				update: {
					method: 'PUT'
				}
			});
		}
	]);