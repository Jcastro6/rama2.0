<div id="block2">
 <form id="pesquisapacote" name="pesquisapacote" action="pesquisarp.php" method="post">
	<div id="block2_1">
		<label for="quant">Origem</label>
			<input type="text" size="30" name="origemPct" value="" />
		<label for="quant">Destino</label>
			<input type="text" size="30" name="destinoPct" value="" />
	</div>
	<div id="block2_2">
		<div id="voltaForm2">
		<label for="quant">Volta</label> 
			<input type="text" size="30" name="voltaPct" value="" />
		</div>
		<div id="idaForm2">
			<label for="quant">Ida</label>	
				<input type="text" size="30" name="idaPct" value="" />
		</div>
	</div>
	<div id="block2_3">
	   <label for="quant">Quantidade</label>                          
		  <select name="quant" size="1" id="quant">
			 <option value="1 quarto" selected="selected">1 Quarto</option>
			 <option value="2 quarto">2 Quarto</option>
			 <option value="3 quarto">3 Quarto</option>
		  </select>
	   <label for="selectAdultoPct">Adultos</label>                          
		  <select name="selectAdultoPct" size="1" id="select">
			 <option value="0" selected="selected">0</option>
			 <option value="1">1</option>
			 <option value="2">2</option>
			 <option value="3">3</option>
			 <option value="4">4</option>
			 <option value="5">5</option>
			 <option value="Mais">Mais</option>
		  </select>
   <label for="selectCriancaPct">Crian&ccedil;as</label>  									
     <select name="selectCriancaPct" size="1" id="select2">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="Mais">Mais</option>
     </select>
	</div>
     <input id="submit_block2" name="submit_block2" type="submit" value="Pesquisar" />
   </form>
 </div>