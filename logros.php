<html>
    <head>
        <?php
        include_once "header.php";
        include_once 'validate.php';
        include_once 'gauchadasFx.php';
        include_once 'alert.php';
        include("footer.html");
        ?>
    </head>
    <body>
        <div class="row">
            <div class="container-fluid  col-md-4 col-md-offset-4 ph">
                <div class="page-header">
                    <h3 style="text-align:center;">Logros</h3>
                </div>
            </div>
        </div>
        <br>

           <div class="container">
      <h2>Range Sliders <small>Only tested in Chrome!</small></h2>
      <hr/>

      <div class="row">
        <div class="col-xs-6">
          <div class="range">
            <input type="range" name="range" min="1" max="100" value="50" onchange="range.value=value">
            <output id="range">50</output>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="range range-primary">
            <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
            <output id="rangePrimary">50</output>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <div class="range range-success">
            <input type="range" name="range" min="1" max="100" value="50" onchange="rangeSuccess.value=value">
            <output id="rangeSuccess">50</output>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="range range-info">
            <input type="range" name="range" min="1" max="100" value="50" onchange="rangeInfo.value=value">
            <output id="rangeInfo">50</output>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <div class="range range-warning">
            <input type="range" name="range" min="1" max="100" value="50" onchange="rangeWarning.value=value">
            <output id="rangeWarning">50</output>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="range range-danger">
            <input type="range" name="range" min="1" max="100" value="50" onchange="rangeDanger.value=value">
            <output id="rangeDanger">50</output>
          </div>
        </div>
      </div>

    </div>




    <style type="text/css">


.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: rgb(245, 245, 245);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}
.range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;
    
    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}
.range input[type="range"] {
    outline: none;
}

.range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary output {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
}

.range.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success output {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"] {
    outline-color: rgb(92, 184, 92);
}

.range.range-info input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info output {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"] {
    outline-color: rgb(91, 192, 222);
}

.range.range-warning input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning output {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"] {
    outline-color: rgb(240, 173, 78);
}

.range.range-danger input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger output {
    background-color: rgb(217, 83, 79);}

    </style>

    <script type="text/javascript">
        $('input[name="range"]').on("change mousemove", function() {
$(this).next().html($(this).val() + '%');
});
    </script>
