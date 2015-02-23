<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="bower_components/jquery/dist/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.2.1/js/bootstrap-switch.js"></script> -->

    <!--script src="js/bootstrap-switch-3.js"></script>  --> 
    <script src="js/ringio.js"></script>
    <script src="js/polyfill.object-fit.min.js"></script>
    <script>

        $(document).ready(function(){
            $('.make-switch').bootstrapSwitch();
            objectFit.polyfill({
                selector: 'img', // this can be any CSS selector
                fittype: 'cover' // either contain, cover, fill or none
            });
        });

    </script>

    <!-- <script src="tooltip-viewport.js"></script> -->

</body>
</html>
