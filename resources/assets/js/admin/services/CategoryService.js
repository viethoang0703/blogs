angular.module('CategoryService', [])
	.factory('Category', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('category').getList();
			},

			getOne: function() {
				return Restangular.one('category', $routeParams.id).get();
			},

			create: function(category) {
				return Restangular.all('category').post(category);
			},

			getEdit: function(category) {
				return Restangular.one('category', category.id).get();
			},

			delete: function(category) {
				return Restangular.one('category', category.id).remove();
			}
		}
	});