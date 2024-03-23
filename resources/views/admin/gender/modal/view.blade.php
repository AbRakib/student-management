<div class="modal fade" id="exampleModalView-{{ $gender->id }}" tabindex="-1" role="dialog" aria-labelledby="view" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="view">View gender Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">{{ $gender->name }}</h4>
                <div class="row">
                    <div class="col-md-6 text-right">
                        Created At : <br>
                        Created By : <br>
                        Status : <br>
                    </div>
                    <div class="col-md-6">
                        {{ $gender->created_at }} <br>
                        {{ $gender->user->name }} <br>
                        @if($gender->status == 1) Active @else Pending @endif <br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary rounded-0" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>