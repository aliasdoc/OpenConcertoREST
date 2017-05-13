@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="pull-right">
        <button type="button" class="btn btn-block btn-primary" href="{{ route('clients.create') }}" data-toggle="modal" data-target="#create-modal"><i class="fa fa-plus"></i> Nouveau client</button>
    </div>
    <h1>
        CLIENTS OAUTH2
        <small>Liste des clients</small>
    </h1>


@stop





@section('content')

    @if ($errors->any())
         <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Erreur!</h4>
             <ul>
                 @foreach ($errors->all() as $error)
                     <li class="error">{{ $error }}</li>
                 @endforeach
             </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid">

                <div class="box-body">
                    <table id="clientsTable" class="table table-striped table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th width="400px">Client ID</th>
                            <th width="400px">Client Secret</th>
                            <th>Société</th>
                            <th width="120px">Révoké</th>
                            <th width="150px">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clients as $key => $client)
                            <tr>
                                <td><i class="fa fa-laptop"> {{ $client->name }}</td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                                        {{ Form::input('text', 'name', $client->id, ['class' => 'form-control', 'disabled']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                            {{ Form::input('text', 'name', $client->secret, ['class' => 'form-control', 'disabled']) }}
                                        </div>
                                    </div>
                                </td>
                                <td class="dt-body-center">{{ $client->company_id }}</td>
                                <td class="dt-body-center">
                                    <input type="checkbox" {{ $client->revoked == 1 ? 'checked="checked" ' : ''}} disabled style="margin-right: 10px">
                                    {!! Form::open(['method' => 'PATCH','route' => ['clients.revoke', $client->id],'style'=>'display:inline']) !!}
                                    @if($client->revoked == 0)
                                        {{ Form::hidden('revoked', 1) }}
                                        {!! Form::submit('Révoquer', ['class' => 'btn btn-xs btn-danger']) !!}
                                    @else
                                        {{ Form::hidden('revoked', 0) }}
                                        {!! Form::submit('Admettre', ['class' => 'btn btn-xs btn-primary']) !!}
                                    @endif
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a class="btn btn btn-xs btn-default" href="{{ route('clients.edit',$client->id) }}" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-edit"></i> Editer</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $client->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-xs btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="create-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content loaded here from href attribute -->
            </div>
        </div>
    </div>

    <div id="edit-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content loaded here from href attribute -->
            </div>
        </div>
    </div>

@endsection




@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>

        $(function () {
            /*
            var table = $('#clientsTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                responsive: true,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/French.json"
                }
            });
            */
        });


    </script>
@stop
