# Basic Covid-19 API for Iran
based on [disease-sh](https://github.com/disease-sh/api"disease-sh")
<br/>
<br/>
![](https://img.shields.io/github/stars/BardiaMadadi/Iran-Corona-API.svg)
![](https://img.shields.io/github/forks/BardiaMadadi/Iran-Corona-API.svg)
![](https://img.shields.io/github/issues/BardiaMadadi/Iran-Corona-API.svg)


---------

## How To Use :
> 1- Clone Project https://github.com/BardiaMadadi/Iran-Corona-API.git
> <br/>
> 2- Download Database File [irancorona.sql](https://github.com/BardiaMadadi/Iran-Corona-API/blob/main/db/irancorona.sql"irancorona.sql")
> <br/>
> 3- Import Database & use phpmyadmin for more controll
> <br/>
> 4- Run [this api](httphttps://github.com/BardiaMadadi/Iran-Corona-API/blob/main/api/RunEveryDay.php:// "this api") Every 24 H Using Cron or ..
> <br/>
-----

## Doc :
    - api
    	 RunEveryDay.php => Cycle Of Fetch Data Of Today
    	 getAll.php => Api To Get Info of any days
    	 getAllCases.php => Api to get all Cases
    	 getAllDeath.php => Api to get All Death
    	 getAllRecovered.php => Api to get All Recovered 
    	 getTodayCases.php => Api to get Today Cases
    	 getTodayDeath.php => Api to get Today Death
    	 getTodayRecovered.php => Api to get Today Recovered
    
    - class
    	 Corona.php  => Corona Class with api functions 
    
    - db
    	 config.php  => Database Class
    	 irancorona.sql  => Database File
    
    - helper
    	 curl.php   => Curl Request Helper
    	 responseJson.php   => Response Json Helper
    
    - idea
    	 fa





---------

## چطوری استفاده کنیم :
> 1-  https://github.com/BardiaMadadi/Iran-Corona-API.git پروژه رو کلون کنید
> <br/>
> 2-  [irancorona.sql](https://github.com/BardiaMadadi/Iran-Corona-API/blob/main/db/irancorona.sql"irancorona.sql") فایل دیتابیس رو دانلود کنید 
> <br/>
> 3- استفاده کنید phpmy admin دیتابیس رو ایمپورت کنید و برای کنترل بهتر از
> <br/>
> 4- را هر 24 ساعت اجرا کنید [this api](httphttps://github.com/BardiaMadadi/Iran-Corona-API/blob/main/api/RunEveryDay.php:// "this api") فایل
> <br/>
-----

## Doc :
    - api
    	 RunEveryDay.php => سیکل آپدیت کردن و اضافه کردن اطلاعات هر روز
    	 getAll.php => برای گرفتن داده ها در هر بازه روزانه ایی
    	 getAllCases.php => برای گرفتن همه بیماری ها از ابتدا کرونا
    	 getAllDeath.php => برای گرفتن همه مرده ها از ابتدا کرونا
    	 getAllRecovered.php => برای گرفتن همه درمان شده ها از ابتدا کرونا
    	 getTodayCases.php => برای گرفتن بیمار های امروز
    	 getTodayDeath.php => برای گرفتن همه کشته ها از ابتدا امروز
    	 getTodayRecovered.php => برای گرفتن همه درمان شده ها از امروز
    
    - class
    	 Corona.php  => کلاس کرونا با تابع های مخصوص
    
    - db
    	 config.php  => کلاس دیتابیس
    	 irancorona.sql  => فایل دیتابیس
    
    - helper
    	 curl.php   => فانکشن های کمکی کرل
    	 responseJson.php   => فانکشن ههای اماده ریسپانس
    
    - idea
    	 fa

