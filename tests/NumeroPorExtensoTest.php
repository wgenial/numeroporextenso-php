<?php
  class NumeroPorExtensoTest extends PHPUnit\Framework\TestCase
  {
    public function testCase1()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(12345.67);

      $this->assertSame("doze mil, trezentos e quarenta e cinco reais e sessenta e sete centavos", $numero_extenso);
    }

    public function testCase2()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(1234.56);

      $this->assertSame("um mil, duzentos e trinta e quatro reais e cinquenta e seis centavos", $numero_extenso);
    }

    public function testCase3()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(1000);

      $this->assertSame("um mil reais", $numero_extenso);
    }

    public function testCase4()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(123.45);

      $this->assertSame("cento e vinte e três reais e quarenta e cinco centavos", $numero_extenso);
    }

    public function testCase5()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(12.34);

      $this->assertSame("doze reais e trinta e quatro centavos", $numero_extenso);
    }

    public function testCase6()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(1.23);

      $this->assertSame("um real e vinte e três centavos", $numero_extenso);
    }

    public function testCase7()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(0.21);

      $this->assertSame("vinte e um centavos", $numero_extenso);
    }

    public function testCase8()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(0.04);

      $this->assertSame("quatro centavos", $numero_extenso);
    }

    public function testCase9()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(0.00);

      $this->assertSame("O numeral deve ser maior que zero.", $numero_extenso);
    }

    public function testCase10()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter(-1);

      $this->assertSame("O numeral deve ser maior que zero.", $numero_extenso);
    }

    public function testCase11()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter("string");

      $this->assertSame("O numeral deve ser maior que zero.", $numero_extenso);
    }

    public function testCase12()
    {
      $numeroPorExtenso = new WGenial\NumeroPorExtenso\NumeroPorExtenso;
      $numero_extenso = $numeroPorExtenso->converter();

      $this->assertSame("Informe um numeral.", $numero_extenso);
    }
  }