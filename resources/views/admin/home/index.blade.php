@extends('admin.layout')

@section('content')

    <div class="main-content">
        <section class="section">
            <h1 class="section-header">All homes</h1>
            <a href="{{route('homes.create')}}" class="btn btn-outline-success">Add new home</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Area</th>
                        <th>Rooms</th>
                        <th>Floor</th>
                        <th>Registered</th>
                        <th>Region</th>
                    </tr>
                    @foreach($homes as $home)
                        <tr>
                            <td>{{$home->id}}</td>
                            <td>{{$home->title}}</td>
                            <td>{{$home->price}}</td>
                            <td>{{$home->area}}</td>
                            <td>{{$home->rooms}}</td>
                            <td>{{$home->floor}}</td>
                            <td>{{$home->registered}}</td>
                            <td>{{$home->region->name}}</td>
                            <td>
                                <a href="{{route('homes.edit',$home->id)}}" class="btn btn-warning">Edit</a>
                                <a href="#" onclick="if(confirm('Are you sure to delete {{$home->title}}')){ $('#deleteform').submit();}" class="btn btn-danger">Delete</a>
                                <form id="deleteform" style="display: inline" action="{{route('homes.destroy',$home->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>

@endsection