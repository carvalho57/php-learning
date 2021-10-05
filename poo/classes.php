<?php 

    # Classes
    # PROPRIEDADES - são variáveis que guardam as caracteristicas(estado)
        #- Tem que ter um nivel de acesso especifico
    # METODOS - funções que definem comportamento

    class Retangulo 
    {
        private $largura;
        private $altura;

        #metodo magico
        function __construct($largura, $altura)
        {
            $this->largura = $largura;
            $this->altura = $altura;
        }
    

        function setLargura($valor) {
            if(is_numeric($valor))
                $this->largura = $valor;
        }
        function setAltura($valor)  {
            if(is_numeric($valor))
                $this->altura = $valor;
        }
        function getLargura() {
            return $this->largura;
        }
        function getAltura()  {
            return $this->altura;
        }

        function Area() {
            return $this->largura * $this->altura;
        }

        function __toString()
        {
            return "Largura: $this->largura Altura: $this->altura";
        }
    }

    #Instancia
    $retangulo = new Retangulo(largura: 10, altura:20);
    echo "A area do retangulo é " . $retangulo->Area();
    echo "\n";
    echo $retangulo;

    #Classes Anonimas

    $anonymous = new class {
        public $valor1 = 20;
        public $valor2 = 30;
    };