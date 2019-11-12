<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development E-book</title>
    <style>
        nav a {
            text-decoration: none;
            color: #f4f4f4;
        }

        ul {
            list-style-type: none;
        }

        nav {
            height: 100px;
            background-color: #333;
            color: #fff;
            display: grid;
            align-items: center;
            grid-template-columns: 9fr 3fr;
        }

        nav h1 {
            padding-left: 2rem;
        }

        nav ul {
            display: flex;
        }

        nav ul a {
            padding: 0.75rem;
            font-size: 1.25rem;
        }

        nav ul a:hover {
            color: #ccc;
            transition: 0.2s;
        }
        #progress {
            margin-top: 1rem;
            display: grid;
            justify-items: center;
            border-radius: 10px;
        }
        #progress #file {
            border: 2px solid #333;
            width: 60%;
            height: 25px;
        }
        #page {
            display: grid;
            align-items: center;
            height: 80px;
            text-align: center;
        }
        .container {
            line-height: 1.2;
            font-size: 1.2rem;
            margin: auto;
            width: 90%;
        }

        #pagination {
            text-align: center;
            padding-bottom: 2rem;
        }

        #pagination a {
            text-decoration: none;
            color: #333;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 1.2rem;
        }

        footer {
            background-color: #333;
            height: 100px;
            color: #fff;
            text-align: center;
            display: grid;
            align-items: center;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<nav>
    <h1>Web Development E-book</h1>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="page-1.php">Book</a></li>
    </ul>
</nav>