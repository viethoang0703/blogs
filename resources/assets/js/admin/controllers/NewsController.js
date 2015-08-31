// ngular.module('NewsController', [])
//     .controller('NewsController', ['$scope', '$location', '$routeParams', 'News', 'Restangular',
//         function($scope, $location, $routeParams, News, Restangular) {
//             $scope.find = function() {
//                 News.getAll()
//                     .then(function(data) {
//                         $scope.news = data;
//                         console.log(data);
//                     });
//             };
//         }
//     ]);