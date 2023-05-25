# EitaaPHP
EitaaPHP is a lightweight library for working with Eitaayar api in php

## How to add it in my project?

--------------------------------
### 1. with composer
```
$ composer require arjomand/eitaa
```
### 2. with git
```
$ git clone https://github.com/mohammadali-arjomand/eitaaphplib.git
```
> #### NOTICE
> if you use git for add library to your project, you should also add cURL in your project
--------------------------------
now you should include library file:
```php
include "eitaa.php";
```

## How to use it?
for use this library:
1. first find your eitaayar token and channel id from [here](https://eitaayar.ir).
```php
$token = "bot16344:6d3e4430-****-****-****-************";
$channel_id = 23333622;
```
2. now, create a object from Eitaa class.
```php
$eitaa = new EitaaPHP($token, $channel_id);
```
3. use sendMessage or sendFile methods to sending.
```php
// send message
$eitaa->sendMessgae("YOUR_TEXT_TO_SEND");
// send file
$eitaa->sendFile("YOUR_FILE_PATH_TO_SEND");
```
4. you can use other parameters in methods (See other parameters document: `~/docs/other-argument.md`).
```php
// send message
$eitaa->sendMessgae("YOUR_TEXT_TO_SEND", [OTHER_PARAMETER => "VALUE"]);
// send file
$eitaa->sendFile("YOUR_FILE_PATH_TO_SEND", [OTHER_PARAMETER => "VALUE"]);
```
>### Examples
> you can see examples code in `~/examples`
