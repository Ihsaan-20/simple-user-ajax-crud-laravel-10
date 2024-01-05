
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
                        
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password   " id="password" name="password" placeholder="Enter password" class="form-control">
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

