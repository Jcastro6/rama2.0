<div id="block3">
   <form id="pesquisarhotel" name="pesquisarhotel" action="hotel.php" method="post">
    <div id="destinoH"> 
	 <label for="destinoh">Destino</label>
        <input name="destinoh" type="text" size="55" value="" />
	</div>
	<div id="entradaH">
     <label for="entradah">Entrada</label>
        <input name="entradah" type="date" size="24" value="" />
	<div id="saidaH">
     <label for="saidah">Saída</label>
        <input name="saidah" type="date" size="24" value="" />
	</div>
	
	<div id="block3_1">
     <label for="quanth">Quantidade</label>                          
       <select name="quanth" size="1" id="quant">
         <option value="1 quarto" selected="selected">1 Quarto</option>
         <option value="2 quarto">2 Quarto</option>
         <option value="3 quarto">3 Quarto</option>
       </select>

     <label for="adultoh">Adultos</label>                         
       <select name="Adultoh" size="1" id="select">
         <option value="0" selected="selected">0</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="Mais">Mais</option>
       </select>                                  
    
      <label for="criancah">Crian&ccedil;as</label> 									
      <select name="Criancah" size="1" id="select2">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="Mais">Mais</option>
      </select>
	</div>
	
	<div id="hotel_sub">
		<input id="submit_hotel" name="submit_hotel" type="submit" value="Pesquisar" />
	</div>
 </form>
</div>