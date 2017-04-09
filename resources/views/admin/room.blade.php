@extends('layouts.adminlayout')

@section('maincontent')
<section class="content">
  <div class="row">
     <!-- left column -->
     <div class="col-md-6">
       <!-- general form elements -->
       <div class="box box-primary">
         <div class="box-header with-border">
           <h3 class="box-title">Create Room</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" method="post" action="{{ url('/') }}/saveroom" enctype="multipart/form-data">
            {{csrf_field()}}
           <div class="box-body">
              <div class="form-group">
               <label for="room_name">Select Floor</label>

               <select type="text" class="form-control" id="floor" name="floor" required>
                <option disabled selected>Select Floor</option>
                @foreach ($data['floor'] as $row)
                    <option value="{{$row->floor_id}}">{{$row->floor_name}}</option>
                @endforeach
               </select>
               
             </div>
             <div class="form-group">
               <label for="room_cat">Room Type</label>
               <select type="text" class="form-control" id="room_type" name="room_type" required>
                <option disabled selected>Select Room Type</option>
                 @foreach ($data['roomcat'] as $row)
                    <option value="{{$row->room_cat_id}}">{{$row->room_cat_name}}</option>
                @endforeach
               </select>               
             </div>
             <div class="form-group">
               <label for="room_name">Room Name</label>
               <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Room Name" required>
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
                <h3 class="box-title">All Room</h3>
          </div>
              <!-- /.box-header -->
          <div class="box-body">
            <table id="list" class="table text-center table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Room Name</th>
                  <!--<th>Total Employee</th>-->
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
                  <tbody>
                    @foreach ($data['room'] as $row)
                     <tr>
                        <td>{{$data['sl']++}}</td>
                        <td>{{$row->room_name}}</td>
                    <!--<td>Internet  Explorer 4.0 </td>-->
                        <td><a class="btn btn-warning" href="{{ url('/') }}/editroom/{{$row->room_id}}">EDIT</a></td>
                        <td><a class="btn btn-danger" href="{{ url('/') }}/deleteroom/{{$row->room_id}}">DELETE</a></td>
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
