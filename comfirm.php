<?php

extract($_POST);
$errors=[];

//名前
if (empty($namae1)){
    $errors['namae1']="名前(姓)が未入力です";
}
if (empty($namae2)){
    $errors['namae2']="名前(名)が未入力です";
}
if (empty($otona)){
    $errors['otona']="席数(大人)が未入力です";
}
if (empty($kodomo)){
    $errors['kodomo']="席数(子供)が未入力です";
}
if (empty($zikan)){
    $errors['zikan']="時間が未入力です";
}
if (empty($eiga)){
    $errors['eiga']="閲覧する映画が未入力です";
}
if (empty($payment)){
    $errors['payment']="支払い方法が未入力です";
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <h1>映画観覧予約フォーム</h1>
    <?php if(empty($errors)) { ?>
      <form action="complate.php" method="post">
      <div class="mb-3 row">
        <label for="namae1" class="col-sm-2 col-form-label">名前(姓)</label>
        <div class="col-sm-10">
          <input type="text" name="namae1" readonly class="form-control" id="namae1" value="<?php echo $_POST['namae1']; ?>" >
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name2" class="col-sm-2 col-form-label">名前(名)</label>
          <div class="col-sm-10">
            <input type="text" name="name2" readonly class="form-control" id="name2" value="<?php echo $_POST['namae2']; ?>" >
          </div>
        </div>
        <div class="mb-3 row">
          <label for="zyuusyo" class="col-sm-2 col-form-label">住所</label>
          <div class="col-sm-10">
            <input type="text" name="zyuusyo" readonly class="form-control" id="zyuusyo" value="<?php echo $_POST['zyuusyo']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="denwa" class="col-sm-2 col-form-label">電話番号</label>
          <div class="col-sm-10">
            <input type="tel" name="denwa" readonly class="form-control" id="denwa" value="<?php echo $_POST['denwa']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="otona" class="col-sm-2 col-form-label">席数(大人）</label>
          <div class="col-sm-10">
            <input type="number" name="otona" readonly class="form-control" id="otona" value="<?php echo $_POST['otona']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kodomo" class="col-sm-2 col-form-label">席数(子ども)</label>
          <div class="col-sm-10">
            <input type="number" name="kodomo" readonly class="form-control" id="kodomo" value="<?php echo $_POST['kodomo']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="zikan" class="col-sm-2 col-form-label">時間</label>
          <div class="col-sm-10">
            <input type="time" name="zikan" class="form-control" id="zikan" value="<?php echo $_POST['zikan']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="eiga" class="col-sm-2 col-form-label">閲覧する映画名</label>
          <div class="col-sm-10">
            <?php echo $_POST['eiga']; ?>
            <input type="hidden" name="eiga" value="<?php echo $_POST['eiga']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="payment" class="col-sm-2 col-form-label">支払い</label>
          <div class="col-sm-10">
          <?php echo $_POST['payment']; ?>
            <input type="hidden" name="payment" value="<?php echo $_POST['payment']; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="kanin" class="col-sm-2 col-form-label">会員証</label>
          <div class="col-sm-10">
            <input type="text" name="kanin" readonly class="form-control" id="kanin" value="<?php echo $_POST['kanin']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sigoto" class="col-sm-2 col-form-label">職業</label>
          <div class="col-sm-10">
            <?php echo $_POST['sigoto']; ?>
            <input type="hidden" name="sigoto" value="<?php echo $_POST['sigoto']; ?>">
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <?php } else { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo implode("<br>",$errors);?>
    </div>
    <form action="comfirm.php" method="post">
      <div class="mb-3 row">
        <label for="namae1" class="col-sm-2 col-form-label">名前(姓)</label>
        <div class="col-sm-10">
          <input type="text" name="namae1" class="form-control" id="namae1"value="<?php echo $_POST['namae1']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="namae2" class="col-sm-2 col-form-label">名前(名)</label>
        <div class="col-sm-10">
          <input type="text" name="namae2" class="form-control" id="namae2"value="<?php echo $_POST['namae2']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="zyuusyo" class="col-sm-2 col-form-label">住所</label>
        <div class="col-sm-10">
          <input type="text" name="zyuusyo" class="form-control" id="zyuusyo"value="<?php echo $_POST['zyuusyo']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="denwa" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-10">
          <input type="tel" name="denwa" class="form-control" id="denwa"value="<?php echo $_POST['denwa']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="otona" class="col-sm-2 col-form-label">席数(大人）</label>
        <div class="col-sm-10">
          <input type="number" name="otona" class="form-control" id="otona"id="otona" value="<?php echo $_POST['otona']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kodomo" class="col-sm-2 col-form-label">席数(子ども)</label>
        <div class="col-sm-10">
          <input type="number" name="kodomo" class="form-control" id="kodomo"value="<?php echo $_POST['kodomo']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="zikan" class="col-sm-2 col-form-label">時間</label>
        <div class="col-sm-10">
          <input type="time" name="zikan" class="form-control" id="zikan"value="<?php echo $_POST['zikan']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="eiga" class="col-sm-2 col-form-label">閲覧する映画名</label>
        <div class="col-sm-10">
          <select class="form-select" name="eiga" id="eiga"value="<?php echo $_POST['eiga']; ?>">
            <option selected disabled>選択してください</option>
            <option value="ゾンビランド">ゾンビランド</option>
            <option value="ワイルドスピード">ワイルドスピード</option>
            <option value="君の瞳が問いかけている"></option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="payment" class="col-sm-2 col-form-label">支払い</label>
        <div class="col-sm-10">
          <select class="form-select" name="payment" id="payment"value="<?php echo $_POST['payment']; ?>">
            <option selected disabled>選択してください</option>
            <option value="カード">カード</option>
            <option value="現金">現金</option>
            <option value="交通系">交通系</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="kanin" class="col-sm-2 col-form-label">会員証</label>
        <div class="col-sm-10">
          <input type="text" name="kanin" class="form-control" id="kanin"value="<?php echo $_POST['kanin']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sigoto" class="col-sm-2 col-form-label">職業</label>
        <div class="col-sm-10">
          <select class="form-control" name="sigoto" id="sigoto"value="<?php echo $_POST['sigoto']; ?>">
            <option value="">選択してください</option>
            <option value="経営者・役員">経営者・役員</option>

            <option value="会社員（総合、一般職）">会社員（総合、一般職）</option>


            <option value="契約社員・派遣社員">契約社員・派遣社員</option>

            <option value="パート・アルバイト">パート・アルバイト</option>

            <option value="公務員（教職員除く）">公務員（教職員除く）</option>
            <option value="教職員">教職員</option>
            <option value="医療関係者">医療関係者</option>
            <option value="自営業・自由業">自営業・自由業</option>
            <option value="専業主婦・主夫">専業主婦・主夫</option>
            <option value="学生">学生</option>
            <option value="無職（定年含む）">無職（定年含む）</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  <?php } ?>
</body>

</html>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>