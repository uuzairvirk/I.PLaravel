<html>
<h1 style="text-align: center;">This is my First Form</h1>

<form action="/submit-form" method="post">
    @csrf
    <div style="width:100px; margin:0 auto;">
<br>
    <label for="username">User Name</label>
<input type="text" id="username" name="Username" placeholder="Enter your user name">
</br>    
<br>
    <label for="password">Password</label>
    <input type="password" id="password" name="Password" placeholder="Enter your password">
</br>
    <button type="submit">Submit</button>
    </div>
</form>
</html>