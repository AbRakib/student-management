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
    <tbody>
        @foreach ($educations as $key => $education)
            <tr>
                <td>{{ $start_sl++ }}</td>
                <td>{{ $education->name }}</td>
                <td>{{ $education->added_ip }}</td>
                <td>{{ $education->user->name }}</td>
                <td>{{ $education->created_at }}</td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#exampleModalView-{{ $education->id }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    @include('admin.education.modal.view')
                    
                    <a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#exampleModalEdit-{{ $education->id }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    @include('admin.education.modal.edit')

                    <a href="javascript:void(0);" 
                    onclick="return confirmDelete({{ $education->id }})" 
                    class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $educations->links('paginate.default') }}
