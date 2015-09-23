angular.module('UserService', [])
	.factory('User', function(Restangular, $routeParams) {
		return {
			getAll: function() {
				return Restangular.all('user').getList();
			},

			getOne: function() {
				return Restangular.one('user', $routeParams.id).get();
			},

			// create: function(user) {
			// 	return Restangular.all('user').post(user);
			// },

			// getEdit: function(user) {
			// 	return Restangular.one('user', user.id).get();
			// },

			delete: function(user) {
				return Restangular.one('user', user.id).remove();
			}
		}
	});