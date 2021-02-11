<?php include $_SERVER['DOCUMENT_ROOT']."/board/db.php"; ?>
<!doctype html>
<head>
  <meta charset="utf-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
  <div id="board_area">
    <h1>자유게시판</h1>
    <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
      <table class="list-table">
        <thead>
          <tr>
            <th width="70">번호</th>
            <th width="500">제목</th>
            <th width="120">글쓴이</th>
            <th width="100">작성일</th>
            <th width="100">조회수</th>
          </tr>
        </thead>
        <?php
          $sql = mq("select * from board order by idx desc limit 0,5");
          //보냈던 쿼리결과를 배열로 행이 끝날때 까지 자동으로 반복을 실행
            while($board = $sql->fetch_array())
            {
              $title=$board["title"];
              if(strlen($title)>30)
              {
                $title=str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8")."...", $board["title"]);
              }
          ?>
          <tbody>
            <tr>
              <td width="70"><?php echo $board['idx']; ?></td>
              <td width="500"><a href="/board/read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
              <td width="120"><?php echo $board['name']; ?></td>
              <td width="100"><?php echo $board['date']; ?></td>
              <td width="100"><?php echo $board['hit']; ?></td>
          </tbody>
          <?php } ?>
       </table>
       <div id="write_btn">
         <a href="write.php"><button>글쓰기</button></a>
       </div>
</body>
</html>
