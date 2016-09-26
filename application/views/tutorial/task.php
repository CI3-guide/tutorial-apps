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
    <h1>CodeIgniter超入門</h1>
    <h2>チュートリアル「タスクリストを作ってみよう」</h2>
</header>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">新規タスク</label>
            <input type="text" name="task" class="form-control" placeholder="タスク名" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">タスク追加</button>
    </form>

    <?php
        if(isset($create) and $create === true){   // $data["create"]がtrueの時に表示されます
            echo "
                <div class=\"alert alert-success\" role=\"alert\">
                    タスクを追加しました。
                </div>
            ";
        }elseif(isset($create) and $create === false){
            echo "
                <div class=\"alert alert-danger\" role=\"alert\">
                    タスクの追加に失敗しました
                </div>
            ";
        }
    ?>


    <table class="table table-inverse">
        <thead>
        <tr>
            <th>タスク</th>
            <th>登録日</th>
        </tr>
        </thead>
        <tbody>
            <?php
            if(isset($task_list) and count($task_list) > 0){
                foreach($task_list as $item)
                {
                    ?>
                    <tr>
                        <td><?php echo html_escape($item['task_name']); ?></td>
                        <td>
                            <?php
                            $today = new DateTime();
                            $created = new DateTime($item['created_at']);
                            $interval = $today->diff($created);
                            echo $interval->format('%a日前');
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

</div>
</body>
</html>