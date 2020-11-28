		<h1>SEZNAM LITERÁRNÍCH DĚL K MATURITĚ</h1>
		<img src="assets/pic/book.png" alt="book" class="center">
		<div class="container">

		<h2>Ukázka knih</h2>

			<table class="table table-dark">
		  		<thead>
			    <tr>
			      <th scope="col"></th>
			      <th scope="col">Název knihy</th>
			      <th scope="col">Autor</th>
			    </tr>
			 	</thead>
			 	<tbody>
			 	<?php if ($knihy): ?>
                 <?php foreach($knihy as $knihy): ?>
				    <tr class="table-secondary">
				      <th><?php echo $knihy->id_knihy;?></th>
				      <td><?php echo $knihy->nazev_knihy;?></td>
				      <td><?php echo $knihy->autor;?></td>
				    </tr>
			     <?php endforeach ?>
			    <?php endif ?>
            	</tbody>
			</table> 
			</div>

		</div>
	</body>