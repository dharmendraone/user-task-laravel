@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create User</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.users.store') }}" id="create-user-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                                <span class="error" id="name-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <span class="error" id="email-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" id="mobile" name="mobile" class="form-control" required>
                                <span class="error" id="mobile-error"></span>
                            </div>
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#create-user-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    }
                },
                messages: {
                    name: {
                        required: 'Please enter your name',
                        minlength: 'Name should be at least 3 characters',
                        maxlength: 'Name should not exceed 50 characters'
                    },
                    email: {
                        required: 'Please enter your email',
                        email: 'Please enter a valid email'
                    },
                    mobile: {
                        required: 'Please enter your mobile number',
                        number: 'Please enter a valid mobile number',
                        minlength: 'Mobile number should be 10 digits',
                        maxlength: 'Mobile number should be 10 digits'
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection