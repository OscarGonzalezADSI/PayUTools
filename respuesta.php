<!DOCTYPE html>
<html>
<body>
<label for="">transactionState</label>
<input type="text" name="" id="transactionState"><br>
<label for="">transactionId</label>
<input type="text" name="" id="transactionId"><br>
<label for="">reference_pol</label>
<input type="text" name="" id="reference_pol"><br>
<label for="">referenceCode</label>
<input type="text" name="" id="referenceCode"><br>
<label for="">TX_VALUE</label>
<input type="text" name="" id="TX_VALUE"><br>
<label for="">currency</label>
<input type="text" name="" id="currency"><br>
<label for="">processingDate</label>
<input type="text" name="" id="processingDate"><br>



<script>
    function myFunction() {
        var uri = "my test.asp?name=ståle&car=saab&car=saab";
        var enc = encodeURIComponent(window.location.href);
        enc = enc.replace(/%26/g,"||");
        datos = enc.split("||"); 
        
        campos = [];
        campos[0] = "transactionState";
        campos[1] = "transactionId";
        campos[2] = "reference_pol";
        campos[3] = "referenceCode";
        campos[4] = "TX_VALUE";
        campos[5] = "currency";
        campos[6] = "processingDate";
        


        quitar = "http://localhost/web/paginaimagen/PortfolioGalleryFiltering/rutas.php?transactionState";
        document.getElementById("transactionState").value = decodeURIComponent(datos[0]).replace(quitar+"=","");


        for(i=1; datos.length> i; i++){
            for(ii=1; campos.length> ii; ii++){
                if(datos[i].search(campos[ii]) == 0){
                    deco = decodeURIComponent(datos[i]);
                    rem = deco.replace(campos[ii]+"=","");
                    document.getElementById(campos[ii]).value = rem;
                }           
            }
        }
    }
</script>

<button onclick="myFunction()">Try it</button>

</body>
</html>
<!--
http://localhost/web/paginaimagen/PortfolioGalleryFiltering/rutas.php?transactionState=ggggffdsety&transactionId=tttttt&reference_pol=yyyy&referenceCode=yyyyyffff&referenceCode=hhhhtty&TX_VALUE=jjjjjj&currency=ppppp&processingDate=ghghgh
-->