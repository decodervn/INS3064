<?php
include "connection.php";

$id = $_GET["id"] ?? null;

if ($id && isset($_GET["confirm"]) && $_GET["confirm"] === "yes") {
    $delete_query = "DELETE FROM table1 WHERE id='$id'";
    mysqli_query($link, $delete_query) or die(mysqli_error($link));
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Deletion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .confirm-box {
            background: #fff;
            border-radius: 10px;
            padding: 40px 50px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        .confirm-icon {
            font-size: 60px;
            color: #e74c3c;
            margin-bottom: 15px;
        }
        h3 {
            font-weight: 600;
            color: #2c3e50;
        }
        .btn {
            min-width: 100px;
        }
        .btn-yes {
            background-color: #e74c3c;
            color: white;
        }
        .btn-yes:hover {
            background-color: #c0392b;
        }
        .btn-no {
            background-color: #95a5a6;
            color: white;
        }
        .btn-no:hover {
            background-color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="confirm-box">
        <div class="confirm-icon">⚠️</div>
        <h3>Confirm Deletion</h3>
        <p>Are you sure you want to delete item <strong>#<?php echo htmlspecialchars($id); ?></strong>?</p>
        <div class="mt-4">
            <a href="delete.php?id=<?php echo $id; ?>&confirm=yes" class="btn btn-yes me-2">Yes, Delete</a>
            <a href="index.php" class="btn btn-no">Cancel</a>
        </div>
    </div>
</body>
</html>