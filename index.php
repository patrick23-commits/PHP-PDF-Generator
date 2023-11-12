<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./generated_file.php" method="post">
        <span id="firstname-holder">
            <label for="txtbx-firstname">First Name</label>
            <input type="text" name="firstname" id="txtbx-firstname">
        </span>

        <span id="address-holder">
            <label for="txtbx-address">Address</label>
            <input type="text" name="address" id="txtbx-address">
        </span>

        <button>Generate PDF</button>
    </form>
    
</body>
</html>