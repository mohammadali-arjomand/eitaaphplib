# EitaaPHP-lib
EitaaPHP-lib a lightweight library for working with eitaayar api in php

## How to add it in project?
to add this library to your project:

1. install git. [how to install?](https://git-scm.com/downloads)
2. run this command in your root project.
```
$ git clone https://github.com/mohammadali-arjomand/eitaaphplib.git
```
3. include library file for use it.
```php
include "eitaaphplib.php";
```
now you can use this library.

## How to use it?
for use this library:
1. first find your eitaayar token and channel id from [here](https://eitaayar.ir).
```php
$token = "bot16344:6d3e4430-****-****-****-************";
$channel_id = 23333622;
```
2. now, create a object from Eitaa class.
```php
$eitaa = new Eitaa($token, $channel_id);
```
3. use sendMessage or sendFile methods to sending.
```php
// send message
$eitaa->sendMessgae("YOUR_TEXT_TO_SEND");
// send file
$eitaa->sendFile("YOUR_FILE_PATH_TO_SEND");
```
4. you can use other parameters in methods ([See other parameters](https://eitaayar.ir/assets/download/API_eitaayar.ir.pdf)).
```php
// send message
$eitaa->sendMessgae("YOUR_TEXT_TO_SEND", ["OTHER_PARAMETER" => "VALUE"]);
// send file
$eitaa->sendFile("YOUR_FILE_PATH_TO_SEND", ["OTHER_PARAMETER" => "VALUE"]);
```