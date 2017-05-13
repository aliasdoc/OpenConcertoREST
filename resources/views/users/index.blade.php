{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        Utilisateurs
        <small>Liste des utilisateurs</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    @if ($users->count())
                        <table id="usersTable" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{ link_to_route('users.show', 'Voir', array($user->id), array('class' => 'btn btn-sm btn-default')) }}
                                            {{ link_to_route('users.edit', 'Editer', array($user->id), array('class' => 'btn btn-sm btn-default')) }}

                                        </div>
                                    </td>
                                    <td>
                                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                                        {{ Form::submit('Supprimer', array('class' => 'btn btn-sm btn-danger')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            {{ $users->links() }}
                        </table>
                    @else
                        There are no users
                    @endif
                </div>
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
            $('#usersTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@stop
