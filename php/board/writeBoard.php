<?php
    include '../connect/connect.php';
    // include '../connect/session.php';
    // include '../connect/checkSession.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="webstoryboy">
    <meta name="description" content="웹스토리보이 포트폴리오 사이트입니다.">
    <meta name="keywords" content="웹표준, 웹접근성, 사이트만들기, 포트폴리오">
    <title>Portfolio</title>
    
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
   <!-- skip  -->
   <div id="skip">
       <a href="#mainCont">게시글 작성하기</a>
   </div>
   <!-- //skip  -->
   
    <!-- header  -->
    <header id="header">
        <?php
            include '../component/header.php';
        ?>
    </header>
    <!-- //header  -->
    
    <main>
        <!-- boardCont -->
        <section id="boardCont">
            <div class="container">
                <div class="writeBoard">
                    <h2>게시글을 작성해 주세요</h2>
                    <form action="saveBoard.php" name="boardWrite" method="post">
                        <fieldset>
                            <legend class="sr-only">게시판 작성 영역입니다.</legend>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" class="title-text" id="boardTitle" required autofocus>
                            </div>
                            <div>
                                <label for="boardContent">내용</label>
                                <textarea name="boardContent" id="boardContent" class="title-text" required autofocus></textarea>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <!-- //boardCont -->
    </main>

</body>
</html>