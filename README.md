# projetoIntegradorWEB

**O modelo consiste em dividir as páginas em seções**

<pre>As básicas são: <i>Header</i> , <i>CORPO</i> e <i>footer</i></pre>

*As partes supracitadas são auto-explicativas.*

Vale ressaltar que scripts de javascript devem ser inseridos em um arquivo chamado *js.includes.php* que deverá se localizar na mesma pasta em que o *index.php* o referencia. Aquele arquivo visa a inserção dos scripts imediatamente antes do fechamento da tag *body*.

<hr>

Sobre o site:

Contará com, pelo menos, três situações.
<pre>
	1) Login: Serve de entrada para o usuário, não dependendo se já
	cadastrado no sistema ou não. Visa reter todos os dados necessários
	referentes ao usuário, i.e., C.P.F., residência, porte de
	necessidade especial, dentre outros.

	2) Pesquisa no ponto: Página que irá mostrar, na parte superior, uma
	porção da região atual do usuário utilizando a API do Google Maps
	juntamente com o GeoLocalization do HTML5 + JS. O usuário só
	conseguirá acessar o conteúdo caso tenha permitido a coleta de sua
	informação de posição.

	A parte centro-inferior mostrará a lista ( conteúdo ) dos ônibus
	que passarão no dito ponto bem como seu tempo de chegada e sua
	lotação.
</pre>