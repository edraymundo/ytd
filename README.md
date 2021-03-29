YTD Widget that shows the year to date increase for a particular stock or index fund. You will need to setup your local webserver on the Mac and use Glimpse 2 to create the widget

* Get your own token for the API here:
https://rapidapi.com/apidojo/api/yahoo-finance1?endpoint=apiendpoint_33e0cec5-0f8a-4f9f-a6dc-018e6762fbe7

* Setup Web server on the Mac Big sur:
https://discussions.apple.com/docs/DOC-250003138

* Copy the script to the webserver folder:
cp index.php to ~/Sites/.

* Change the stock ticker and the $start price on the index.php. I have it set to `symbols=vti`

* Install Glimpse 2
https://apps.apple.com/us/app/glimpse-2/id1524217845

* Create a widget using Glimpse 2 and use the web url to show the YTD: http://localhost/~userid/index.php

Screenshot:

![alt text](https://git.vzbuilders.com/kex/ytd/blob/master/Screenshot%202021-03-29%20at%203.31.31%20PM.png)

