<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
$keyword = '';
if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    echo ($keyword) . "\n";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form |</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .search__form {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            width: 400px;
            height: 280px;
            border: 1px solid #ccc;
            border-radius: .7rem;
        }

        .search__form input {
            width: 100%;
            padding: 8px 16px;
            border: none;
            color: #111;
            outline: none;
            font-size: 1em;
            border-radius: .3rem;
            margin-bottom: 1rem;
        }

        .search__form button {
            padding: 8px 16px;
            border: none;
            outline: none;
            color: #fff;
            font-size: 1.23em;
            border-radius: .3rem;
            background: #1ac47b;
            width: 100%;
        }
    </style>
</head>

<body>
    <section class="search__form">
        <form action="<?php ?>" method="get">
            <input type="text" name="search" id="search" placeholder="Type in to search" value="<?php echo($keyword);?>">
            <button type="submit">Search</button>
        </form>
    </section>
</body>

</html>