<div class="companies form">
    <?php echo $this->Form->create('Company'); ?>
    <fieldset>
        <legend><?php echo __('Add Company'); ?></legend>
        <table>
            <tr>
                <th></th>
            </tr>
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
            </tr>
            <tr>
                <td>DATOS DE LA EMPRESA</td>
            </tr>

            <!--datos de empresa-->
            <tr>
                <td>Nombre:</td>
                <td><input type="text" id="Companyempr_nombre" name="data[Company][empr_nombre]"/></td>
                <td>URL de la empresa:</td>
                <td><input type="text" id="Companyempr_pagiWeb" name="data[Company][empr_pagiWeb]"/></td>
            </tr>
            <tr>
                <td>Nit:</td>
                <td><input type="text" id="Companyempr_nit" name="data[Company][empr_nit]"/></td>
                <td>Email :</td>
                <td><input type="text" id="Companyempr_mail" name="data[Company][empr_mail]"/></td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td><input type="text" id="Companyempr_direccion" name="data[Company][empr_direccion]"/></td>
                <td>Barrio:</td>
                <td><input type="text" id="Companyempr_barrio" name="data[Company][empr_barrio]"/></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="text" id="Companyempr_telefono" name="data[Company][empr_telefono]"/></td>
            </tr>
        </table>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>