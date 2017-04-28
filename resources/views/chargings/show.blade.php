@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Charging Object</h1>
            <p class="description">Show a charging object</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="/charging">Charging Management</a>
                </li>
                <li class="active">

                    <strong>Show Charging</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="panel panel-default">

        <div class="panel-body">

            <form role="form" id="form1" method="post" class="validate" action="/chargings/{{$charging->id}}">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="control-label">Name</label>

                    <input type="text" class="form-control" name="name" data-validate="required" value="{{$charging->name}}"
                           data-message-required="The charging's name should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Latitude</label>

                    <input type="text" class="form-control" name="latitude" data-validate="required" value="{{$charging->latitude}}"
                           data-message-required="The charging's latitude should be provide."
                           placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Longitude</label>

                    <input type="text" class="form-control" name="longitude" data-validate="required" value="{{$charging->longitude}}"
                           data-message-required="The charging's longitude should be provide."
                           placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">URL</label>

                    <input type="text" class="form-control" name="url" data-validate="required" value="{{$charging->url}}"
                           data-message-required="The charging's url should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/chargings" class="btn btn-white">Return</a>
                </div>

            </form>

        </div>
    </div>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>

@endsection