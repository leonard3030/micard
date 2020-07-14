     </div>
		</div>
            <hr style="border-top: 1px #0f78885c solid;">
        <div class="footer-section" style="display: flex;justify-content: center;"> 
                <p style="color: black">Copyright &copy; micard 2020 - <?php echo date('Y'); ?> All rights reserved | Developed by <b style="color: #0b809c">Omega Solutions</b></p>
        </div>
    <script type="text/javascript" src="../../assets/all/DataTables-1.10.20/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../../assets/all/DataTables-1.10.20/js/popper.min.js"></script>
    <script src="../../assets/all/bootstrap/js//bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/all/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../assets/all/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/all/js/main.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#dt').DataTable();
} );
</script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#td').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false
    });
} );
</script>
  </body>
</html>