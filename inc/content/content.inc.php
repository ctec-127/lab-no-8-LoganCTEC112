<div class="container">
<div class="jumbotron">
    <h1 class="display-3">Temperature Converter!</h1>
    <hr class="my-2">
    <p class="lead">Convert any unit of measurement to another.</p>
</div>


<h3 class="phonetitle">Temperature Converter</h3>

<div class="row mt-2">   <!-- Always define columns after a bootstrap row -->    
    <div class="col-xs-12 col-s-12 col-md-6">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="temp">Temperature</label>
            <input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
    </div> <!-- End Column -->
    <div class="col-xs-12 col-s-12 col-md-6">
        <label for="originalunit" class="select"></label>
        <select name="originalunit" class="form-control">
             <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
             <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
             <option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
             <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
        </select>
    </div> <!-- End column -->
</div> <!-- End row -->
<div class="row">
        <div class="col-xs-12 col-s-12 col-md-6">
            <label for="convertedtemp" class="mt-3" >Converted Temperature</label>
            <input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
            name="convertedtemp" size="7" maxlength="7" id="convertedtemp" readonly>
    </div> <!-- End col -->
    <div class="col-xs-12 col-s-12 col-md-6">
            <label for="conversionunit" class="select"></label>
            <select name="conversionunit" class="form-control mt-3">
                <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
            </select>
    </div> <!-- End Columns -->
</div> <!-- End row -->
<div class="row">
    <div class="col-12">
        <input type="submit" value="Convert" class="btn btn-outline-success mt-3"/>
    </div> <!-- End Columns -->
</div>   <!-- End row -->
</form>

<div class="row mt-5 mb-5">
    <div class="col-xs-12 col-s-12 col-md-6 mt-3">
        <h3 class="border">Formulas</h3>
        <br>
        <p><strong>Celsius to Fahrenheit</strong></p>
        <p class="formula">C * (9/5) + 32 = F</p>
        <p><strong>Celsius to Kelvin</strong></p>
        <p class="formula">C + 273.15 = K</p>
        <p><strong>Fahrenheit to Celsius</strong></p>
        <p class="formula">(F - 32) * (5/9) = C</p>
        <p><strong>Fahrenheit to Kelvin</strong></p>
        <p class="formula">(F + 459.67) * (5/9) = K</p>
        <p><strong>Kelvin to Fahrenheit</strong></p>
        <p class="formula">K * (9/5) - 459.67 = F</p>
        <p><strong>Kelvin to Celsius</strong></p>
        <p class="formula">K - 273.15 = C</p> 
    </div>
    <div class="col-xs-12 col-s-12 col-md-6 mt-3">
        <h3 class="border">Information</h3>
        <br>
        <p><strong>Celsiuis</strong></p>
        <p> The degree Celsius (symbol: °C) can refer to a specific temperature on the Celsius scale or a unit to indicate a difference between two temperatures or an uncertainty. It is named after the Swedish astronomer Anders Celsius (1701–1744), who developed a similar temperature scale.</p>
        <p><strong>Fahrenheit</strong></p>
        <p>The Fahrenheit scale is a temperature scale based on one proposed in 1724 by German physicist Daniel Gabriel Fahrenheit (1686–1736).[1] It uses the degree Fahrenheit (symbol: °F) as the unit.</p>
        <p><strong>Kelvin</strong></p>
        <p>The kelvin is the base unit of temperature in the International System of Units (SI), having the unit symbol K. It is named after the Belfast-born, Glasgow University engineer and physicist William Thomson, 1st Baron Kelvin (1824–1907). </p>
        
    </div>
</div>


</div> <!-- end bootstrap container -->