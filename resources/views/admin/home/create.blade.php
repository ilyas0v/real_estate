@extends('admin.layout')

@section('content')

    <div class="main-content" style="background: #ccc">
        <section class="section">
            <h1 class="section-header">Add new home</h1>
            <form action="{{route('homes.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number" id="area" name="area" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rooms">Rooms</label>
                            <input type="number" id="rooms" name="rooms" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_flat">Type</label>
                            <select name="is_flat" id="is_flat" class="form-control">
                                <option value="1">Flat</option>
                                <option value="0">House</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="number" id="floor" name="floor" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="registered">Registered</label>
                            <select class="form-control" name="registered" id="registered">
                                <option value="1">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="has_garden">Has garden?</label>
                            <select name="has_garden" id="has_garden" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_fixed">Is fixed?</label>
                            <select name="is_fixed" id="is_fixed" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="is_rental">Rental or ?</label>
                            <select name="is_rental" id="is_rental" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select name="region_id" id="region_id" class="form-control">
                                @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
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