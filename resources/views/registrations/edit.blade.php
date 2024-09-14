<form method="post" action="{{route('registrations.update',$registration)}}">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" id="name " name="name" placeholder="Ram Shrestha" value="{{$registration->name}}">
    <br/>
    <label for="phone">Phone</label>
    <input type="phone" id="phone " name="phone" placeholder="845684589" value="{{$registration->phone}}">
    <br/>
    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" placeholder="Male" value="{{$registration->gender}}">
    <br/>
    <label for="dob">DOB</label>
    <input type="date" id="dob" name="dob" placeholder="mm-dd-yy" value="{{$registration->dob}}">
    <br/>
    <button type="submit"> Update registration</button>
    <button type="reset"> Reset</button>
</form>