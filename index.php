<?php
include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .invisible-box {
            width: 70%;
            height: 70%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.35);
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }


        input[type="file"] {
            display: none;
        }

        form {
            width: 50%;
            height: 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .btn {
            background: #141414;
            color: white;
            width: 100%;
            height: 40%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .btn.submit {
            background: #6449dd;
        }

        .btn:hover {
            box-shadow: 0 0 4px 10px rgba(200, 200, 200, 0.50);
        }

        .target-img {
            width: 75%;
            height: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .target-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="invisible-box">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="file" name="file">
                <label class="btn" for="file">Choose a file</label>
                <input class="btn submit" type="submit" value="Get Image">
            </form>
            <div class="target-img">
                <?php
                if ($upload) :
                ?>
                    <img src="upload/<?= $nameFile; ?>">
                <?php
                else :
                ?>
                    <h1>Silahkan Upload</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>