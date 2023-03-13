<script src="<?= base_url() ?>assets/js/lib/tether/tether.min.js"></script>
<script src="<?= base_url() ?>assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins.js"></script>

<script src="<?= base_url() ?>assets/js/lib/datatables-net/datatables.min.js"></script>

<script>
	$(function () {
		$('#example').DataTable({
			responsive: true
		});
	});
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function () {
		$('.summernote').summernote();
	});
</script>

<script src="<?= base_url() ?>assets/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script>
	$(document).ready(function () {

		$('.swal-btn-cancel').click(function (e) {
			e.preventDefault();
			swal({
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel plx!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
				function (isConfirm) {
					if (isConfirm) {
						swal({
							title: "Deleted!",
							text: "Your imaginary file has been deleted.",
							type: "success",
							confirmButtonClass: "btn-success"
						});
					} else {
						swal({
							title: "Cancelled",
							text: "Your imaginary file is safe :)",
							type: "error",
							confirmButtonClass: "btn-danger"
						});
					}
				});
		});

		$('.swal-btn-info').click(function (e) {
			e.preventDefault();
			swal({
				title: "Are you sure?",
				text: "Your will not be able to recover this imaginary file!",
				type: "info",
				showCancelButton: true,
				cancelButtonClass: "btn-default",
				confirmButtonText: "Info",
				confirmButtonClass: "btn-primary"
			});
		});

		$('.swal-btn-success').click(function (e) {
			e.preventDefault();
			swal({
				title: "Good job!",
				text: "You clicked the button!",
				type: "success",
				confirmButtonClass: "btn-success",
				confirmButtonText: "Success"
			});
		});

	});
</script>

<script src="<?= base_url() ?>assets/js/app.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>