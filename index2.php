<?php

$market = `curl -s https://money.cnn.com/quote/etf/etf.html?symb=VTI| xmllint --html  - 2>/dev/null|grep ytdval|xmllint --html --xpath "string(//td/@ytdval)" -`;
echo '<body style="background-color:black;"><p>&nbsp;<p><center><font color=white style="font-family:sans-serif;font-size:50px">YTD: '.number_format($market,2).'%</font></center></body>';
