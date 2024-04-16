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
                <a class="btn btn-success btn-sm rounded-0 ml-auto" href="javascript:void(0);" data-toggle="modal"
                    data-target="#exampleModal"><i class="fas fa-plus-square"></i> Create Education</a>
                <!-- Button trigger modal -->

                <!-- create education Modal -->
                @include('admin.education.modal.create')
                <!-- Education crete Modal end -->
            </div>
            <div class="card-body">
                <div class="table-responsive" id="dataShow">

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

@section('admin-script')
    <script>
        $(document).ready(function() {
            getData();
        });

        function getData() {
            $.ajax({
                type: "get",
                url: "{{ route('admin.education.show') }}",
                data: "data",
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $("#dataShow").html(response.view);
                    }
                }
            });
        }

        // store data
        $("#educationSubmit").click(function(e) {
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
                success: function(response) {
                    $("#name").val('');
                    if (response.status == 200) {
                        getData();
                        toastr.success('Your account has been restored.');
                    } else {
                        toastr.error('Failed to save data.');
                    }
                }
            });
        });
    </script>

    <script>
        function submitEdit(id) {
            var formData = $("#educationFormEdit").serialize();
            let form_route = "{{ route('admin.education.update', ':id') }}";
            form_route = form_route.replace(':id', id);
            console.log(formData);
            $.ajax({
                type: "POST",
                url: form_route,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function(response) {
                    $("#name").val('');
                    if (response.status == 200) {
                        getData();
                        console.log(response.message);
                        // Swal.fire({
                        //     title: response.message+"!",
                        //     text: "You clicked the button!",
                        //     icon: "success"
                        // });
                    } else {
                        Swal.fire({
                            title: response.message+"Failed!",
                            text: "You clicked the button!",
                            icon: "error"
                        });
                    }
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            function fetchAndRenderData(page) {
                $.ajax({
                    url: '/admin/show-education?page=' + page,
                    type: 'GET',
                    success: function(response) {
                        $('#dataShow').html(response.view);
                    }
                });
            }
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchAndRenderData(page);
            });
            fetchAndRenderData(1);
        });
    </script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, proceed with deletion
                    onDelete(id);
                }
            });
        }

        function onDelete(id) {
            $.ajax({
                type: "get",
                url: "{{ route('admin.education.delete') }}",
                data: {
                    'id': id,
                },
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(response.message);
                        getData();
                    } else {
                        Swal.fire(response.message);
                    }
                }
            });
        }
    </script>
@endsection
