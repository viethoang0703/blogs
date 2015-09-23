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