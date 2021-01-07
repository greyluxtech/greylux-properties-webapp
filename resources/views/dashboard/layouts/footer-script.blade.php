<script type="text/javascript" src="{{ asset('backend/assets/scripts/main.d810cf0ae7f39f28f336.js')}}"></script></body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('roles.store')}}" method="POST">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Role Name</label>
                        <input name="name" id="exampleEmail" placeholder="" type="text" class="form-control">
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>