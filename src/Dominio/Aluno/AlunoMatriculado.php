<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\Cpf;
use Alura\Arquitetura\Dominio\Evento;
use DateTimeImmutable;

class AlunoMatriculado implements Evento
{
    private DateTimeImmutable $momento;
    private Cpf $cpfAluno;

    public function __construct(Cpf $cpfAluno)
    {
        $this->cpfAluno = $cpfAluno;
        $this->momento = new DateTimeImmutable();
    }

    public function cpfAluno(): Cpf
    {
        return $this->cpfAluno;
    }

    public function momento(): DateTimeImmutable
    {
        return $this->momento;
    }
}
