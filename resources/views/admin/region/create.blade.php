@extends('admin.layout')

@section('content')

    <div class="main-content" style="background: #ccc">
        <section class="section">
            <h1 class="section-header">Add new region</h1>
            @if($errors->any())
                @foreach($errors->all() as $e)
                    <p class="alert alert-danger">{{$e}}</p>
                @endforeach
            @endif
            <form action="{{route('regions.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" id="title" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success mt-2" value="Save">
                    </div>
                </div>
            </form>
        </section>
    </div>

@endsection