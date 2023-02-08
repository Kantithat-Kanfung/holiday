<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday - ทดสอบ</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <script>
        var settings = {
          "url": "https://www.googleapis.com/calendar/v3/calendars/th.th%23holiday%40group.v.calendar.google.com/events?key=AIzaSyB2bpjAXTEdsBC4_Xq8j8I11kUglw2WdIE",
          "method": "GET",
          "timeout": 0,
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
        });
    </script>
</body>
</html>