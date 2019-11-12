<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development E-book</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
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
        .container {
            line-height: 1.2;
            font-size: 1.2rem;
            text-align: center;
            height: 420px;
        }
        .container h1 {
            padding-top: 3rem;
        }
        .container h3 {
            padding-bottom: 2rem;
        }
        .container a {
            text-decoration: none;
            font-weight: bold;
            color: #333;
            border: 1.5px solid #333;
            border-radius: 10px;
            padding: 0.8rem;
        }
        .container a:hover {
            color: #666;
            border-color: #666;
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
            <li><a href="index.php">Home</a></li>
            <li><a href="./pages/page-1.php">Book</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Learn Web Development</h1>
        <h3>Make money, have fun, build the future</h3>
        <a href="./pages/page-1.php">Read Now</a>
    </div>
    <footer>
        <p>&copy; 2019 E-book Corp</p>
    </footer>    
</body>
</html>