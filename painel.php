<!--Inicio de painel-->
  
<!--barra horizontal-->
    <div id="bar_">
       <table width="100%" height="50px" align="center"> 
           <tr>                       
             <td align="center" class="bar_">
                 <font color="#CCCCCC" face="Calibri Light">
                     <p id="for-block1">Passagens</p>
                 </font>
             </td>
             <td align="center" class="bar_">
                 <font color="#CCCCCC" face="Calibri Light">
                     <p id="for-block2">Pacotes</p>
                 </font>
             </td>
             <td align="center" class="bar_">
                 <font color="#CCCCCC" face="Calibri Light">
                     <p id="for-block3">Hoteis</p>
                 </font>
             </td>
           </tr>
       </table>
    </div>
<!-- fim barra horizontal-->
  
<!--primeiro block de formulario-->
<div id="block1">
<form id="formPesquisa" name="pesquisapassagem" action="passagens.php" method="post">
<div id="op_basicas_block1"><!---->	
    <div id="part1"><!---->
        <label for="idaVolta">Ida e volta</label>
            <input type="radio" checked name="bt_passagem" id="idaVolta" value="0" />
        <label for="ida">S&oacute; ida</label>
            <input type="radio" name="bt_passagem" id="ida" value="1" />
	</div>		
     <div id="part1_2">     
        <label for="origem">Origem</label>
            <input type="text" size="30" name="origem" value="" />
        <label for="destino">Destino</label>
            <input type="text" size="30" name="destino" value="" />
     </div>
     <div id="part2">
		<div id="dataIda">
			<label for="data1">Ida</label><!-- data 1 -->
				<input type="date" name="data1" size="10" maxlength="10" />
		</div>
		<div id="dataVolta">
			<label for="data2">Volta</label><!--data2-->
				<input type="date" name="data2" size="10" maxlength="10" /> 
        </div>           
     </div>
     <div id="part3"><!---->
		<div id="Sadulto">
			<label for="selectAdultosP">Adultos</label>                          
			   <select name="selectAdultosP" size="1" id="select">
				 <option value="0" selected="selected">0</option>
				 <option value="1">1</option>
				 <option value="2">2</option>
				 <option value="3">3</option>
				 <option value="4">4</option>
				 <option value="5">5</option>
				 <option value="Mais">Mais</option>
			   </select>
		</div>
		<div id="Scrianca">
         <label for="selectCriancaP">Crian&ccedil;as</label>  									
              <select name="selectCriancaP" size="1" id="select2">
                <option value="0" selected="selected">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="Mais">Mais</option>
               </select>
		</div>
   </div>
</div>
<div id="op_avancada_block1" style="display:none;">
    <div id="campoHorarios">
		<div id="HoraPartida">
		 <label for="h_partida">Horario de partida</label>
			<input type="time" size="20" name="h_partida" value="" />
		</div>
		<div id="HoraChegada">
		  <label for="h_chegada">Horario de chegada</label>
			<input type="time" size="20" name="h_chegada" value="" />
		</div>
    </div>
	<div id="escalaclasse">
		<div id="escalaDIV">
		 <label for="escala">Escalas</label>  									
			  <select name="escala" size="1" id="escala">
				<option value="" selected="selected">Sem Prefer&ecirc;ncia</option>
				<option value="0">Somente voos diretos</option>
				<option value="1">Até 1 escala</option>
				<option value="2">Até 2 escala</option>
				<option value="3">Até 3 escala</option>
				<option value="4">Até 4 escala</option>
				<option value="5">Até 5 escala</option>                                    
			  </select>
		</div>
		<div id="bilhete">
		 <label for="c_bilhete">Classe de bilhete</label>									
			  <select name="c_bilhete" size="1" id="c_bilhete">
				<option value="" selected="selected">Sem Prefer&ecirc;ncia</option>
				<option value="executiva">Executiva/Business</option>
				<option value="turistica">Turistica</option>
				<option value="1 classe">Primeira classe</option>                         
			  </select>
		</div>
    </div> 
     <label for="cia_aerea">Cia. A&eacute;rea</label>
		<input type="text" size="45" name="cia_aerea" value="" />
</div><!--termino opções avançadas do block1-->
    <div id="save_opv">
		<font color="white">
     	<p id="op_avancada" style="cursor:pointer;"><a>Op&ccedil;oes avan&ccedil;adas &gt;&gt;</a></p>
     	<p id="op_avancada_fecha" style="cursor:pointer;"><a>&lt;&lt; Op&ccedil;oes avan&ccedil;adas</a></p>
		</font>
 	</div>
 	<div id="pesquisar">
    	<input id="submit_block1" name="submit_block1" type="submit" value="Pesquisar" />
	</div>
</form>
</div>
        <!--segundo block de formulario-->
<?php include 'form2.php'; ?>
        <!--terceiro block de formulario-->
<?php include 'form3.php'; ?>
        
<!--Final de painel-->
