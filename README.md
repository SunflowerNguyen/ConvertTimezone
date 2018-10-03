# ConvertTimezone
convert time for lumen and laravel

How to use 

For Lumen   
    
    Open bootstrap/app.php and register provider
    
        $app->register(DuyVuSeldat\ConvertTimeZone\ConvertTimezoneServiceProvider::class);

For Laravel
        
    Open config/app.php and add the service provider to your providers array.
        
        DuyVuSeldat\ConvertTimeZone\ConvertTimezoneServiceProvider::class    



use DuyVuSeldat\ConvertTimeZone\Facades\ConvertTimezone;


    ConvertTimeZone::convert('02-10-2018 18:19:00' , 'Asia/Bangkok' , 'UTC'); //output  2018-10-02 11:19:00

    ConvertTimeZone::convert('02-10-2018 18:19:00' , 'Asia/Bangkok' , 'UTC' , 'Y-m-d'); //output  2018-10-02
     
     
    GET LIST TIME ZONE 
        
        ConvertTimeZone::getList(); // output [ 'UTC' => '(UTC+00:00) UTC', ..... ] 