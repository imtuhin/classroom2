@extends('layouts.adminlayout')

@section('maincontent')
<section class="content">
  <div class="row">
     <!-- left column -->
     <div class="col-md-6">
       <!-- general form elements -->
       <div class="box box-primary">
         <div class="box-header with-border">
           <h3 class="box-title">Create Floor</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" method="post" action="{{ url('/') }}/savefloor" enctype="multipart/form-data">
            {{csrf_field()}}
           <div class="box-body">
             <div class="form-group">
               <label for="floor_name">Floor Name</label>
               <input type="text" class="form-control" id="floor_name" name="floor_name" placeholder="Floor Name">
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
                <h3 class="box-title">All Floor</h3>
          </div>
              <!-- /.box-header -->
          <div class="box-body">
            <table id="list" class="table text-center table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Floor Name</th>
                  <!--<th>Total Employee</th>-->
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
                  <tbody>
                    @foreach ($data['floor'] as $row)
                     <tr>
                        <td>{{$data['sl']++}}</td>
                        <td>{{$row->floor_name}}</td>
                    <!--<td>Internet  Explorer 4.0 </td>-->
                        <td><a class="btn btn-warning" href="{{ url('/') }}/editfloor/{{$row->floor_id}}">EDIT</a></td>
                        <td><a class="btn btn-danger" href="{{ url('/') }}/deletefloor/{{$row->floor_id}}">DELETE</a></td>
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
