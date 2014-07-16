<div class="users form">    
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Crear Usuario'); ?></legend>
        <table>
            <tr>
                <td>Nombres</td>
                <td><input type="text" required="true" id="PeoplePers_primNombre" name="data[People][pers_primNombre]"/></td>
                <td>Apellidos</td>
                <td><input type="text" id="PeoplePers_primApellido" name="data[People][pers_primApellido]"/></td>
            </tr>
            <tr>
                <td><?php echo 'Tipo de Documento'; ?></td>
                <td><?php
                    echo $this->Form->input('document_type_id', array(
                        'label' => '',
                        "options" => $documentTypeName,
                        "empty" => "Seleccione"
                    ));
                    ?>
                </td>
                <td>Número de Documento: </td>
                <td><input type="text" id="PeoplePers_documento" name="data[People][pers_documento]"/></td>
            </tr>
            <tr>
                <td><?php echo 'País' ?></td>
                <td><?php
                    echo $this->Form->input('country_id', array(
                        'label' => '',
                        "options" => $countriesName,
                        "empty" => "Seleccione un País"
                    ));
                    ?>
                </td>
                <td><?php echo 'Departamento' ?></td>
                <td><?php
                    echo $this->Form->input('department_id', array(
                        'label' => '',
                        "options" => $departmentsName,
                        "empty" => "Seleccione"
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo 'Ciudad' ?></td>
                <td>
                    <?php
                    echo $this->Form->input('city_id', array(
                        'label' => '',
                        "options" => $citiesName,
                        "empty" => "Seleccione"
                    ));
                    ?>
                </td>
                <td>Dirección:</td>
                <td><input type="text" id="PeoplePers_direccion" name="data[People][pers_direccion]"/></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" id="PeoplePers_telefono" name="data[People][pers_telefono]"/></td>
                <td>Celular</td>
                <td><input type="text" id="PeoplePers_celular" name="data[People][pers_celular]"/></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento</td>
                <td><input type="text" id="PeoplePers_fechNacimiento" name="data[People][pers_fechNacimiento]"/></td>
                <td>Tipo de Sangre</td>
                <td><input type="text" id="PeoplePers_tipoSangre" name="data[People][pers_tipoSangre]"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" id="PeoplePers_mail" name="data[People][pers_mail]"/></td>
                <td>Tipo de Usuario</td>
                <td>
                    <?php
                    echo $this->Form->input('type_user_id', array(
                        'label' => '',
                        "options" => $typeUserName,
                        "empty" => "Seleccione"
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nombre de Usuario</td>
                <td><input name="data[User][usuario]" maxlength="20" id="UserUsuario" type="text"></td>
                <td>Contraseña</td>
                <td><input name="data[User][password]" id="UserPassword" type="password"></td>
            </tr>
            <!--        //echo $this->Form->input('type_user_id');
                        //echo $this->Form->input('document_type_id');
                        //echo $this->Form->input('department_id');                        
                        //echo $this->Form->input('city_id');-->

            <?php
            //echo $this->Form->input('Authorization');
            ?>
        </table>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>


<script>
    $("#UserDepartmentId").change(function() {

        var url2 = urlbase + "cities/getCitiesByDepartment.xml";        
        var datos2 = {
            department_id: $(this).val()
        };
        //alert(datos2.department_id);
        ajax(url2, datos2, function(xml) {
            $("#UserCityId").html("");
            $("datos", xml).each(function() {
                var obj = $(this).find("City");
                var valor, texto;
                valor = $("id", obj).text();
                texto = $("nombre", obj).text();
                alert("valor   " + valor + "  text   " + texto);
                if (valor) {
                    var html = "<option value='$1'>$2</option>";
                    html = html.replace("$1", valor);
                    html = html.replace("$2", texto);
                    $("#UserCityId").append(html);
                }
            });
        });
    });
    $(document).ready(function() {
        $("#UserDepartmentId").html("");
        $("#UserCityId").html("");
        $("#UserCountryId").change(function() {
            var url = urlbase + "departments/getDepartamentsByCountry.xml";
            var datos = {
                country_id: $(this).val()
            };
            ajax(url, datos, function(xml) {
                $("#UserDepartmentId").html("");
                $("datos", xml).each(function() {
                    var obj = $(this).find("Department");
                    var valor, texto;
                    valor = $("id", obj).text();
                    texto = $("nombre", obj).text();
                    if (valor) {
                        var html = "<option value='$1'>$2</option>";
                        html = html.replace("$1", valor);
                        html = html.replace("$2", texto);
                        $("#UserDepartmentId").append(html);
                    }
                });
            });
        });
    });

</script>
