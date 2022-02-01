@extends('layouts.admin')

@section('content')


    <div class="pt-4">
        <div class="col-6">
            <h1>All messages</h1>
        </div>
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>

        @endif

    </div>


    <table class="table table-responsive-md table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)


                <tr>
                    <td scope="row">{{ $contact->id }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <a class="btn btn-primary text-white" href="{{ route('admin.contacts.show', $contact->id) }}">
                            <i class="fas fa-eye fa-lg fa-fw"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal"
                            data-bs-target="#delete_message_{{ $contact->id }}">
                            <i class="fas fa-trash-alt fa-lg fa-fw"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete_message_{{ $contact->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="removeMessage_{{ $contact->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Remove message </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro che vuoi procedere?
                                        <br>
                                        Il messaggio non viene rimosso dal client, ma solo
                                        dall'app!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}


@endsection
