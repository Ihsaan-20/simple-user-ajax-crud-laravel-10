@extends('layouts.app')
@section('main')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="float-end mt-3">
                <button type="button" id="addNewUser" class="btn btn-success">Add New User</button>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="list_user">
                               @forelse ($users as $key => $user )
                                <tr id="row_user_{{ $user->id}}">
                                    {{-- <td>{{ $key+1 }}</td> --}}
                                    <td><img src="{{ $user->profile }}" width="30" height="30" alt=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a type="button" id="edit_user" data-id="{{ $user->id }}" class="btn btn-warning">Edit</a>
                                        <a type="button" id="delete_user" data-id="{{ $user->id }}" class="btn btn-danger">Delet</a>
                                    </td>
                                </tr>
                                   
                               @empty
                                   <tr>
                                        <td colspan="5" class="text-center text-danger">No data found!</td>
                                   </tr>
                               @endforelse
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
        
    </div>

    
<!-- Modal -->
<div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form id="userForm" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">
                      
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <input type="hidden" id="id" name="id" class="form-control">
                            <label for="">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter email" class="form-control">
                        </div>
                        
                        <div class="mb-3" id="passwordDiv">
                            <label for="">Password</label>
                            <input type="password" id="password" name="password" placeholder="*****" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Profile</label>
                            <input type="file" id="profile" name="profile" class="form-control">
                        </div>

                        <div class="mb-3" id="old_img">
                            <img src="https://dummyimage.com/200x200/000/fff" id="old_profile"  class="img-fluid" width="40" height="40">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary" id="userBtn"></button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
