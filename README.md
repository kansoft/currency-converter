# Module CurrencyConverter
``The module is released under the GPL license.``

**If you have any questions or want to report a mistake, please contact our support at: biuro@kansoft.pl.**


## Table of Contents

1. [Features](#features)
1. [Requirements](#requirements)
1. [Installation](#installation)



## Features
The module adds a website subpage to a Magento v.2 based store with a form that allows you to convert a Ruble exchange rate into Polish zloty. The module uses an external API to get current exchange rate (http://api.nbp.pl/en.html).


## Requirements


* PHP version compatible with the requirements of the installed version of Magento 2
* PHP extensions: [cURL][ext2] and [hash][ext3].

## Installation

#### Using Composer
`composer require kansoft/module-currency-converter`

#### Copying files to the server
 1. Download the latest version of the module from [GitHub repository][ext1]
 1. Unpack the downloaded file
 1. Connect to the ftp server and copy the unpacked content to the 'app/code/Kansoft/CurrConverter` directory of your Magento 2. If there is no such directory, create it.
 
 After installation using Composer or copying files from the console, run:
 * php bin/magento module:enable Kansoft_CurrConverter
 * php bin/magento setup:upgrade
 * php bin/magento setup:di:compile
 * php bin/magento setup:static-content:deploy

**To see a page with converter form go to url 'magento-base-url/currconverter/'**

<!--external links:-->
[ext1]: https://github.com/kansoft/currency-converter
[ext2]: http://php.net/manual/en/book.curl.php
[ext3]: http://php.net/manual/en/book.hash.php