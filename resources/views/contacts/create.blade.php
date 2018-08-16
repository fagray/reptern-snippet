@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('contacts.store') }} " method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="contact_name" type="text" class="form-control" id="" placeholder="Angelina Jolie">
                        </div>     
                        <div class="form-group">
                            <label for="">Phone #</label>
                            <input name="contact_phone_no" type="text" class="form-control" id="" placeholder="+639451594956">
                        </div>
                        <select name="group_id" class="form-control" >
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}"> {{ $group->group_name }} </option>
                            @endforeach
                        </select>                        
                    
                        <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
