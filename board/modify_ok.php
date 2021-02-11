<?
  include $_SERVER['DOCUMENT_ROOT']."/board/db.php";

  $bno = $_GET['idx'];
  $username = $_POST['name'];
  $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
  $title = $_POST['title'];
  $contnet = $_POST['content'];
  $sql = mq("updqte board set name=',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/board/read.php?idx=<?echo $bno;?>">
