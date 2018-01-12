# Número por extenso

Converte numeral em valor por extenso.

[<img src="https://img.shields.io/github/license/mashape/apistatus.svg">](https://github.com/wgenial/numeroporextenso/blob/master/LICENSE)

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
```

- Retorno:
```
cento e vinte três reais e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use WGenial\NumeroPorExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso;
$vazio = $extenso->converter();
echo $vazio;
```
- Retorno:
```
Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use WGenial\NumeroPorExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso;
$negativo = $extenso->converter(-1);
echo $negativo;
```
- Retorno:
```
O numeral deve ser maior que zero.
```

## Exemplos:
Consulte o arquivo https://github.com/wgenial/numeroporextenso-php/blob/master/example/index.php

```
12345.67
doze mil, trezentos e quarenta e cinco reais e sessenta e sete centavos

1234.56
um mil, duzentos e trinta e quatro reais e cinquenta e seis centavos

123.45
cento e vinte e três reais e quarenta e cinco centavos

12.34
doze reais e trinta e quatro centavos

1.23
um real e vinte e três centavos

0.21
vinte e um centavos

0.04
quatro centavos
```

## Referências:
http://www.moedasdobrasil.com.br/moedas/reformas.asp
https://www.professornews.com.br/component/content/article/181-utilidades/dicas-de-redacao/6872-como-escrever-valor-por-extenso.html
https://rogertakemiya.com.br/valor-por-extenso-com-o-php/

## Afinal, o que é um número por extenso?
> "Um número por extenso é a forma como um número qualquer é representado em determinada língua sem a utilização de algarismos, através de palavras ou combinação de palavras que representam os números, como por exemplo" [Wikipédia](https://pt.wikipedia.org/wiki/Número_por_extenso)

## Autor
| [<img src="https://avatars0.githubusercontent.com/u/41435?v=4&s=120"><br><sub>@giovanigenerali</sub>](https://github.com/giovanigenerali) |
| :---: |
