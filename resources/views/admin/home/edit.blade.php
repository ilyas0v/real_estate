@extends('admin.layout')

@section('content')

    <div class="main-content" style="background: #ccc">
        <section class="section">
            <h1 class="section-header">Edit | {{$home->title}}</h1>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            <form action="{{route('homes.update',$home->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" value="{{$home->title}}" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" value="{{$home->price}}" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number" id="area" name="area" value="{{$home->area}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description">{{$home->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rooms">Rooms</label>
                            <input type="number" id="rooms" value="{{$home->rooms}}" name="rooms" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_flat">Type</label>
                            <select name="is_flat" id="is_flat" class="form-control">
                                <option {{$home->is_flat == 1 ? 'selected' : '' }} value="1">Flat</option>
                                <option {{$home->is_flat == 0 ? 'selected' : '' }} value="0">House</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="number" value="{{$home->floor}}" id="floor" name="floor" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="registered">Registered</label>
                            <select class="form-control" name="registered" id="registered">
                                <option {{$home->registered == 1 ? 'selected' : '' }} value="1">Yes</option>
                                <option {{$home->registered == 0 ? 'selected' : '' }} value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="has_garden">Has garden?</label>
                            <select name="has_garden" id="has_garden" class="form-control">
                                <option {{$home->has_garden == 1 ? 'selected' : '' }} value="1">Yes</option>
                                <option {{$home->has_garden == 0 ? 'selected' : '' }} value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_fixed">Is fixed?</label>
                            <select name="is_fixed" id="is_fixed" class="form-control">
                                <option {{$home->is_fixed == 1 ? 'selected' : '' }} value="1">Yes</option>
                                <option {{$home->is_fixed == 0 ? 'selected' : '' }} value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_rental">Rental or ?</label>
                            <select name="is_rental" id="is_rental" class="form-control">
                                <option {{$home->is_rental == 1 ? 'selected' : '' }} value="1">Yes</option>
                                <option {{$home->is_rental == 0 ? 'selected' : '' }} value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select name="region_id" id="region_id" class="form-control">
                                @foreach($regions as $region)
                                    <option {{$region->id == $home->region_id ? 'selected' : ''}} value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
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