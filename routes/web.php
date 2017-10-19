<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios/{usuario}/{almeida}', function($usuario){
	echo "Bem vindo, {$usuario}";
});

Route::get('/{blog}', function($blog){
	echo "Bem vindo ao Blog de Noticias";
});

Route::get('/{blog}/administrativo', function($blog){
	echo "Você está na pagina administrativa";
});

Route::get('/{blog}/administrativo/{usuario1}/{usuario2}/{usuario3}', function($blog, $usuario1, $usuario2, $usuario3){

?>

<table border="1">
	<tr>
		<td>Usuario 1</td>
		<td><?php echo $usuario1; ?></td>
	</tr>
	<tr>
		<td>Usuario 2</td>
		<td><?php echo $usuario2; ?></td>
	</tr>
	<tr>
		<td>Usuario 3</td>
		<td><?php echo $usuario3; ?></td>
	</tr>
</table>

<?php

});

Route::get('/media/{valor1}/{valor2}/{valor3}/{valor4}/{valor5}', function($valor1, $valor2, $valor3, $valor4, $valor5){
	$soma = $valor1 + $valor2 + $valor3 + $valor4 + $valor5;
	$media = $soma/5;
	echo "Media dos valores: ". $media;
});

Route::get('nomes/{nome1}/{nome2}', function($nome1, $nome2){
	if ($nome1 == $nome2) {
		echo "Os nomes informados são iguais";
	}
	else{
		echo "Nomes informados são diferentes";
	}
});

