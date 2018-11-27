@extends('admin.layout')

@section('content')

    <div class="main-content">
        <section class="section">
            <h1 class="section-header">
                <div>Welcome {{Auth::user()->name}}</div>
            </h1>
        </section>
    </div>

@endsection