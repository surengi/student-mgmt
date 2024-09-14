<a href="{{route('registrations.create')}}"> Add Registration</a>

<h2>Students detail</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Actions</th>
  </tr>
  @foreach ($registrations as $registration )
  <tr>
    <td>{{$registration->name}}</td>
    <td>{{$registration->phone}}</td>
    <td>{{$registration->gender}}</td>
    <td>{{$registration->dob}}</td>
    <td>
      <a href="{{route("registrations.show", $registration)}}"> Show</a>
      <a href="{{route("registrations.edit", $registration)}}"> Edit</a>
      {{-- <a href="{{route("registrations.destroy", $registration)}}" data-method='delete'> Delete</a> --}}
      <form action="{{ route("registrations.destroy", $registration) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
  </table>
  {{ $registrations->links() }}