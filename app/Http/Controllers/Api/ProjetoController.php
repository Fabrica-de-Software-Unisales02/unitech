<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjetoRequest;
use Illuminate\Http\Request;
use App\Http\Resources\ProjetoCollection;
use App\Http\Resources\ProjetoResource;
use App\Repository\ProjetoRepository;

class ProjetoController extends Controller
{
    private $projeto;

    public function __construct(Projeto $projeto) {
        $this->projeto = $projeto;
    }

    public function index(Request $request) {

        $projetos = $this->projeto;
        $projetoRepository = new ProjetoRepository($projetos);

        if($request->has('conditions')) {
            $projetos = $projetoRepository->selectConditions($request->get('conditions'));
        }

        if($request->has('fields')) {
            $projetos = $projetoRepository->selectFilter($request->get('fields'));
        }

        return response()->json($projetoRepository->getResult()->paginate(6));
        // return new ProjetoCollection($projetos->paginate(10));
    }

    public function indexAll(Request $request) {

        $projetos = $this->projeto;
        $projetoRepository = new ProjetoRepository($projetos);

        if($request->has('conditions')) {
            $projetos = $projetoRepository->selectConditions($request->get('conditions'));
        }

        if($request->has('fields')) {
            $projetos = $projetoRepository->selectFilter($request->get('fields'));
        }

        return response()->json($projetoRepository->getResult()->get());
        // return new ProjetoCollection($projetos->paginate(10));
    }

    public function show($id) {
        $projeto = $this->projeto->find($id);

        // return response()->json($projeto);
        return new ProjetoResource($projeto);
    }

    public function save(ProjetoRequest $request) {

        try {
            $data = $request->all();
            $projeto = $this->projeto->create($data);

            return response()->json([
                'message' => 'projeto cadastrado com suseso',
                'data' => $projeto
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update(ProjetoRequest $request, $id) {

        try {
            $data = $request->all();
            $projeto = $this->projeto->find($id);
            $projeto->update($data);

            return response()->json(['message' => 'projeto atualizado com suseso'], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function delete($id) {

        try {
            $projeto = $this->projeto->find($id);
            $projeto->delete();

            return response()->json(['message' => 'projeto deletado com suseso'], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function estudantes($id) {
        try {
            $projeto = $this->projeto->findOrFail($id);
            return response()->json($projeto->estudantes, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function colaboradoes($id) {
        try {
            $projeto = $this->projeto->findOrFail($id);
            return response()->json($projeto->colaboradoes, 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
