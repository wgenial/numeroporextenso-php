<?
  
  date_default_timezone_set('America/Sao_Paulo');

  include __DIR__.'/vendor/autoload.php';

  use WGenial\NumeroPorExtenso\NumeroPorExtenso;

  $extenso = new NumeroPorExtenso;

  $n1 = 12345.67;
  echo $n1 ."\n";
  $extenso_n1 = $extenso->converter($n1);
  echo $extenso_n1 ."\n\n";

  $n2 = 1234.56;
  echo $n2 ."\n";
  $extenso_n2 = $extenso->converter($n2);
  echo $extenso_n2 ."\n\n";

  $n3 = 123.45;
  echo $n3 ."\n";
  $extenso_n3 = $extenso->converter($n3);
  echo $extenso_n3 ."\n\n";

  $n4 = 12.34;
  echo $n4 ."\n";
  $extenso_n4 = $extenso->converter($n4);
  echo $extenso_n4 ."\n\n";

  $n5 = 1.23;
  echo $n5 ."\n";
  $extenso_n5 = $extenso->converter($n5);
  echo $extenso_n5 ."\n\n";

?>