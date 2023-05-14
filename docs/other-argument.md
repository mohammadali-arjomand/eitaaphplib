# What's $other argument ...?
you can use $other in sendMessage and sendFile methods for send other fields for api

use $other like it:
```php
$other = ["field_1" => "value_1", "field_2" => "value_2", ...];
```
and use this variable in arguments.

## in sendMessage method
### 1. title
title for message. it's show in eitaayar panel
### 2. disable_notification
if this argument set by `1` or `true` eitaa don't send notification for users
### 3. reply_to_message_id
reply message id when send message
### 4. date
send message in this time, it's unix time, you can extract now from `time()` in php
### 5. pin
if this argument set by `1` or `true` this message will pinned in channel or supergroup
### 6. viewCountForDelete
this value is a number, when messages views reached this number message will deleted

## in sendFile method
### 1. caption
caption of the message
### 2. title
title for message. it's show in eitaayar panel
### 3. disable_notification
if this argument set by `1` or `true` eitaa don't send notification for users
### 4. reply_to_message_id
reply message id when send message
### 5. date
send message in this time, it's unix time, you can extract now from `time()` in php
### 6. pin
if this argument set by `1` or `true` this message will pinned in channel or supergroup
### 7. viewCountForDelete
this value is a number, when messages views reached this number message will deleted

## Example
see `~/examples/other.php` for example