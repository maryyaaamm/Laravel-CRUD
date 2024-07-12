<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ $student->address }}">
        </div>
        <div>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" value="{{ $student->mobile }}">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="{{ $student->age }}">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
