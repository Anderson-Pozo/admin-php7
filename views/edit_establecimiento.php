<?php
    $titulo = 'Editar';
?>
<!doctype html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
<html class="no-js lt-ie9 lt-ie8" lang="">
<html class="no-js lt-ie9" lang="">
<html class="no-js" lang="">
<head>
    <?php
        include_once '../layout/head.php';
    ?>
</head>

<body>
<!--Left Panel-->
<?php
include_once '../layout/navbar.php';
?>
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php
    include_once '../layout/header.php';
    ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Editar <?php echo  $response['nom_estable'] ?></strong>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <input name="id_establecimiento" hidden readonly value="<?php echo $response['id_establecimiento'];?>">
                    <input name="tipo_establecimiento" hidden readonly value="<?php echo $response['tipo_establecimiento'];?>">
                    <div class="form-group">
                        <label class="control-label mb-1">Nombre del establecimiento <span style="color: red">(*)</span></label>
                        <input id="nom_establecimiento" name="nom_establecimiento" type="text" class="form-control" required value="<?php echo $response['nom_estable'];?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Dirección <span style="color: red">(*)</span></label>
                        <input id="direccion" name="direccion" type="text" class="form-control" required value="<?php echo $response['direccion'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Horario</label>
                                <input id="horario" name="horario" type="text" class="form-control" value="<?php echo $response['horario'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Rango de precio</label>
                                <input id="rango_precio" name="rango_precio" type="text" class="form-control" value="<?php echo $response['rango_precio'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nombre del propietario</label>
                                <input id="nom_propietario" name="nom_propietario" type="text" class="form-control" pattern="[A-Za-z]+" value="<?php echo $response['nom_propietario'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Email</label>
                                <input id="email" name="email" type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" value="<?php echo $response['email'] ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Página web</label>
                                <input id="pagina_web" name="pagina_web" type="url" class="form-control" value="<?php echo $response['pagina_web'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Facebook</label>
                                <input id="facebook" name="facebook" type="url" class="form-control" value="<?php echo $response['facebook'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Foto de portada</label>
                                <input id="foto_portada" name="foto_portada" type="url" class="form-control" value="<?php echo $response['foto_portada'] ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nº de plazas <span style="color: red">(*)</span></label>
                                <input id="num_plazas" name="num_plazas" type="number" class="form-control" required value="<?php echo $response['num_plazas'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nº habitaciones/mesas <span style="color: red">(*)</span></label>
                                <input id="num_hab" name="num_hab" type="number" class="form-control" required value="<?php echo $response['num_habmesas'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Teléfono fijo</label>
                                <input id="telef_fijo" name="telef_fijo" type="text" class="form-control" pattern="[0-9]+"  maxlength="10" value="<?php echo $response['telef_fijo'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Teléfono celular</label>
                                <input id="telef_celular" name="telef_celular" type="text" class="form-control" pattern="[0-9]+"  maxlength="10" value="<?php echo $response['telef_celular'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Latitud</label>
                                <input id="lat" name="lat" type="number" class="form-control"  value="<?php echo $response['lat'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Longitud</label>
                                <input id="lng" name="lng" type="number" class="form-control"  value="<?php echo $response['lng'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Categoría <span style="color: red">(*)</span></label>
                        <select name="categoria" id="categoria" class="form-control" required>
<!--                            <option value="0" >Seleccione una categoría</option>-->
                            <option value="1" <?php echo ($response['categoria']==1) ? 'selected' : ' ' ?>>Primera</option>
                            <option value="2" <?php echo ($response['categoria']==2) ? 'selected' : ' ' ?>>Segunda</option>
                            <option value="3" <?php echo ($response['categoria']==3) ? 'selected' : ' ' ?>>Tercera</option>
                            <option value="4" <?php echo ($response['categoria']==4) ? 'selected' : ' ' ?>>Cuarta</option>
                            <option value="5" <?php echo ($response['categoria']==5) ? 'selected' : ' ' ?>>Quinta</option>
                            <option value="6" <?php echo ($response['categoria']==6) ? 'selected' : ' ' ?>>1 Estrella</option>
                            <option value="7" <?php echo ($response['categoria']==7) ? 'selected' : ' ' ?>>2 Estrellas</option>
                            <option value="8" <?php echo ($response['categoria']==8) ? 'selected' : ' ' ?>>3 Estrellas</option>
                            <option value="9" <?php echo ($response['categoria']==9) ? 'selected' : ' ' ?>>4 Estrellas</option>
                            <option value="10" <?php echo ($response['categoria']==10) ? 'selected' : ' ' ?>>5 Estrellas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="9" placeholder="Ingrese una descripción breve del lugar" class="form-control" ><?php echo $response['descripcion'] ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" onclick="history.go(-1);">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <?php
    include_once '../layout/footer.php';
    ?>
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../static/assets/js/main.js"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
<script src="static/assets/js/init/weather-init.js"></script>

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="../static/assets/js/init/fullcalendar-init.js"></script>

<!--Local Stuff-->
<script>
    jQuery(document).ready(function($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [
            { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
            { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
            { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2/3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });
        // Pie chart flotPie1  End
        // cellPaiChart
        var cellPaiChart = [
            { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
            { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
        ];
        $.plot('#cellPaiChart', cellPaiChart, {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    }
                }
            },
            legend: {
                show: false
            },grid: {
                hoverable: true,
                clickable: true
            }

        });
        // cellPaiChart End
        // Line Chart  #flotLine5
        var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

        var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
        // Line Chart  #flotLine5 End
        // Traffic Chart using chartist
        if ($('#traffic-chart').length) {
            var chart = new Chartist.Line('#traffic-chart', {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                series: [
                    [0, 18000, 35000,  25000,  22000,  0],
                    [0, 33000, 15000,  20000,  15000,  300],
                    [0, 15000, 28000,  15000,  30000,  5000]
                ]
            }, {
                low: 0,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showGrid: true
                }
            });

            chart.on('draw', function(data) {
                if(data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.index,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeOutQuint
                        }
                    });
                }
            });
        }
        // Traffic Chart using chartist End
        //Traffic chart chart-js
        if ($('#TrafficChart').length) {
            var ctx = document.getElementById( "TrafficChart" );
            ctx.height = 150;
            var myChart = new Chart( ctx, {
                type: 'line',
                data: {
                    labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                    datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    }

                }
            } );
        }
        //Traffic chart chart-js  End
        // Bar Chart #flotBarChart
        $.plot("#flotBarChart", [{
            data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: '#ffffff8a'
            }
        }], {
            grid: {
                show: false
            }
        });
        // Bar Chart #flotBarChart End
    });
</script>
</body>
</html>

