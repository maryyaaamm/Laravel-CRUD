<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>
    <div>
        <label for="name">Name:</label>
        <span id="name">{{ $students['name'] }}</span>
    </div>
    <div>
        <label for="address">Address:</label>
        <span id="address">{{ $students['address'] }}</span>
    </div>
    <div>
        <label for="mobile">Mobile:</label>
        <span id="mobile">{{ $students['mobile'] }}</span>
    </div>
    <div>
        <label for="age">Age:</label>
        <span id="age">{{ $students['age'] }}</span>
    </div>
    <button onclick="{{ route('students.update') }}" type="update">update</button>
    <button onclick="" type="delete">delete</button>

</body>
</html>
