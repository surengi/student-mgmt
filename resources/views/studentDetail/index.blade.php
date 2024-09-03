<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Students detail</h2>
{{-- {{$students}} --}}
<table>
  <tr>
    <th>USN</th>
    <th>Name</th>
    <th>Email</th>
    <th>DOB</th>

    {{-- <th>Gender</th> --}}
    {{-- <th>Program</th> --}}
    {{-- <th>Status</th> --}}
  </tr>
  @foreach ($students as $student )
  <tr>
    <td>{{$student->usn}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->dob}}</td>
    {{-- <td>{{$student->name}}</td> --}}
    {{-- <td>{{$student->name}}</td> --}}
  </tr>
  @endforeach
  </table>
  {{ $students->links() }}
</body>
</html>

