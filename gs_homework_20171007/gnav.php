<header>
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ブックマーク登録</a>
      <a class="navbar-brand" href="select.php">データ一覧</a>
      <a class="navbar-brand" href="index_user.php" <?php if ($_SESSION['kanri_flg'] == 0) {echo "style='display:none'";}?>>ユーザー登録</a>
      <a class="navbar-brand" href="select_user.php" <?php if ($_SESSION['kanri_flg'] == 0) {echo "style='display:none'";}?>>ユーザー一覧</a>
    </div>
  </nav>
</header>
