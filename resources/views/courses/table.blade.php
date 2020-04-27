<table id="Data_Table" class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Date</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Orders</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($courses as $key => $course)
        <tr>
            <td>
                 @can('courses-list')
                <a data-toggle="tooltip" data-placement="top" title="View Details"
                class="btn  btn-sm btn-outline-info" href="{{ route('backend.courses.show',$course->id) }}">
                    <i class="fa fa-search"></i>
                </a>
                 @endcan
                  @can('courses-edit')
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.courses.edit',$course->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
                  @endcan
                <!-- /.btn  btn-default -->
                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$course->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
                </a>
            </td>
             <td>{{$course->created_at->toFormattedDateString() }}</td>
            <td>{{$course->name}}</td>
             <td>{{$course->number}}</td>
             <td>
                <a data-toggle="tooltip" data-placement="top" title="place order"
                class="btn  btn-sm btn-outline-info" href="{{ route('backend.orders.index') }}">
                  Place Order
                </a>
              </td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('courses.script')
