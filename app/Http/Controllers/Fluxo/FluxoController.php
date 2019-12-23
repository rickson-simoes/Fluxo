<?php

namespace App\Http\Controllers\Fluxo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Models\Armazenador;


class FluxoController extends Controller
{
    public function index()
    {
    	$exibirdados = Armazenador::orderBy('id', 'desc')->get();

        $exibirdados_cre = DB::table('armazenadors_credito')->get();       

        $soma_ext = DB::table('armazenadors')->sum('preco');
        $soma_cre = DB::table('armazenadors_credito')->sum('preco_credito');
    	$soma = $soma_ext+$soma_cre;
    	$cash = 2188.00;
    	$sobra = $cash-$soma;

    	return view ('fluxo',compact('exibirdados','exibirdados_cre','soma','soma_ext','soma_cre','cash','sobra'));
    }

    public function inserir(request $request)
    {
        $dados = $request->all();

        Armazenador::create($dados);
                
        return redirect()->route('fluxo');
    }

    public function deletar($id)
    {
        $dados = Armazenador::find($id);

        $dados->delete();

        return redirect()->route('fluxo');
    }

    public function inserirCredito(request $request)
    {
        $nome = $request->nome;
        $parcelas = $request->parcelas;
    	$preco = $request->preco;

   	    DB::table('armazenadors_credito')->insert(
        ['nome_credito' => $nome, 'parcelas_credito' => $parcelas, 'preco_credito' => $preco]
        );
             	
        return redirect()->route('fluxo');
    }

    public function deletarCredito($id_credito)
    {
    	DB::table('armazenadors_credito')->where('id_credito', $id_credito)->delete();

    	return redirect()->route('fluxo');
    }

    public function pagueiCredito()
    {
        DB::table('armazenadors')->where('parcelas','<=','1')->delete();
        DB::select("UPDATE armazenadors SET parcelas = (parcelas-1)");

        return redirect()->route('fluxo');
    }
}
