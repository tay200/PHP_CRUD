<?php
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";
?>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script tpye="text/javascript" src="js/jquery-ui.js"></script>
<script tpye="text/javascript">
  $(function(){
    $("#writepass").dialog({
      modal:true,
      title:'비밀글입니다.',
      width:400,
    });
  });
</script>
<?php
  $bno = $_GET['idx'];
  $sql = mq("select * from board where idx='".$bno."'");
  $board = $sql->fetch_array();
 ?>

 <div id="writepass">
   <form action="" method="post">
     <p>비밀번호<input type="password" name="pw_chk"/><input type="submit" value="확인"/></p>
   </form>
 </div>
<?php
  $bpw = $board['pw'];

  if(isset($_POST['pw_chk']))
  {
    $pwk = $_POST['pw_chk'];
    if(password_verify($pwk,$bpw))
    {
      $pwk == $bpw;
      ?>
        <script type="text/javascript">location.replace("read.php?idx=<?php echo $board["idx"]; ?>");</script>
      <?php
    }elxe{?>
      <script type="text/javascript">alert('비밀번호가 틀립니다.');</script>
    <?php }
  } ?>
