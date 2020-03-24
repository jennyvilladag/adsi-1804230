<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colaboración</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">

				<h1 class="h4 text-center">Colaboración</h1>
				<hr>
				<ul class="list-group">
				<?php 
				class Evolve {
					public function evolvePokemon($curr, $evol){
						echo "<li class='list-group-item list-group-item-success'>";
						echo $curr." -> ".$evol;
						echo "</li>";
					}
				}
				class Pokemon {
					private $curr;
					private $evol;
					private $colla;

					public function __construct($curr, $evol) {
						$this->curr = $curr;
						$this->evol = $evol;
						//Colaboración
						$this->colla = new Evolve;

					}
					public function nextLevel() {
						$this->colla->evolvePokemon($this->curr, $this->evol);
					}
				}
				$pk1 = new Pokemon('Pichu', 'Picachu');
				$pk1->nextLevel();

				$pk2 = new Pokemon('Picachu', 'Raichu');
				$pk2->nextLevel();

				$pk3 = new Pokemon('Squirtle', 'Wartotle');
				$pk3->nextLevel();

				$pk4 = new Pokemon('Wartotle', 'Blastoise');
				$pk4->nextLevel();

				$pk5 = new Pokemon('Bulbasaur', 'Ivysaur');
				$pk5->nextLevel();

				$pk5 = new Pokemon('Ivysaur', 'Venusaur');
				$pk5->nextLevel();
				?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>