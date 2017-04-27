<?php
  // Origenes
  $origen='';
  if ( isset($_GET['utm_content']) || isset($_GET['pk_campaign']) ){
    $origen = (isset($_GET['utm_content'])?$_GET['utm_content']:$_GET['pk_campaign']);
  }else {
    $origen = "web";
  }

  $campaign='';
  if ( isset($_GET['utm_campaign']) || isset($_GET['pk_kwd']) ){
    $campaign = (isset($_GET['pk_kwd'])?$_GET['pk_kwd']:$_GET['utm_campaign']);
  }
?>

<form style="display: visible" id="<?=$id_formulario?>" action="includes/enviar_form.php" method="post" onsubmit="return validarFormFirma(document.forms['<?=$id_formulario?>']);">
    <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre*">
    <p class="error nombre">No has introducido este dato.</p>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos*">
        <p class="error apellidos">No has introducido este dato.</p>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email*">
        <p class="error email">No has introducido este dato.</p>
        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <input class="form-control" type="tel" name="telefono" placeholder="Teléfono (solo España)">
        <p class="error telefono">No has introducido este dato.</p>
    </div>

    <div class="form-group">
        <select class="form-control" name="pais" onchange="ocultarTel(this.value);">
            <option value="0">País de residencia *</option>
            <option value="192" selected="selected">España</option>
            <option value="202">Albania</option>
            <option value="180">Alemania</option>
            <option value="205">Andorra</option>
            <option value="363">Arabia Saudí</option>
            <option value="203">Argelia</option>
            <option value="210">Argentina</option>
            <option value="211">Armenia</option>
            <option value="310">ARY Macedonia</option>
            <option value="213">Australia</option>
            <option value="173">Austria</option>
            <option value="220">Bélgica</option>
            <option value="221">Belice</option>
            <option value="219">Bielorrusia</option>
            <option value="225">Bolivia</option>
            <option value="226">Bosnia y Herzegovina</option>
            <option value="229">Brasil</option>
            <option value="232">Bulgaria</option>
            <option value="174">Canadá</option>
            <option value="241">Chile</option>
            <option value="242">China</option>
            <option value="253">Chipre</option>
            <option value="245">Colombia</option>
            <option value="249">Costa Rica</option>
            <option value="1222">Croacia</option>
            <option value="252">Cuba</option>
            <option value="176">Dinamarca</option>
            <option value="258">Ecuador</option>
            <option value="259">Egipto</option>
            <option value="260">El Salvador</option>
            <option value="368">Eslovaquia</option>
            <option value="369">Eslovenia</option>
            <option value="198">Estados Unidos</option>
            <option value="177">Estonia</option>
            <option value="350">Filipinas</option>
            <option value="178">Finlandia</option>
            <option value="179">Francia</option>
            <option value="272">Georgia</option>
            <option value="274">Gibraltar</option>
            <option value="276">Granada</option>
            <option value="181">Grecia</option>
            <option value="277">Guadalupe</option>
            <option value="279">Guatemala</option>
            <option value="267">Guayana Francesa</option>
            <option value="261">Guinea Ecuatorial</option>
            <option value="282">Guyana</option>
            <option value="283">Haití</option>
            <option value="285">Honduras</option>
            <option value="172">Hong Kong</option>
            <option value="286">Hungría</option>
            <option value="288">India</option>
            <option value="292">Irlanda</option>
            <option value="287">Islandia</option>
            <option value="182">Israel</option>
            <option value="183">Italia</option>
            <option value="293">Jamaica</option>
            <option value="294">Japón</option>
            <option value="295">Jordania</option>
            <option value="303">Letonia</option>
            <option value="304">Líbano</option>
            <option value="307">Libia</option>
            <option value="184">Liechtenstein</option>
            <option value="308">Lituania</option>
            <option value="185">Luxemburgo</option>
            <option value="317">Malta</option>
            <option value="327">Marruecos</option>
            <option value="318">Martinica</option>
            <option value="319">Mauritania</option>
            <option value="322">México</option>
            <option value="324">Moldavia</option>
            <option value="186">Mónaco</option>
            <option value="336">Nicaragua</option>
            <option value="338">Nigeria</option>
            <option value="188">Noruega</option>
            <option value="335">Nueva Zelanda</option>
            <option value="187">Países Bajos</option>
            <option value="346">Panamá</option>
            <option value="348">Paraguay</option>
            <option value="349">Perú</option>
            <option value="189">Polonia</option>
            <option value="190">Portugal</option>
            <option value="352">Puerto Rico</option>
            <option value="197">Reino Unido</option>
            <option value="175">República Checa</option>
            <option value="256">República Dominicana</option>
            <option value="355">Rumania</option>
            <option value="191">Rusia</option>
            <option value="361">San Marino</option>
            <option value="359">San Vicente y las Granadinas</option>
            <option value="375">Santa Helena</option>
            <option value="358">Santa Lucía</option>
            <option value="362">Santo Tomé y Príncipe</option>
            <option value="1469">Serbia y Montenegro</option>
            <option value="381">Siria</option>
            <option value="193">Suecia</option>
            <option value="194">Suiza</option>
            <option value="390">Túnez</option>
            <option value="195">Turquía</option>
            <option value="395">Ucrania</option>
            <option value="397">Uruguay</option>
            <option value="400">Venezuela</option>
            <option value="1148">Otros países</option>
        </select>
        <p class="error pais">No has introducido este dato.</p>
    </div>

    <div class="form-check">
        <label class="form-check-label">
           <input type="checkbox" checked class="form-check-input" name="politica">Deseo más información de Amnistía Internacional. <br /> Al participar aceptas la <a href="https://www.es.amnesty.org/politica-de-privacidad/" target="_blank">Política de Privacidad.</a>
        </label>
    </div>

    <button id="btnEnviar_<?=$id_formulario?>" type="submit" class="btn btn-enviar orange-white">Envía tu firma</button>
    <button id="btnEnviando_<?=$id_formulario?>" type="button" class="btn btn-enviar" style="display:none;">Enviando...</button>

    <input type="hidden" name="guardar_form" value="1">
    <input type="hidden" name="origen" value="<?php echo($origen); ?>">
    <input type="hidden" name="campanya" value="<?php echo($campaign); ?>">

</form>
