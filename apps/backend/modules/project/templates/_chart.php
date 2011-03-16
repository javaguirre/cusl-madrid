<script type="text/javascript" src="/js/jqplot/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.canvasAxisLabelRenderer.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="/js/jqplot/jqplot.cursor.min.js"></script>
<div id="chart1" style="width: 100%; margin-top: 100px;">
</div>
<script>
    $.jqplot.config.enablePlugins = true;
    line1 = <?php echo $sf_data->getRaw('grafica'); ?>;
    plot1 = $.jqplot('chart1', [line1], {
        legend:{show: true, location: 'ne'}, title: 'Totales',
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions:{barPadding: 8, barMargin: 20, varyBarColor: true}
        },
//         series:[
//             {
//                 showLine: false,
//                 markerOptions: {
//                                    style: 'square'
//                                }
//             }
//             ],
        axes:{
            xaxis:{  renderer: $.jqplot.CategoryAxisRenderer,
                     rendererOptions: {
                                         tickRenderer: $.jqplot.CanvasAxisTickRenderer
                                      },
                     tickOptions:
                         {
                            formatString:'%s',
                            fontSize: '10pt',
                            fontFamily: 'Tahoma',
                            angle: -30
                         }
                  },
            yaxis:{
                    min: 0,
                    tickOptions:{formatString:'%d'}
                  }
        },
        highlighter: { sizeAdjust: 12, tooltipLocation: 'n' },
        cursor: { show: true }
    });
</script>