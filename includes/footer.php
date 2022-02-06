	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
				<i class="icon-unfold mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; <script>
					document.write(new Date().getFullYear())
				</script> Room Inventory
			</span>

			<!--  <ul class="navbar-nav ml-lg-auto">
                 <li>Designed and Developed by <a href="#">Shilmy Y</a></li>
             </ul>-->

		</div>
	</div>
	<!-- /footer -->


	<!-- Core JS files -->
	<script src="./global_assets/js/main/jquery.min.js"></script>
	<script src="./global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="./global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="./global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="./global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="./global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="./assets/app-admin.js"></script>
	<script src="./global_assets/js/demo_pages/dashboard.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
	<script src="./global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
	<!-- /theme JS files -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/r-2.2.9/datatables.min.js"></script>

	<script>
		setInterval(function() {
			$('#moment_clock').html(moment().format('dddd, MMMM DD YYYY H:mm:ss A'));
		}, 1000)
	</script>

	<script>
		$(document).ready(function() {

			$('#example').DataTable({
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				"pageLength": 10, //25 records per page 

				/* Disable initial sort */
				"aaSorting": [],

			});

		});
	</script>

	</html>