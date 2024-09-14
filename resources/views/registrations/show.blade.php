<div>
    <div>
        <span style="font-style: bold">Name: </span>{{$registration->name}}
    </div>
    
    <div>
        <span style="font-style: bold">Phone: </span>{{$registration->phone}}
    </div>
    
    <div>
        <span style="font-style: bold">Gender: </span>{{$registration->gender}}
    </div>
    
    <div>
        <span style="font-style: bold">DOB: </span>{{$registration->dob}}
    </div>

    <a href="{{route("registrations.edit", $registration)}}"> Edit</a>
    <a href="{{route("registrations.index", $registration)}}"> Registrations</a>

    
</div>
    