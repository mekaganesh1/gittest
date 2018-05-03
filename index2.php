
<?php echo phpinfo();
;?>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<script>
var app = angular.module('myaspp',[]);

app.controller('myctl',function($scope){
	
	$scope.Height = '50';
	$scope.lenghth = '40';
	
});

</script>


<div ng-app="myaspp" ng-init="names=['Jani','Hege','Kai']">


<div ng-repeat="x in names">
Sum of Ctrlto : {{ x}}
</div>




</div>