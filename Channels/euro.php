<?php
include 'u19.php';
include 'psl.php';
$json = 'euro.json';
$EuroSport = '{ 
"events": [ 
{
    "Name": "EU 1",
    "Url": "https://bighra.crik.live/Channels/euro.json",
    "ImageUrl": "https://assets.crik.live/Channels/euro1.jp",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "EuroSport 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "EU 2",
    "Url": "https://bighra.crik.live/Channels/euro.json",
    "ImageUrl": "https://assets.crik.live/Channels/euro2.jp",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "EuroSport 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "EuroSport"
    }';
        $EuroSport1 = '{ 
"events": [ '  .
'{
    "Name": "EU 1",
    "Url": "https://bighra.crik.live/Channels/euro.json",
    "ImageUrl": "https://assets.crik.live/Channels/euro1.jp",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "EuroSport 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "EU 2",
    "Url": "https://bighra.crik.live/Channels/euro.json",
    "ImageUrl": "https://assets.crik.live/Channels/euro2.jp",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "EuroSport 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }'  .   '
    ],
    "title": "EuroSport"
    }';
    //   echo $A1;
    $EuroSport2 = '[' . $EuroSport1 . ']';
      file_put_contents($json, $EuroSport2);
        // header("Location: https://crik.live/Channels/" . $json);
?>
