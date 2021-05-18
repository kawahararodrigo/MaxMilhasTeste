<?php

namespace App\Services;

use App\Services\GuzzleService;
use App\Services\Contracts\ConsultaEnderecoInterface;

class ConsultaEnderecoService implements ConsultaEnderecoInterface
{
    private $guzzleService;

    public function __construct(GuzzleService $guzzleService)
    {
        $this->guzzleService = $guzzleService;
    }

    public function pesquisarEndereco(string $cep)
    {
        try {
            if (!$this->validarCep($cep)) {
                return [
                    'statusCode' => 400,
                    'error' => 'CEP não válido!'
                ];
            }
            return $this->guzzleService->makeRequestApiCorreios($cep);
        } catch (\Throwable $th) {
            return [
                'statusCode' => 500,
                'error' => 'Erro interno do servidor!'
            ];
        }
    }

    public function validarCep(string $cep)
    {
        return preg_match('/[0-9]{5,5}([- ]?[0-9]{4})?$/', $cep);
    }
}
