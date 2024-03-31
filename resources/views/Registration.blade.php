
@extends('Layout') 

@section('title', 'Registration')
<style>
    #f1 {
        width: 500px;
        border: 2px solid black;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.4);
        padding: 20px;
    }

    .center-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .icon-section {
        text-align: center;
        margin-bottom: 20px;
    }

    .app-icon {
        width: 100px;
        border-radius: 20px;
    }

    .form-label {
        font-weight: bold;
        color: black;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    #a1:hover {
        color: red;
        font-size: 1.2em;
    }

</style>

@section('content')
<div class="container center-form">
    <div id='f1'>
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('registerpost') }}" method="post">
            @csrf
            <div class="icon-section">
                <img src="{{ asset('image/ELD.png') }}" alt="Application Icon" class="app-icon">
            </div><br/>
            <div class="mb-3">
                <label class="form-label">FullName</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <a href="{{ route('login') }}" style="text-decoration: none;" class="form-label" id="a1">Already a member ?</a><br/><br/>
            <button type="submit" class="btn btn-dark" require>Submit</button>
        </form>
    </div>
</div>
@endsection
