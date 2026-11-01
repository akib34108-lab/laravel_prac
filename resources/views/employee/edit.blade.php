<!DOCTYPE html>
<head>
    <title>Employee Edit</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employee.store', )}}" method='POST'>
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label>Email:</label>
            <input type="email" name="email">
        </div>
        <br>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone">
        </div>
        <br>
        <div>
            <label>Address:</label>
            <input type="text" name="address">
        </div>
        <br>
        <button type="submit">Save Employee</button>
    </form>
</body>
</html>