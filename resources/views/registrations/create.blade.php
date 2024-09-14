<form method="post" action="{{route('registrations.store')}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name " name="name" placeholder="Ram Shrestha">
    <br/>
    <label for="phone">Phone</label>
    <input type="phone" id="phone " name="phone" placeholder="845684589">
    <br/>
    <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" placeholder="Male">
    <br/>
    <label for="dob">DOB</label>
    <input type="date" id="dob" name="dob" placeholder="mm-dd-yy">
    <br/>
    <button type="submit"> Save registration</button>
    <button type="reset"> Reset</button>
</form>