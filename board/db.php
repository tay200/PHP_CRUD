<?php
header('Content-Type: text/html; charset=utf-8');

// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, crud="DB이름"
$db = new mysqli("localhost", "web", "1234", "crud");
$db->set_charset("utf8");

function mq($sql){
  global $db;
  return $db->query($sql);
}
?>
