<div class="cities form">
    <?php echo $this->Form->create('City'); ?>
    <fieldset>
        <legend><?php echo __('Crear Ciudad'); ?></legend>
        <?php
        echo $this->Form->input('country_id', array(
            "options" => $countriesName,
            "empty"=>"Seleccione un País"
        ));
        echo $this->Form->input('department_id');
        echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>

<script>
    $(document).ready(function() {
          $("#CityDepartmentId").html("");
        $("#CityCountryId").change(function() {
            var url = url_base + "departments/getDepartamentsByCountry.xml";
            var datos = {
                country_id: $(this).val()
            };
            ajax(url, datos, function(xml) {
                $("#CityDepartmentId").html("");
                $("datos", xml).each(function() {
                    var obj = $(this).find("Department");
                    var valor, texto;                    
                    valor = $("id", obj).text();
                    texto = $("nombre", obj).text();
                    if (valor) {
                        var html = "<option value='$1'>$2</option>";
                        html = html.replace("$1", valor);
                        html = html.replace("$2", texto);
                        $("#CityDepartmentId").append(html);
                    }
                });
            });
        });
    });

</script>