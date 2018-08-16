@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary">New Contact</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Contact Name</th>
                                <th>Phone #</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                                <tr>
                                    <td> <img src="img/avatars/{{ $contact->contact_avatar }}"> </td>
                                    <td> {{ $contact->contact_name }} </td>
                                    <td> {{ $contact->contact_phone_no }}  </td>
                                    <td>
                                        <a href="{{ route('contacts.edit',$contact->id) }}"> Edit </a>
                                        <a href="{{ route('contacts.destroy',$contact->id) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        {{ __('Delete') }}
                                        </a>

                                        <form id="delete-form" action="{{ route('contacts.destroy',$contact->id) }}" method="POST" style="display: none;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <p>No contacts found.</p>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
