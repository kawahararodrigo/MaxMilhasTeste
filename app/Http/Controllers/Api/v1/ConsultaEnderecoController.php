<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\Contracts\ConsultaEnderecoInterface;

class ConsultaEnderecoController extends Controller
{
    private $consultaEnderecoService;

    public function __construct(ConsultaEnderecoInterface $consultaEnderecoService)
    {
        $this->consultaEnderecoService = $consultaEnderecoService;
    }

    public function index()
    {
        return  response()->json([
            'statusCode' => Response::HTTP_OK,
            'healthy' => 'Saudável',
            'service'=> 'api-consumer-correios'
        ], Response::HTTP_OK);
    }

    public function show($cep)
    {
        return response()->json($this->consultaEnderecoService->pesquisarEndereco($cep), Response::HTTP_OK);
    }
}
