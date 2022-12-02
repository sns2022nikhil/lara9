@include('layout.admin.header')


<h1 class=" text-center display-4 mt-5">Data Display</h1>

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

    </tr>



    <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['name']}}</td>
        <td>{{$data['email']}} </td>
        <td><img src="{{ url('/upload/'.$data->image) }}" style="height: 100px; width: 100px; border-radius: 100%;"></td>

    </tr>

</table>

        </div>
    </div>
</div>
@include('layout.admin.footer')
