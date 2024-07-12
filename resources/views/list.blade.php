<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student list</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Age</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->age }}</td>
                <td><a href="{{ route('students.update.form', $student->id) }}">Edit</a></td>
                <td><a href="{{ route('students.delete', $student->id) }}"
                       onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
ZZ
