		</div>
	</div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <!-- Popper.JS -->
    <script src="<?php echo base_url();?>assets/js/popper.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script>

<!--     <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"</script>

    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"</script>

    <script type="text/javascript">$('#sampleTable').DataTable();</script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
        $(document).ready(function() {
          $('#sampleTable').DataTable({
            "order": []});
      } );
    </script>
</body>

</html>