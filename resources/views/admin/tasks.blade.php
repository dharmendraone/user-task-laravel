@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Task Detail</th>
                <th>Task Type</th>
                <th>Task Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->user?->name }}</td>
                    <td>{{ $task->task_detail }}</td>
                    <td>{{ $task->task_type }}</td>
                    <td>{{ $task->task_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection