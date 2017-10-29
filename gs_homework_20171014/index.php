<?php
include("functions.php");
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アンケート回答</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    // 質問に答えると次の質問が表示される
    $("input[name=q1]").on("change",function(){
      $(".q2").show();
    });
    $("select[name=q2]").on("change",function(){
      $(".q3").show();
    });
    $("[name=q3]").change(function(){
      if (this.checked) {
        $(".q4").show();
      }
    });
    $("input[name=q4]").focusin(function(){
      $("#submit").show();
    });
  });
  </script>
<!-- Main[Start] -->
<form method="post" action="save.php">
  <div class="jumbotron" style="text-align:center">
    <fieldset>
      <legend>フリーアンケート</lengend>
      <p>※質問に答えると次の質問が表示されるヨ</p>
      <div class="q1">
        <p>Q1</p>
        <label><input type="radio" name="q1" value="y">Yes</label>
        <label><input type="radio" name="q1" value="n">No</label>
      </div>
      <div class="q2" style="display:none">
        <p>Q2</p>
        <select name="q2">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="q3" style="display:none">
        <p>Q3</p>
        <label><input type="checkbox" name="q3" value="1">1</label>
        <label><input type="checkbox" name="q3" value="2">2</label>
        <label><input type="checkbox" name="q3" value="3">3</label>
        <label><input type="checkbox" name="q3" value="4">4</label>
        <label><input type="checkbox" name="q3" value="5">5</label>
      </div>
      <div class="q4" style="display:none">
        <p>Q4</p>
        <input type="text" name="q4" placeholder="comment">
      </div>
      <input type="submit" value="送信" id="submit" style="display:none">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>
