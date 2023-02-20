# prg-pattern
PHP functions to create PRG patterns (POST-Redirect-GET) to correctly send links to search engines. Compatible with the European accessibility act 2025.

## Installation
Clone this repository.

## Require
This library based on jQuery.

## Filelist

- readme.md - This file
- prg.php - File to handle the post-request and create the redirect-header
- prglib.php - PHP-Library with PRG-functions
- prgs.js - File with javascript- functions to handle the clicks
- example.html - Example with static links

## Functions

### createPRGTag($url,$salt,$anker,$cssClasses)

Parameter:

- $url -
- $salt -
- $anker -
- $cssClasses -

Result:

- String with HTML (<span class="prglink $cssClasses" data-adr="' . $base64CodedUrl . '" data-hash="' . $hashValue . '">' . $anker . '</span>)

## Use

- Create a PHP-file
- Include the library **prglib.php**
- Use the function **createPRGTag($url,$salt,$anker,$cssClasses)** to create new links. The function returns a PHP-String with html
- Write the html of the link to your html-document
- Include JQuery, prgs.css and prgs.js in your php/html-document  
