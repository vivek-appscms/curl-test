<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<h1 style="margin:34px 94px;text-align:center">Start/Stop the jenkins Job</h1>
<form action="curl.php" method="POST">
<div style="margin:34px 94px;text-align:center">
    <label for="cars">Select hours:</label>

    <select name="hours" id="hours">
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="4">Four</option>
    <option value="6">Six</option>
    </select>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-1">
    <button type="submit" name="trigger" value="1">Start</button>
    </div>
    <div class="col-md-1">
    <button type="submit" name="trigger" value="0">Stop</button>
    </div>
</div>
</form>

</body>
</html>