var ListaElementos = React.createClass({
	render: function (){
		var elemento = this.props.lista.elemento;

		return (
			<ul className="listaElementos">
				{
					elemento.map(function (e){
						return (
							<li key={e.id} className="elementList">{e.content}</li>
							);
					})
				}
			</ul>
			);
	}
});
React.render(<ListaElementos lista = {lista} />, document.getElementById('trauma'));
