<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($knihy2 as $k): ?>
      <tr>
            <td>
                <?php echo $k->nazev_knihy;?>       
            </td>
            <td> 
                <?php echo $k->autor; ?>
            </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>