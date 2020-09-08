<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Survey</title>
    <?php require('./../resource/style.php'); ?>
</head>

<body ng-app="survey">

    <div class="page-wrapper-img">
        <div class="page-wrapper-img-inner">

        </div>
    </div>

    <div class="page-wrapper">
        <div class="page-wrapper-inner">



            <!-- Page Content-->
            <div class="page-content" ng-controller="setData">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Get Survey details</h4>

                                    <form name="formData">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.name" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Client Id</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.clientid" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Address</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.address" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">City</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.city" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Geo Tag</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" ng-model="site.geotag" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Mobile number</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.phno" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Email Id</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.email" type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Square Feet</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.squarefeet" type="text">
                                                    </div>
                                                </div>
                                                <!-- <p>{{site}}</p> -->

                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">New Or Existing</label>
                                                    <div class="col-sm-10">
                                                        <select required ng-model="site.NewOrExisting" class="form-control">

                                                            <option value="New">New</option>
                                                            <option value="Existing">Existing</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">if Existing,is it Modular?</label>
                                                    <div class="col-sm-10">
                                                        <select required ng-model="site.is_it_Modular" class="form-control">

                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">If Modular,Brand Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" ng-model="site.ModularBrand" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Internet Enabled</label>
                                                    <div class="col-sm-10">
                                                        <select required ng-model="site.Internet_Enabled" class="form-control">

                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">IoT Needed?</label>
                                                    <div class="col-sm-10">
                                                        <select required ng-model="site.IoT_Needed" class="form-control">

                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">No Of Rooms</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" required ion-range-slider ng-model="site.NoOfRooms" apply="apply" range-options="{min: 0, max: 10, step: 1}" class="roomsRange">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">No Of Door alarm</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" required ion-range-slider ng-model="site.NoOfDooralarm" apply="apply" range-options="{min: 0, max: 10, step: 1}" class="roomsRange">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Remark</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" ng-model="site.remark" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->


                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-6" ng-repeat="n in [] | range:site.NoOfRooms">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Room {{n+1}}</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-right">Room Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required ng-model="site.rooms[n].name" type="text">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">No. of panels:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" ion-range-slider ng-model="site.rooms[n].panels" apply="apply" range-options="{min: 0, max: 10, step: 1}" class="roomsRange">
                                                </div>
                                            </div>

                                            <div ng-repeat="i in [] | range:site.rooms[n].panels">
                                                <hr>
                                                <h5 class="mt-0 header-title">Switche {{i+1}}</h5>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Panel id</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.rooms[n].switche[i].id" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Size (in inches)</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" required ng-model="site.rooms[n].switche[i].size" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Morning</label>
                                                    <div class="col-sm-10">
                                                        <select ng-model="site.rooms[n].switche[i].morning" class="form-control">

                                                            <option value="Sw1"> Sw1</option>
                                                            <option value="Sw2"> Sw2</option>
                                                            <option value="Sw3"> Sw3</option>
                                                            <option value="Sw4"> Sw4</option>
                                                            <option value="Sw5"> Sw5</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Evening</label>
                                                    <div class="col-sm-10">
                                                        <select ng-model="site.rooms[n].switche[i].evening" class="form-control">

                                                            <option value="Sw1"> Sw1</option>
                                                            <option value="Sw2"> Sw2</option>
                                                            <option value="Sw3"> Sw3</option>
                                                            <option value="Sw4"> Sw4</option>
                                                            <option value="Sw5"> Sw5</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Night</label>
                                                    <div class="col-sm-10">
                                                        <select ng-model="site.rooms[n].switche[i].night" class="form-control">

                                                            <option value="Sw1"> Sw1</option>
                                                            <option value="Sw2"> Sw2</option>
                                                            <option value="Sw3"> Sw3</option>
                                                            <option value="Sw4"> Sw4</option>
                                                            <option value="Sw5"> Sw5</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <h5 class="mt-0 header-title">Motion Sensor {{i+1}}</h5>



                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Evening</label>
                                                    <div class="col-sm-10">
                                                        <select ng-model="site.rooms[n].MotionSensor[i].evening" class="form-control">

                                                            <option value="Nill"> Nill</option>
                                                            <option value="Autolight"> Autolight</option>
                                                            <option value="Secure"> Secure</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Night</label>
                                                    <div class="col-sm-10">
                                                        <select ng-model="site.rooms[n].MotionSensor[i].night" class="form-control">

                                                            <option value="Nill"> Nill</option>
                                                            <option value="Autolight"> Autolight</option>
                                                            <option value="Secure"> Secure</option>


                                                        </select>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>



                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->
                        <div class="col-6" ng-repeat="n in [] | range:site.NoOfDooralarm">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Door Sensor {{n+1}}</h4>


                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="mt-0 header-title">Switches</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Panel id</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" required ng-model="site.DoorSensor[n].switche.id" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Doors to be fitted</label>
                                                <div class="col-sm-10">


                                                    <input class="form-control" required ng-model="site.DoorSensor[n].switche.Doors_to_be_fitted" type="text">


                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Morning</label>
                                                <div class="col-sm-10">
                                                    <select ng-model="site.DoorSensor[n].switche.morning" class="form-control">

                                                        <option value="Nill"> Nill</option>
                                                        <option value="Autolight"> Autolight</option>
                                                        <option value="Secure"> Secure</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Evening</label>
                                                <div class="col-sm-10">
                                                    <select ng-model="site.DoorSensor[n].switche.evening" class="form-control">

                                                        <option value="Nill"> Nill</option>
                                                        <option value="Autolight"> Autolight</option>
                                                        <option value="Secure"> Secure</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Night</label>
                                                <div class="col-sm-10">
                                                    <select ng-model="site.DoorSensor[n].switche.night" class="form-control">

                                                        <option value="Nill"> Nill</option>
                                                        <option value="Autolight"> Autolight</option>
                                                        <option value="Secure"> Secure</option>

                                                    </select>




                                                </div>
                                            </div>



                                        </div>



                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->


                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button ng-click="check()" class="btn btn-primary px-5 py-2">Save</button>
                                        </div>
                                    </div>

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->



                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Survey lists</h4>


                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead>
                                                <tr>
                                                    <th>#id</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Cell</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="site in siteList">
                                                    <td>
                                                    {{site.clientid}}
                                                    </td>
                                                    <td>{{site.name}}</td>
                                                    <td>{{site.address}}</td>
                                                    <td>{{site.phno}}</td>
                                                    <td>
                                                        <a href="report.php?id={{site.sid}}" class="btn btn-primary btn-small">Open</a>
                                                        <button class="btn btn-danger btn-small" ng-click="delete(site.sid)">delete</button>
                        
                                                    </td>
                                                </tr>

                                                
                                               

                                            </tbody>
                                        </table>
                                        <!--end /table-->
                                    </div>
                                    <!--end /tableresponsive-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->


                    </div> <!-- end row -->


                </div><!-- container -->


            </div>
            <!-- end page content -->
        </div>
        <!--end page-wrapper-inner -->
    </div>

    <?php require('./../resource/script.php'); ?>
</body>

</html>