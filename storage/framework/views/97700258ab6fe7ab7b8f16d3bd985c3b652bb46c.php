<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 "></br></br></br>
                <br>
                <p class=" text-info"><?php
                    $mytime = Carbon\Carbon::now();
                    echo $mytime->toDayDateTimeString();
                    ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo e(Auth::user()->name); ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"><img
                                                                                src=""
                                                                                class="img-circle img-responsive"></div>

                            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                              <dl>
                                <dt>DEPARTMENT:</dt>
                                <dd>Administrator</dd>
                                <dt>HIRE DATE</dt>
                                <dd>11/12/2013</dd>
                                <dt>DATE OF BIRTH</dt>
                                   <dd>11/12/2013</dd>
                                <dt>GENDER</dt>
                                <dd>Male</dd>
                              </dl>
                            </div>-->
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Department:</td>
                                        <td><?php echo e(Auth::user()->department); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo e(Auth::user()->dob); ?></td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo e(Auth::user()->gender); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td><?php echo e(Auth::user()->address); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="<?php echo e(Auth::user()->email); ?>"><?php echo e(Auth::user()->email); ?></a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td><?php echo e(Auth::user()->phone); ?><br>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button"
                           class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>