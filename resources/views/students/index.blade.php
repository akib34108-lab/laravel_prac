<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>

    <h1>Student Information</h1>

    <a href="/students/create">Add New Student</a>

    <br><br>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}/edit">Edit</a>
                        <form action="/students/{{ $student->id }}" method="POST" style="display: inline" id="delete-form-{{ $student->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $student->id }},'{{ $student->name }}')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
<script>
    function confirmDelete(id, name) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to delete ' + name + ' !',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>