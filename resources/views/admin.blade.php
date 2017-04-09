@extends('layouts.adminlayout')

@section('maincontent')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total User</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Room</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Booking Request</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-12">
          <!-- ROOM LIST -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Rooms</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body  room no-padding">
              <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-3 room-box text-center">
                  <p>ROOM NUMBER</p>
                </div>

               </div>         <!-- /.ROOM-list -->
            </div>
            
            <!-- /.box-footer -->
          </div>
          <!--/.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
    <!-- /.content -->
@endsection
