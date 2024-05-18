<?php
include 'connect.php';
$show_alert = false;
$show_error = false;

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $item3 = $_POST["item3"];
    $item4 = $_POST["item4"];
    $item5 = $_POST["item5"];

    $sql = "INSERT INTO `received` (`name`, `phone`, `address`, `item1`, `item2`, `item3`, `item4`, `item5`) 
            VALUES ('$name', '$phone', '$address', '$item1', '$item2', '$item3', '$item4', '$item5')";
    
    $result = mysqli_query($con, $sql);

    if($result){
        $show_alert = true;
    } else {
        $show_error = "Failed to insert data.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Order From Us</title>
</head>
<style>
        body {
            background-image: url('resources/css/img/bgimage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
<!-- <?php include 'navbar.php'; ?> -->
<div class="container my-4">
    <?php if($show_alert): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your information has been submitted.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    
    <?php if($show_error): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?php echo $show_error; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <h1 class="text-center"><b>Order from us</b></h1>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-group">
            <label for="item1">Item 1</label>
            <select class="form-control" id="item1" name="item1">
                <option value="">None</option>
                <option value="Item 1A">Item 1A</option>
                <option value="Item 1B">Item 1B</option>
                <option value="Item 1C">Item 1C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item2">Item 2</label>
            <select class="form-control" id="item2" name="item2">
                <option value="">None</option>
                <option value="Item 2A">Item 2A</option>
                <option value="Item 2B">Item 2B</option>
                <option value="Item 2C">Item 2C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item3">Item 3</label>
            <select class="form-control" id="item3" name="item3">
                <option value="">None</option>
                <option value="Item 3A">Item 3A</option>
                <option value="Item 3B">Item 3B</option>
                <option value="Item 3C">Item 3C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item4">Item 4</label>
            <select class="form-control" id="item4" name="item4">
                <option value="">None</option>
                <option value="Item 4A">Item 4A</option>
                <option value="Item 4B">Item 4B</option>
                <option value="Item 4C">Item 4C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item5">Item 5</label>
            <input type="text" class="form-control" id="item5" name="item5" placeholder="Enter additional item (will be provided if available)">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
