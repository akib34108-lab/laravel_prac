<!DOCTYPE html>
<head>
    <title>Employees</title>
</head>
<body>
    <h1>Employee List</h1>
    <a href="{{ route('employee.create') }}">Add New Employee</a>
    <table border='1' cellpadding=10> 
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($employee as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->address}}</td>
                <td>
                    <a href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>