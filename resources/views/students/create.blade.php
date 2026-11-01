<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action="/students" method="POST">
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
        <button type="submit">Save Student</button>
    </form>
</body>
</html>