<?php
 include 'worldcup.php';
 $PSL =  '{    
    "events": [
    {
    "Name": "PTV Sports",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/PTV-Sports.jpg",
    "startDate": "2022-2-2",
    "startTime": "00:00",
    "EventName": "PTV Sports",
    "endDate": "2025-12-28",
    "endTime": "00:00"
      }
      ],
"title": "PSL"
  }';
  $PSL1 = '['. $World . $PSL . ']';
    file_put_contents('psl.json', $PSL1)
?>





























