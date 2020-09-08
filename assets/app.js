var app = angular.module('survey', []);



app.controller('setData', function ($scope) {

    $scope.site = {

        "geotag": "",
        "ModularBrand": "",
        "rooms": {},
        "DoorSensor": {}
    }

    $scope.siteList = [];

    

    $scope.siteList = [...getData({
        table: 'survey_list'
    }).result];

    $scope.delete = function(id){
        
        var response = deleteData(id);
        $scope.siteList= response.result;
    }

    temp = $scope.site.rooms;

    $.each($scope.siteList, function(key, value) {
        
        $scope.siteList[key].rooms = JSON.parse($scope.siteList[key].rooms); 
        $scope.siteList[key].DoorSensor = JSON.parse($scope.siteList[key].DoorSensor);
    });

    console.log($scope.siteList);

    $scope.check = function () {

        if ($scope.formData.$valid) {
            
            var response = saveData($scope.site);
            $scope.siteList= response.result;
            console.log(response.server_msg);
            //Success Message

            if(response.error){
                swal(
                    {
                        title: 'Survaey',
                        text: response.server_msg,
                        type: 'error',
                        showCancelButton: true,
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger ml-2'
                    }
                );
            }else{
                swal(
                    {
                        title: 'Survaey',
                        text: response.server_msg,
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger ml-2'
                    }
                );
            }
       
           
       

        }else{
            console.log("Please fill the data");
        }


    }



}).directive('ionRangeSlider', function ionRangeSlider() {
    return {
        restrict: 'A',
        scope: {
            rangeOptions: '=',
            model: '=ngModel',
            apply: '=apply'
        },
        link: function (scope, elem, attrs) {
            elem.ionRangeSlider(scope.rangeOptions);
            scope.$watch('apply', function () {
                if (scope.apply) {
                    scope.apply = false;
                    var slider = elem.data("ionRangeSlider");
                    slider.update({
                        from: scope.model
                    });
                }
            });
        }
    }
});

app.filter('range', function () {
    return function (input, total) {
        total = parseInt(total);
        for (var i = 0; i < total; i++)
            input.push(i);
        return input;
    };
});

saveData = function (data) {
    var response;
    $.ajax({
        async: false,
        url: './../ajax/add.php',
        type: 'post',
        data: {
            data: data
        },
        success: function (data) {
            response = data;

        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });

    return response;
}


getData = function (data) {
    var response;
    $.ajax({
        async: false,
        url: './../ajax/all_data.php',
        type: 'post',
        data: {
            data: data
        },
        success: function (data) {
            response = data;

        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });

    return response;
}

deleteData = function (id) {
    var response;
    $.ajax({
        async: false,
        url: './../ajax/delete.php',
        type: 'post',
        data: {
            id: id
        },
        success: function (data) {
            response = data;

        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });

    return response;
}