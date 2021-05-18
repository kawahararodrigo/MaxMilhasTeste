<?php

namespace App\Services\Contracts;

interface ConsultaEnderecoInterface
{
    public function pesquisarEndereco(string $cep);
}