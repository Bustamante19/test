<!--script-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>


<script>
    $(document).ready(function() {

        $('select').material_select();

        $('.modal').modal();

    });


</script>


<script>
    $(document).ready(function() {
        $('select').material_select();

        $('.slider').slider({
            interval:25000
        });
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
</body>
</html>