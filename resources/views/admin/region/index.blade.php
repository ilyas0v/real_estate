@extends('admin.layout')

@section('content')

    <div class="main-content">
        <section class="section">
            <h1 class="section-header">All regions</h1>
            <a href="{{route('regions.create')}}" class="btn btn-outline-success">Add new region</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                    @foreach($regions as $region)
                        <tr>
                            <td>{{$region->id}}</td>
                            <td>{{$region->name}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>

@endsection