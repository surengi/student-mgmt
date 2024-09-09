<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>

    <h3>Using CSS to style an HTML Form</h3>

    <div>
        <form method="post" action="/students">
            @csrf
            <label for="USN">Usn</label>
            <input type="text" id="Usn " name="firstname" placeholder="Your Usn Please">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name..">

            <label for="DOB">DOB</label>
            <input type="text" id="dob" name="dob" placeholder="Your DOB">


            <label for="gender">Gendet</label>
            <input type="text" id="gender" name="gender" placeholder="Gender">

            <label for="Province">Province</label>
            <input type="text" id="Province" name="dob" placeholder="Your Province">


            <label for="city"> </label>
            <input type="text" id="city" name="city" placeholder="city">

            <label for="gender">Gendet</label>
            <input type="text" id="gender" name="gender" placeholder="Gender">

            <label for="Province">Province</label>
            <input type="text" id="Province" name="dob" placeholder="Your Province">

            <label for="city"> </label>
            <input type="text" id="city" name="city" placeholder="city">

            <label for="ToleName"> </label>
            <input type="text" id="Tole Name" name="ToleNam" placeholder="Tole No">

            <label for="Phone">Phone</label>
            <input type="Phone" id="phone" name="phone" placeholder="Your Phone">

            <label for="Email"> </label>
            <input type="text" id="Email" name="Email" placeholder="email">

            <label for="Enroll Date"> </label>
            <input type="Enroll Date" id="Enroll Date" name="Enroll date" placeholder="Enroll date">
<button type="submit"> Save Data</button>

          
        </form>
    </div>    

</body>

</html>
