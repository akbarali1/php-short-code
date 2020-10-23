# php short code
 Php Short code
Ishlatish va tushunish uchun shunchaki faylni yuklab oling Openserverdagi yoki hostingingizda papka ochib o`sha faylga ikkala faylni tashlang va index.php ayliga kiring

Namuna: 
![namuna](https://raw.githubusercontent.com/akbarali1/php-short-code/main/photo_2020-10-23_09-58-03.jpg)

Kod 2020 yil 23-oktyabrda qayda taxrirlandi va OOP ga foydalanish oson bo'lishi uchun o'tkazildi.

Usage instruction
```
require_once ("yadro.php");
$text = 'SHortcode example <br>  Reproduction: {100*5},<br>Add: : {100+50},<br> Separation: : {100-25},<br> To be: : {100/5},<br>
Foizni aniqlash: : {1000/100*5},';
$textsort = new ShortCode();
echo $textsort->textsort($text);
```

O`rnatish
```
require_once ("yadro.php");
$text = 'SHortcode <br>  Ko`paytirish: {100*5},<br>Q o`shish: : {100+50},<br> Ayrish: : {100-25},<br> Bo`lish: : {100/5},<br>
Foizni aniqlash: : {1000/100*5},';
$textsort = new ShortCode();
echo $textsort->textsort($text);

```
# The [Field_calculate](https://github.com/NielBuys/Field_calculate) library was used

# [Field_calculate](https://github.com/NielBuys/Field_calculate) kutubhonasidan foydalanilgan
