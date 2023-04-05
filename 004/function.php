<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?php
        $str = "1948년 이승만 정부에서 식목일을 제정하고, 1949년에 대통령령으로 \'관공서의 공휴일에 관한 건\'으로 이 날을 식목일로 지정하고 한국의 법정 공휴일로 지정했다.

                1953년~, 한국전쟁 이후 난방용 석탄 도입과 함께 대대적인 녹화사업을 실시하게 되었다. 이 시기는 산림자원 황폐화가 심각한 사회 문제였기에 이 때 식목일이 함께 지정되었으며, 대통령부터 앞장서서 온 국민이 식목일에 나무심기 행사에 동원되었다. 이 시기 \"지리산 도벌 문제가 심각해서 국회에서 진상조사에 나선다\" 같은 기사가 보이곤 하는데, 도벌이 바로 몰래 나무를 베어간다는 의미다. 이 당시는 국유림의 울창한 산림도 마구잡이로 베어낼 만큼 심각했다는 말이었다.[3]
                
                1959년엔 대체공휴일도 시행되었으나, 1960년엔 3월 15일이 \'사방(砂防)의 날\'로 대체 지정되면서 공휴일에서 제외되기도 했다. 하지만 이듬해인 1961년에 식목의 중요성이 다시 대두되어 산림법 제정으로 범국민 조림 정책 시행과 동시에 공휴일로 부활했다. 천도교[4]와의 관련성 때문에, 박정희 정권 실세 중 한 명이었고 1986년 월북한 최덕신의 입김이 있었다는 주장도 나돌았다. 그는 외무부 장관과 서독 대사를 지냈고 퇴임 이후 천도교 교령을 지낸 군 장성 출신이었다.
                
                아무튼 1960년대 내무부 산하 산림청이 신설되었고 국무총리가 녹화사업을 진두지휘하는 등 정부차원에서 산림녹화에 심혈을 기울였다. 그 덕분에 녹화사업은 10여년 만에 성공적으로 완수되었고, 산림녹화사업은 세계적인 모범사례로 기록되며 온 국토에 풍요로운 산림을 가지게 되었다. 다만 빠른 산림정착을 위해 유실수보다는 아카시아 등 빨리 자라는 나무를 심었기 때문에 일부 산촌 어르신들 중에서는 \"산을 버려놨다\"는 비판의 목소리 또한 있기도 하다. 이후 국립산림과학원 등에서 산림의 고도화를 위한 노력을 지속한다.
                
                1981년, 한국프로야구가 생겨나며 개막일을 \'공휴일\'인 식목일을 전후로 잡았다.[5]
                
                1990년, 당시 한글날, 국군의 날과 함께 공휴일을 제외를 검토했으나, 매년 한식과 겹치다는 점으로 그대로 유지했다.
                
                1997년, IMF 사태로 경제가 어려워지자 공휴일에서 제외하자는 검토가 있었다.
                
                2002년, 식목일을 \'4월 첫째 토요일\', 어린이날을 \'5월 첫째 토요일\'로 요일을 고정하자는 검토가 있었다.
                
                2004년, 주5일제 시행으로 휴일을 줄이자는 검토가 있었다.";

        echo strlen($str); // 2912
    ?>

    <h2>nl2br == br + br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>