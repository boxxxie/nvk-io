// Declare app level module which depends on filters, and services
angular.module('myApp', []).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {templateUrl: 'partials/home.html'});
	// $routeProvider.when('/faq', {templateUrl: 'partials/faq.html'});
	// $routeProvider.when('/discover', {templateUrl: 'partials/campaign_list.html', controller: landing_ctrl});
	// $routeProvider.when('/create', {templateUrl: 'partials/create.html', controller: create_ctrl});
	// $routeProvider.when('/edit/:campaign_id', {templateUrl: 'partials/create.html', controller: edit_ctrl});
	//     $routeProvider.when('/campaigns/:campaign_id', {templateUrl: 'partials/campaign.html', controller: campaign_ctrl});
	//     $routeProvider.when('/campaigns/:campaign_id/targets', {templateUrl: 'partials/targets.html', controller: campaign_ctrl});
	//     $routeProvider.otherwise({redirectTo: '/'});
  }]);
