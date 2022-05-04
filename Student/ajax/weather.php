<?php
  

  $lat = '26.403340';
  $lon = '75.860958';

  $api_key = 'f706de9275a62e0d1173a5a7a7c43098';
  $api_url = 'https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lon.'&appid='.$api_key;

  $weather_data = json_decode(file_get_contents($api_url), true);

  $temperature = $weather_data['main']['temp'];

  $temperature_in_celcuis = $temperature - 273.15;

  $temperature_description = ucwords($weather_data['weather'][0]['description']);

  $temperature_icon =  $weather_data['weather'][0]['icon'];

  echo "The current temperature is ".$temperature_in_celcuis."&deg;C". "<br>";
  echo "Today is " . date("d.m.Y") . "<br>";
  echo $temperature_description. "<br>";
  
  if($temperature_icon == '01d' || $temperature_icon == '01n')
  {?>
    <div class="icon sunny">
      <div class="sun">
        <div class="rays"></div>
      </div>
      </div>
<?php
  }

  else if($temperature_icon == '02d' || $temperature_icon == '02n'
     || $temperature_icon == '03d' || $temperature_icon == '03n'
     || $temperature_icon == '04d' || $temperature_icon == '04n' )
  {?>
    <div class="icon cloudy">
      <div class="cloud"></div>
      <div class="cloud"></div>
    </div>
   
<?php
  }

  else if($temperature_icon == '09d' || $temperature_icon == '09n')
  {?>
   <div class="icon sun-shower">
      <div class="cloud"></div>
      <div class="sun">
        <div class="rays"></div>
      </div>
      <div class="rain"></div>
    </div>
<?php
  }
  else if($temperature_icon == '10d' || $temperature_icon == '10n')
  {?>
   <div class="icon rainy">
      <div class="cloud"></div>
      <div class="rain"></div>
    </div>
  <?php
  }

  else if($temperature_icon == '11d' || $temperature_icon == '11n')
  {?>
   <div class="icon thunder-storm">
      <div class="cloud"></div>
      <div class="lightning">
        <div class="bolt"></div>
        <div class="bolt"></div>
      </div>
    </div>
  <?php
  }
  
  else if($temperature_icon == '13d' || $temperature_icon == '13n')
  {?>
   <div class="icon flurries">
    <div class="cloud"></div>
    <div class="snow">
      <div class="flake"></div>
      <div class="flake"></div>
    </div>
  </div>
  <?php
  }
  
  else 
  {?>
      <div>
          <img src="http://openweathermap.org/img/wn/<?php echo $weather_data['weather'][0]['icon'];?>@2x.png" />
      </div>
  <?php
  }

?>


