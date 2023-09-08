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
    <form action="comfirm.php" method="post">
      <div class="mb-3 row">
        <label for="namae1" class="col-sm-2 col-form-label">名前(姓)</label>
        <div class="col-sm-10">
          <input type="text" name="namae1" class="form-control" id="namae1">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="namae2" class="col-sm-2 col-form-label">名前(名)</label>
        <div class="col-sm-10">
          <input type="text" name="namae2" class="form-control" id="namae2">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="zyuusyo" class="col-sm-2 col-form-label">住所</label>
        <div class="col-sm-10">
          <input type="text" name="zyuusyo" class="form-control" id="zyuusyo">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="denwa" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-10">
          <input type="tel" name="denwa" class="form-control" id="denwa">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="otona" class="col-sm-2 col-form-label">席数(大人）</label>
        <div class="col-sm-10">
          <input type="number" name="otona" class="form-control" id="otona">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kodomo" class="col-sm-2 col-form-label">席数(子ども)</label>
        <div class="col-sm-10">
          <input type="number" name="kodomo" class="form-control" id="kodomo">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="zikan" class="col-sm-2 col-form-label">時間</label>
        <div class="col-sm-10">
          <input type="time" name="zikan" class="form-control" id="zikan">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="eiga" class="col-sm-2 col-form-label">閲覧する映画名</label>
        <div class="col-sm-10">
          <select class="form-select" name="eiga" id="eiga">
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
          <select class="form-select" name="payment" id="payment">
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
          <input type="text" name="kanin" class="form-control" id="kanin">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sigoto" class="col-sm-2 col-form-label">職業</label>
        <div class="col-sm-10">
          <select class="form-control" name="sigoto" id="sigoto">
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
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>