
<?php include "header.php";
?>
<p>eye products</p>
<select onchange="getData(value)">
	
	<option>Eye Shadow</option>
	<option>Mascara</option>
	<option>Eye Liner</option>
	<option>Eye Cream</option>
	
</select>
<div id="productdata"></div>
<script type="text/javascript">

    function getData(val) {

        var ajaxUrl = "products.php";
        $.ajax({
            type: "GET",
            url: ajaxUrl,
            data:'description='+val,
            success: function(data){
                $("#productdata").html(data);
            }
        });
    }
</script>


<?php include "footer.php"; ?>
