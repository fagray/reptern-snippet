@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('contacts.update',$contact->id) }} " method="POST" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="contact_name" value="{{ $contact->contact_name }} " type="text" class="form-control" id="" placeholder="Angelina Jolie">
                        </div>     
                        <div class="form-group">
                            <label for="">Phone #</label>
                            <input value="{{ $contact->contact_phone_no }} " name="contact_phone_no" type="text" class="form-control" id="" placeholder="+639451594956">
                        </div>
                        <select name="group_id" class="form-control" value="{{ $contact->group_id }} ">
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
