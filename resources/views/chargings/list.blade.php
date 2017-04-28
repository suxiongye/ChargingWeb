@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Charging List</h1>
            <p class="description">The Chargings List Status List</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="/chargings">Charging management</a>
                </li>
                <li class="active">
                    <strong>Charging List</strong>
                </li>
            </ol>
        </div>
    </div>
    <!-- Basic Setup -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Charging List</h3>

            <div class="panel-options">
                <a href="#" data-toggle="panel">
                    <span class="collapse-icon">&ndash;</span>
                    <span class="expand-icon">+</span>
                </a>
                <a href="#" data-toggle="remove">
                    &times;
                </a>
            </div>
        </div>
        <div class="panel-body">

            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $("#example-1").dataTable({
                        aLengthMenu: [
                            [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
                        ]
                    });
                });
            </script>

            <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Used</th>
                    <th>Operation</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Used</th>
                    <th>Operation</th>
                </tr>
                </tfoot>

                <tbody>
                @foreach($chargings as $charging)
                    <tr>
                        <td>{{$charging->id}}</td>
                        <td><a href="/chargings/{{$charging->id}}">{{$charging->name}}</a></td>
                        <td>({{$charging->longitude}}, {{$charging->latitude}})</td>
                        <td>{{$charging->status}}</td>
                        <td>{{$charging->used}}</td>
                        <td><a href="{{$charging->url}}" target="_blank" class="btn btn-success">Monitor</a><a
                                    href="/chargings/delete/{{$charging->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <!-- Bottom Scripts -->
    <script src="/assets/js/datatables/js/jquery.dataTables.min.js"></script>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
    <script src="/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>

@endsection