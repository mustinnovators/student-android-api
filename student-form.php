<form action="save.php" method="post">
    Fullname: <input type="text" name="fullname" placeholder="ENter your full name">
    <br>
    Email: <input type="email" name="email" placeholder="example@google.com">
    <br>
    Phone: <input type="text" name="phone">
    <br>
    Status: <select name="status" id="">
        <option value="1">Single</option>
        <option value="2">Taken</option>
        <option value="3">Searching</option>
        <option value="4">Complicated</option>
        <option value="5">Am just okay</option>
    </select>
    <br>
    <input type="submit" value="Save Information">
</form>