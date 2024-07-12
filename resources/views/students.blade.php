<!DOCTYPE html>
<html>

<head>
    <title>Students List</title>
</head>

<body>
    <h1>Students List</h1>

    <form action="{{ route('students.save') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="">
        </div>
        <div>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" value="">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="">
        </div>
        <button type="submit">Submit</button>
    </form>
    <hr>
</body>

</html>
