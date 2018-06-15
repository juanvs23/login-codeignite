<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src=" <?php echo base_url('lib/js/bootstrap/jquery-3.3.1.js')  ?> "></script>
<script src=" <?php echo base_url('lib/js/bootstrap/bootstrap.js')   ?> "></script>

<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.pass = '';
    
});
app.directive('myDirective', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attr, mCtrl) {
            function myValidation(value) {
                if (value.indexOf("@") > -1) {
                    mCtrl.$setValidity('charE', true);
                } else {
                    mCtrl.$setValidity('charE', false);
                }
                return value;
            }
            mCtrl.$parsers.push(myValidation);
        }
    };
});
</script>
<script src=" <?php echo base_url() . 'lib/js/main.js' ?> "></script>
</body>

</html>