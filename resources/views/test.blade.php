<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        .header-class {
            text-align: center;
            padding-bottom: 40px;
            padding-top: 40px;
            font-family: 'Sofia', serif;
            font-size: 24px;
        }
        .content-box {
            border: solid #5B6DCD 1px;
            width: 100%;
            max-width: 600px;
            padding: 10px;
            box-sizing: border-box;
        }
        body {
            background-color: #333333;
        }
        .container-box {
            width: 800px;
            position: relative;
            left: 50px;
            margin-top: 150px;
            padding-top: 50px;
            background-color: #FEEA3A;
            padding-left: 60px;
            box-shadow: rgba(0,0,0,0.5) 0 0 10px;
        }
        header {
            color: #333333;
            font-size: 46px;
            font-weight: 700;
        }
        input {
            color: #000000;
            font-size: 18px;
        }
        button {
            margin-top: 35px;
            margin-bottom: 35px;
            color: #6E672D;
            position: relative;
            left: 400px;
            right: 25px;
            font-size: 16px;
            font-weight: 800;

        }
        .cat-image {
            position: absolute;
            right: 50px;
            left: 800px;
            top: 50px;
            width: 125px;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="container-box box-item">
        <div class="row">
            <div class="col-sm header-class">
                <h2>Typeth Thy Cath</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <input type="text" class="content-box clear"  placeholder="Enter anything">
            </div>
        </div>
        <div class="row">
            <div class="col-sm button-align">
                <button name="Cancel">Cancel</button>
                <button name="Submit">Submit</button>
            </div>
        </div>
    </div>
    <img src="{{ asset('/svg/cat.svg') }}" alt="cat" class="cat-image">
</div></body>

</html>
