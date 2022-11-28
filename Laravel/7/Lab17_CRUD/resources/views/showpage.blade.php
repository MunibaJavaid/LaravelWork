@include('header')


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="{{route('r_admin.create')}}"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<table class="table table-stripped">
<thead>
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    <tbody>
    @foreach($record_key as $item)
       <tr>
           <td>{{$item->emp_id}}</td>
           <td>{{$item->emp_fn}}</td>
           <td>{{$item->emp_email}}</td>
           <td>{{$item->emp_mobile}}</td>
           <td>{{$item->emp_city}}</td>
           <td><a href="{{route('r_admin.show',$item->emp_id)}}">View Detail</a> </td>
           <td><a href="{{route('r_admin.edit',$item->emp_id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a> </td>
           <form action="{{route('r_admin.destroy',$item->emp_id)}}" method="POST">
           {{ @csrf_field() }}
           {{  @method_field('DELETE') }}
           <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button></td>
           </form>
       </tr>
       @endforeach()
    </tbody>
</thead>
</table>
</div>
</div>

</div>


@include('footer')