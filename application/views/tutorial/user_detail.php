<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeIgniter超入門</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        header {
            text-align:center;
            padding:2rem 0;
        }
        form{
            border:1px solid  #c0c0c0;
            padding:2rem;
            margin-bottom:2rem;
        }
    </style>
</head>
<body>
<header class="container">
    <h1>CodeIgniter超入門サンプル</h1>
    <h2>チュートリアル「新規ページをつくってみよう」</h2>
</header>
<article class="container">
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>項目</th>
            <th>内容</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>氏名</th>
            <td><?php if(isset($name)){ echo $name; }?></td>
        </tr>
        <tr>
            <th>都道府県</th>
            <td><?php if(isset($pref)){ echo $pref; }?></td>
        </tr>
        </tbody>
    </table>
</article>
</body>
</html>