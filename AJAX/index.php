<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
</head>
<body>
        <div class="container-table">
             <table class="menu-table">  
                    <tr>  
                        <h3 class="item-type-name">Jelovnik</h3>  
                        <hr>
                    </tr>  
                    <tr>  
                        <?php include("menu.php"); ?>
                    </tr>      
                </table>     
            </div> 
    <div id="dataModal" class="modal fade">  
        <div class="modal-dialog">  
            <div class="modal-content">    
                <div class="modal-body" id="product_detail"></div>   
            </div>  
        </div>  
    </div> 


 <script src="js/jquery-3.5.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var product_id = $(this).attr("ID");  
           $.ajax({  
                url:"product_info.php",  
                method:"post",  
                data:{product_id:product_id},  
                success:function(data){  
                     $('#product_detail').html(data); 
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>