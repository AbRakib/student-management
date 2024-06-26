<div class="modal fade" id="exampleModalEdit-{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="educationFormEdit" id="educationFormEdit" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $education->name) }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary rounded-0" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-success rounded-0" onclick="submitEdit({{ $education->id }})" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>