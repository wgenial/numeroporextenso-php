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
Cento e vinte três reais e quarenta cinco centavos
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

## Contribuição:

Eu sei que tem muita coisa para melhorar, principalmente o tratamento de `milhão`, `milhões`, etc.. se tiver interesse pode fazer um `clone` do projeto, aplicar as melhoras e enviar um `pull request`. Eu agradeço \o/

## Afinal, o que é um número por extenso?
> "Um número por extenso é a forma como um número qualquer é representado em determinada língua sem a utilização de algarismos, através de palavras ou combinação de palavras que representam os números, como por exemplo" [Wikipédia](https://pt.wikipedia.org/wiki/Número_por_extenso)

## Autor
| [<img src="https://avatars0.githubusercontent.com/u/41435?v=4&s=120"><br><sub>@giovanigenerali</sub>](https://github.com/giovanigenerali) |
| :---: |
