# Número por extenso

[![Packagist](https://img.shields.io/packagist/v/wgenial/numeroporextenso.svg)](https://packagist.org/packages/wgenial/numeroporextenso)
[![Build Status](https://travis-ci.org/wgenial/numeroporextenso-php.svg?branch=master)](https://travis-ci.org/wgenial/numeroporextenso-php)
[![GitHub license](https://img.shields.io/github/license/wgenial/numeroporextenso-php.svg)](https://github.com/wgenial/numeroporextenso-php/blob/master/LICENSE)

Converte numeral em valor por extenso.

### Como usar:

https://packagist.org/packages/wgenial/numeroporextenso

```bash
composer require wgenial/numeroporextenso
```

```php
include __DIR__.'/vendor/autoload.php';

use WGenial\NumeroPorExtenso\NumeroPorExtenso;

$extenso = new NumeroPorExtenso;
$extenso = $extenso->converter(123.45);
echo $extenso;
// cento e vinte três reais e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use WGenial\NumeroPorExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso;
$vazio = $extenso->converter();
echo $vazio;
// Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use WGenial\NumeroPorExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso;
$negativo = $extenso->converter(-1);
echo $negativo;
// O numeral deve ser maior que zero.
```

## Exemplos:
Consulte o arquivo https://github.com/wgenial/numeroporextenso-php/blob/master/example/index.php

## Referências:
http://www.moedasdobrasil.com.br/moedas/reformas.asp
https://www.professornews.com.br/component/content/article/181-utilidades/dicas-de-redacao/6872-como-escrever-valor-por-extenso.html
https://rogertakemiya.com.br/valor-por-extenso-com-o-php/

## Afinal, o que é um número por extenso?
> "Um número por extenso é a forma como um número qualquer é representado em determinada língua sem a utilização de algarismos, através de palavras ou combinação de palavras que representam os números, como por exemplo" [Wikipédia](https://pt.wikipedia.org/wiki/Número_por_extenso)

## Autor
| [<img src="https://avatars0.githubusercontent.com/u/41435?v=4&s=120"><br><sub>@giovanigenerali</sub>](https://github.com/giovanigenerali) |
| :---: |

## Contribuidor(es)
| [<img src="https://avatars2.githubusercontent.com/u/2475726?s=120&v=4"><br><sub>@falinhares</sub>](https://github.com/falinhares) |
| :---: |
