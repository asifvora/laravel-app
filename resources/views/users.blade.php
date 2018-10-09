@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                     <!-- Current Users -->
                  @if (count($users) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <!-- Table Headings -->
                                <thead>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <!-- Task Name -->
                                            <td class="table-text">
                                                <div>{{ $user->id }}</div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $user->name }}</div>
                                            </td>
                                            <td class="table-text">
                                                <div>{{ $user->email }}</div>
                                            </td>
                                            <td>
                                                <form action="/users/{{ $user->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button>Delete User</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

