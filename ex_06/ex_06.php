<?php
 
function my_create_continent($continentNameToAdd,&$worldMap){
    $continent_exist=false;
    $continent_exist=array_key_exists($continentNameToAdd,$worldMap);
    if(!$continent_exist){
    $worldMap[$continentNameToAdd]=[];
    return $worldMap;}
}
 
function my_create_country($countryNameToAdd,$contitName,&$worldMap){ 
    $country_exist=false;
    $country_exist=array_key_exists($countryNameToAdd,$worldMap[$contitName]);
    if(!$country_exist){
    $worldMap[$contitName]=[$countryNameToAdd=>[]];
    return $worldMap;
    }
}
 
function my_create_city($cityNameToAdd,$postalCodeOfCityToAdd,$countryName, $continentName, &$worldMap){ 
    $worldMap[$continentName][$countryName][$cityNameToAdd]=$postalCodeOfCityToAdd;
    return $worldMap;
}
 
function my_get_countries_of_continent( $continentName, $worldMap){
    $continent_exist=false;
    try{ $continent_exist=array_key_exists($continentName,$worldMap);}
    catch (Exception $e){}
    if($continent_exist){
        return $worldMap[$continentName];
    }
    else{
        echo ("Failure to get continent.\n");
        return NULL;
    }
    
    }
 
function my_get_cities_of_country($country, $continent, $worldMap){
    $country_exist=false;
    $continent_exist=false;
    $continent_exist=continent_exist($continent,$worldMap);
    $country_exist=country_exist($country,$continent,$worldMap);
  
    if ($continent_exist && $country_exist){
        return $worldMap[$continent][$country];
    }
 
     }
 
    function my_get_city_postal_code($city, $country,$continent,$worldMap){
        $country_exist=false;
        $continent_exist=false;
        $city_exist=false;
        $continent_exist=continent_exist($continent,$worldMap);
        $country_exist=country_exist($country,$continent,$worldMap);
        $city_exist=city_exist($city,$country,$continent,$worldMap);
        
        if ($continent_exist && $country_exist && $city_exist){
            return $worldMap[$continent][$country][$city];
        }
 
        }
 
    function continent_exist($continent,$worldMap){ 
    if (isset($continent,$worldMap)){
        if (array_key_exists($continent,$worldMap)){
            return true;
        }
        else {
            echo ("Failure to get continent.\n");
            return NULL;
        }
    } 
    }
 
    function country_exist($country,$continent,$worldMap){
        if (isset($country,$worldMap[$continent])){
            if (array_key_exists($country, $worldMap[$continent])){
               // echo "country  ok\n";
                return true;
            }
            else {
                echo "Failure to get country.\n";
                return NULL;
            }
        } 
    }
 
    function city_exist($city,$country,$continent,$worldMap){
        if (isset($city,$worldMap[$continent][$country])){
            if (array_key_exists($city, $worldMap[$continent][$country])){
                return true;
            }
            else {
                echo "Failure to get city.\n";
                return NULL;
            }
        } 
    }


