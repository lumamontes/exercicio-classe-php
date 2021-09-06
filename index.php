<?php
abstract class Pessoa
{
    // Crie uma classe chamada Pessoa, contendo os atributos: nome, cpf, data_nascimento;
    public $nome;
    public $cpf;
    public $data_nascimento;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->nome;
    }


    public function setData($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    public function getData(){
        return $this->nome;
    }

    // Crie um método chamado tirar cópias que vai receber um parâmetro com a quantidade de cópias e vai multiplicar com o valor da cópia;

    function tirar_copias($quant_copias){
        return $quant_copias * 0.1;
    }
}

class Aluno extends Pessoa
{
    // Crie uma Classe chamada Aluno na qual vai herdar a Pessoa contendo o atributo matricula;
    public $matricula;

    // Aplique o polimorfismo na classe aluno no método tirar cópias onde o preço por cópia vai ser R$ 0.10.

    function tirar_copias($quant_copias){
        return $quant_copias * 0.10;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }
}

class Professor extends Pessoa
{
    // Crie uma Classe chamada Professor na qual vai herdar a Pessoa contendo o atributo salario e disciplina;
    public $salario;
    public $disciplina;

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }

    public function getDisciplina(){
        return $this->disciplina;
    }

    // Aplique o polimorfismo na classe professor no método tirar cópias onde o preço por cópia vai ser R$ 0.08.


    function tirar_copias($quant_copias){
        return $quant_copias *  0.08;
    }
}

$aluno = new Aluno();
$aluno->setNome("Luma");
$aluno->setCpf("12345678");
$aluno->setData("03/09/2002");
$aluno->setMatricula("1234556");

$professor = new Professor();
$professor->setNome("Luma");
$professor->setCpf("12345667");
$professor->setData("03/09/2002");
$professor->setSalario("1000");
$professor->setDisciplina("História");

?>
