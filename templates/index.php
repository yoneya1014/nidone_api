<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>起床・就寝目標時刻の設定</title>
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
    <style>
        #title{
            font-size: 3vh!important;
            margin-top: 5%!important;
            margin-bottom: 5%!important;
        }
        body{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
        form.category-label{
            text-align: left!important;
        }
        .button-margin-fix{
            margin-top: 5%;
        }
        #timepicker1{
            margin-bottom: .5rem;
        }
        .centering{
            text-align: center!important;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
</head>
<body>
    <div class="centering">
        <label id="title">起床・就寝目標時刻の設定</label>
    </div>
    <form action="post_time" method="post">
        <label class="category-label">起床時間</label><br/>
        <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small" name="get_up_time">
            <span class="input-group-addon"><button type="button" class="btn btn-outline-secondary">選択</button></span>
        </div>
        <label class="category-label">就寝時間<br/></label>
        <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker2" type="text" class="form-control input-small" name="go_bed_time">
            <span class="input-group-addon"><button type="button" class="btn btn-outline-secondary">選択</button></span>
        </div>
        <div class="centering">
            <button type="submit" class="btn btn-primary button-margin-fix">登録</button>
        </div>
    </form>
    <script type="text/javascript">
        $('#timepicker1').timepicker();
        $('#timepicker2').timepicker();
    </script>
</body>
</html>