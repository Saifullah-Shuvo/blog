@extends('layouts.backend.app')

@section('title','Tag')

@push('css')

@endpush

@section('content')
<div class="container-fluid">

    <!-- Vertical Layout -->
    <!-- #END# Vertical Layout -->
    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW TAG
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.tag.store')}}" method="POST">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name">
                                <label class="form-label">Tag Name</label>
                            </div>
                        </div>
                        <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.tag.index')}}">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Layout | With Floating Label -->
    <!-- Horizontal Layout -->
    <!-- #END# Multi Column -->
</div>
@endsection

@push('js')

@endpush

