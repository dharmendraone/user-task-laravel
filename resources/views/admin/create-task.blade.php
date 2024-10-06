@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('admin.tasks.store') }}" id="create-task-form">
        @csrf
        <div>
            <label for="user_id">User  :</label>
            <select id="user_id" name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <span class="error" id="user_id-error"></span>
        </div>
        <div>
            <label for="task_detail">Task Detail:</label>
            <textarea id="task_detail" name="task_detail" required></textarea>
            <span class="error" id="task_detail-error"></span>
        </div>
        <div>
            <label for="task_type">Task Type:</label>
            <input type="text" id="task_type" name="task_type" required>
            <span class="error" id="task_type-error"></span>
        </div>
        <div>
            <label for="task_status">Task Status:</label>
            <input type="text" id="task_status" name="task_status" required>
            <span class="error" id="task_status-error"></span>
        </div>
        <button type="submit">Create Task</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#create-task-form').validate({
                rules: {
                    user_id: {
                        required: true
                    },
                    task_detail: {
                        required: true,
                        minlength: 10,
                        maxlength: 500
                    },
                    task_type: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    task_status: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    }
                },
                messages: {
                    user_id: {
                        required: 'Please select a user'
                    },
                    task_detail: {
                        required: 'Please enter task detail',
                        minlength: 'Task detail should be at least 10 characters',
                        maxlength: 'Task detail should not exceed 500 characters'
                    },
                    task_type: {
                        required: 'Please enter task type',
                        minlength: 'Task type should be at least 3 characters',
                        maxlength: 'Task type should not exceed  50 characters'
                    },
                    task_status: {
                        required: 'Please enter task status',
                        minlength: 'Task status should be at least 3 characters',
                        maxlength: 'Task status should not exceed 50 characters'
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection