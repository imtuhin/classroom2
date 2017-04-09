@extends('layouts.adminlayout')

@section('maincontent')
<section class="content">
  <div class="row">
     <!-- left column -->
     <div class="col-md-6">
       <!-- general form elements -->
       <div class="box box-primary">
         <div class="box-header with-border">
           <h3 class="box-title">Create Room Category</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" method="post" action="{{ url('/') }}/saveroomcat" enctype="multipart/form-data">
            {{csrf_field()}}
           <div class="box-body">
             <div class="form-group">
               <label for="floor_name">Room Category</label>
               <input type="text" class="form-control" id="room_cat" name="room_cat" placeholder="Room Category">
             </div>
            </div>
           <!-- /.box-body -->
            <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
         </form>
       </div>
   </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
                <h3 class="box-title">All Room Category</h3>
          </div>
              <!-- /.box-header -->
          <div class="box-body">
            <table id="list" class="table text-center table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Room Category Name</th>
                  <!--<th>Total Employee</th>-->
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
                  <tbody>
                    @foreach ($data['roomcat'] as $row)
                     <tr>
                        <td>{{$data['sl']++}}</td>
                        <td>{{$row->room_cat_name}}</td>
                    <!--<td>Internet  Explorer 4.0 </td>-->
                        <td><a class="btn btn-warning" href="{{ url('/') }}/editroomcategory/{{$row->room_cat_id}}">EDIT</a></td>
                        <td><a class="btn btn-danger" href="{{ url('/') }}/deleteroomcategory/{{$row->room_cat_id}}">DELETE</a></td>
                      </tr>
                   @endforeach
                  </tbody>
              </table>
            </div>
              <!-- /.box-body -->
        </div>
            <!-- /.box -->
    </div>
          <!-- /.col -->
  </div>
</section>
@endsection
