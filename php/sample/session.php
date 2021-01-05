<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
    <?php
        session_start();
    
        // 세션 생성
        $_SESSION['userID'] = 'paneoy';
    
        if(isset($_SESSION['userID'])){
            echo "세션이 생성되었습니다.";
            echo "{$_SESSION['userID']}";
        }else{
            echo "세션이 생성 실패";
        }
    ?>
</body>
</html>