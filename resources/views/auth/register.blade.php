@extends('...layouts.master')
@section('title', 'Register')
@section('content')
    <div class="shorter-page">
        <div class="green-bg">
            <h3 class="page-title">Register</h3>
            <hr>
            <form action="{{url('register')}}" method="POST" id="register-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Your first name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Your last name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="type yor password.." name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="type yor password again.." name="password_confirmation">
                </div>
                <div class="form-group">
                    <label for="character_name">Character Name</label>
                    <input type="text" class="form-control" id="character_name" placeholder="The name of your character" name="character_name">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="M">Masculine</option>
                        <option value="F">Femenine</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-big"><i class="fa fa-check"></i> Submit</button>
            </form>
        </div>
    </div>
@stop