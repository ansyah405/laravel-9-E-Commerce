@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Profile')}}</div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        @endif

                        <form action="{{route('edit_profile')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" value="{{$user->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" value="{{$user->email}}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <input type="role" class="form-control" value="{{$user->is_admin ? 'admin' : 'Member'}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Change Profile</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
@endsection
