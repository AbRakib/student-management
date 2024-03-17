@extends('admin.app')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Education</h1>
            <a href="javascript:void(0);" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                Generate Report
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Education</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ count($educations) ?? 0 }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content row -->

        <!-- Begin Page Content -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Education Lists</h6>
                <!-- Button trigger modal -->
                <a class="btn btn-success btn-sm rounded-0 ml-auto" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square"></i> Create Education</a>
                <!-- Button trigger modal -->
                
                <!-- create education Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form id="educationForm" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Education</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary rounded-0" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-sm btn-success rounded-0" id="educationSubmit" data-dismiss="modal">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Education crete Modal end -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless border table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Ip Address</th>
                                <th>Created By</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="dataShow">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

@section('admin-script')
    <script>
        $(document).ready(function () {
            getData();
        });
        function getData() {
            $.ajax({
                type: "get",
                url: "{{ route('admin.education.show') }}",
                data: "data",
                dataType: "json",
                success: function (response) {
                    if (response.status == 200) {
                        $("#dataShow").html(response.view);
                    }
                }
            });
        }
        $("#educationSubmit").click(function (e) { 
            e.preventDefault();
            var formData = $("#educationForm").serialize();
            let form_route = "{{ route('admin.education.store') }}";
            $.ajax({
                type: "POST",
                url: form_route,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (response) {
                    $("#name").val('');
                    if (response.status == 200) {
                        getData();
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            preventDuplicates: true,
                            showDuration: 400,
                            hideDuration: 1000,
                            timeOut: 5000,
                            extendedTimeOut: 1000,
                            positionClass: 'toast-top-right'
                        };
                        toastr.success('Your account has been restored.');
                    } else {
                        toastr.error('Failed to save data.');
                    }
                }
            });
        });
    </script>
@endsection