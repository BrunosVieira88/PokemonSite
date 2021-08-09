const pokedex = () => {

	const Pegaurlid = id =>`https://pokeapi.co/api/v2/pokemon/${id}`

	const pokemonpromises = []

	for (var i = 1; i <= 150; i++) {

		pokemonpromises.push(fetch(Pegaurlid(i)).then(response => response.json()))
	}

	Promise.all(pokemonpromises)

	.then(pokemons => {
		const lispokemon = pokemons.reduce((accumulator, pokemon) => {
			const types = pokemon.types.map(typeInfo => typeInfo.type.name)

			accumulator += `
				<li class="card">
					<img class="card-image ${types[0]}" alt="${pokemon.name}" src"http://pokeres.bastionbot.org/images/pokemon/${pokemon.id}.png" />
					<h2 class="card-title">${pokemon.id}. ${pokemon.name}</h2>
					<p class="card-subtitle">${types.join(' | ')}</p>

				</li>
			`
			return accumulator
		},'')


		const ul = document.querySelector('[data-js="pokedex"]')
		ul.innerHTML = lispokemon

		console.log(ul)
	
	})
	
}

pokedex()
	