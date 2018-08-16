@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-dim">SETTINGS</h5>
            <div class="settings-sidebar">
                <li>
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span class="title">Profile </span>
                    </a> 

                </li>
                <li>
                    <a href="">
                        <i class="fa fa-lock"></i>
                        <span class="title">Security </span>
                    </a>
                </li>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <p>An awesome card body!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
