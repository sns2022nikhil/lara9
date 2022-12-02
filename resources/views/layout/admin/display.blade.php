@include('layout.admin.header')

<a class="btn btn-outline-primary btn-md rounded-pill mx-5 mt-5"  href="{{url('logout')}}">Logout</a>
<h1 class=" text-center display-4 mt-5" >Data Display</h1>

<div class="contanier">
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <table class=" table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Images</th>
        <th>Action</th>
    </tr>

    @foreach($data as $user)

    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}} </td>
        <td><img src="{{ url('/upload/'.$user->image) }}" style="height: 100px; width: 100px; border-radius: 100%;"></td>
        <td>
            <a href="{{url('admin/view',[$user->id])}}" class="btn btn-info" style="border-radius: 100px;"><i data-feather="trash"></i>View</a>
            <a href="{{url('admin/edit',[$user->id])}}" class="btn btn-primary" style="border-radius: 100px;"><i data-feather="trash"></i>Edit</a>
            <a href="{{url('delete',[$user->id])}}" class="btn btn-danger" style="border-radius: 100px;"><i data-feather="trash"></i>Delete</a>
        </td>
    </tr>
    @endforeach
</table>

        </div>
    </div>
</div>
@include('layout.admin.footer')
