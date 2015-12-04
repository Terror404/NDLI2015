<h1>Ajouter une catastrophe</h1>

<form action="../controller/ajout-disaster.php" method="post" >
  	Ville: <input type="text" name="ville">
  	</br>
	</br>
  	Type de catastrophe: </br>
	<p> catasprophe naturelle:</p>
  	<input type="radio" name="type" value="Haute Montagne"> Haute Montagne </br>
	<input type="radio" name="type" value="Innondation "> Innondation </br>
	<input type="radio" name="type" value="Tremblement de terre"> Tremblement de terre  </br>
	<input type="radio" name="type" value="Cyclone"> Cyclone </br>
	<input type="radio" name="type" value="Incendie foret"> Incendie forêt </br>
	<input type="radio" name="type" value="Eruption volcanique"> Eruption volcanique </br>
	<input type="radio" name="type" value="Tsunamie"> Tsunamie </br>

	<p> catasprophe industrielle:</p>
	<input type="radio" name="type" value="Chimique"> Chimique </br>
	<input type="radio" name="type" value="Nucléaire"> Nuléaire </br>

	<p> épidémie :</p>
	<input type="radio" name="type" value="Rage">  Rage  </br>
	<input type="radio" name="type" value="Coronavirus MERS"> Coronavirus MERS </br>
	<input type="radio" name="type" value="Santé / Vaccinations"> Santé / Vaccinations  </br>
	<input type="radio" name="type" value="Grippe A (H1N1)"> Grippe A (H1N1) </br>
	<input type="radio" name="type" value="Grippe aviairet"> Grippe aviaire </br>
	</br>
	Message: </br>
	<input type="text" name="message" id="message" placeHolder="200 caratères maximum" onclick="verify_lenght()">
	<p id="warning"><p>
  	</br>
	</br>
	<input type="submit" value="Submit" >

</form> 
<script>
	function verify_lenght() {
		 var message = document.getElementById('message').value;
		 if (message.length > 200) {
		 	document.getElementById("warning").innerHTML = "Attention! le message fait plus de 200 caractères";
		 }
		else if (message.length <= 200){
		}
			document.getElementById("warning").innerHTML = "";
	}
</script>

