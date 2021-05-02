	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="<?php echo SERVERURL;?>vistas/js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="<?php echo SERVERURL;?>vistas/js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="<?php echo SERVERURL;?>vistas/js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="<?php echo SERVERURL;?>vistas/js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="<?php echo SERVERURL;?>vistas/js/bootstrap-material-design.min.js" ></script>
	</fieldset>

	<script src="<?php echo SERVERURL;?>vistas/js/main.js" ></script>
	<script src="<?php echo SERVERURL;?>vistas/js/alertas.js" ></script>
     <script src="<?php echo SERVERURL;?>vistas/js/jquery.dataTables.js"></script>
	<script src="<?php echo SERVERURL;?>vistas/js/dataTables.bootstrap.js"></script>
	<script>$(document).ready(function() {
           $('body').bootstrapMaterialDesign();
           $('#example1').DataTable({
               language: {
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar: _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "infoThousands": ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                         "first": "Primero",
                         "last": "Último",
                         "next": "Siguiente",
                         "previous": "Anterior"
                    },
                    "aria": {
                         "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                         "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
               }
          });
           });</script>