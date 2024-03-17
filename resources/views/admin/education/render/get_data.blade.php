@forelse ($educations as $key => $education)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $education->name }}</td>
        <td>{{ $education->added_ip }}</td>
        <td>{{ $education->user->name }}</td>
        <td>{{ $education->created_at }}</td>
        <td>
            <a href="#" class="btn btn-info btn-circle btn-sm">
                <i class="fas fa-info-circle"></i>
            </a>
            <a href="#" class="btn btn-info btn-circle btn-sm">
                <i class="fas fa-edit"></i>
            </a>
            <a href="{{ route('admin.education.delete', $education->id) }}" class="btn btn-danger btn-circle btn-sm">
                <i class="fas fa-trash"></i>
            </a>
        </td>
    </tr>
    @empty
    <tr>
        <td>Data Not Found</td>
    </tr>
@endforelse