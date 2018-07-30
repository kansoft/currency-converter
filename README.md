# Moduł CurrencyConverter
``Moduł jest wydawany na licencji GPL.``

**Jeżeli masz jakiekolwiek pytania lub chcesz zgłosić błąd zapraszamy do kontaktu z naszym wsparciem pod adresem: biuro@kansoft.pl.**


## Spis treści

1. [Cechy](#cechy)
1. [Wymagania](#wymagania)
1. [Instalacja](#instalacja)



## Cechy
Moduł dodaje podstronę www na sklepie opartym o Magento v.2 z formularzem umożliwiającym przeliczenie kursy waluty Rubla na Polski złoty.


## Wymagania


* Wersja PHP zgodna z wymaganiami zainstalowanej wersji Magento 2
* Rozszerzenia PHP: [cURL][ext2] i [hash][ext3].

## Instalacja

#### Przy użyciu Composer
`composer require kansoft/module-currency-converter`

#### Kopiując pliki na serwer
1. Pobierz najnowszą wersję moduł z [repozytorium GitHub][ext1]
1. Rozpakuj pobrany plik
1. Połącz się z serwerem ftp i skopiuj rozpakowaną zawartość do katalogu `app/code/Kansoft/CurrConverter` swojego sklepu Magento 2. Jeżeli nie ma takiego katalogu utwórz go.

Po instalacji przy użyciu Composer lub kopiując pliki z poziomu konsoli uruchom:
   * php bin/magento module:enable Kansoft_CurrConverter
   * php bin/magento setup:upgrade
   * php bin/magento setup:di:compile
   * php bin/magento setup:static-content:deploy



<!--external links:-->
[ext1]: https://github.com/kansoft/currency-converter
[ext2]: http://php.net/manual/en/book.curl.php
[ext3]: http://php.net/manual/en/book.hash.php