
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>printable Page</title>

    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>

</head>
<body>
    <form id="form1" runat="server">
    <div id="printablediv">
        
<?php 

include('../connection.php');
@$rids=$_REQUEST['rid'];
$s=$_REQUEST['rid'];

$Result=mysqli_query( $conn,"select * from reports where rid=$rids");
				 if($Result){
					echo"<table border='1' align='center'>";
				  while($row=mysqli_fetch_array($Result))
				  {

					echo '<tr><td align="center"><b><u>date</u></b></td></tr>
						<tr><td align="center">'.$row["dates"].'</td></tr>
						<tr><td align="center"><b><u>planned activities</u></b></td></tr>
                          <tr><td align="center">'.$row["planact"].'</td></tr>
                          <tr><td align="center"><b><u>done activities</u></b></td></tr>
                          <tr><td>'.$row["doneact"].'</td></tr>
                          <tr><td align="center"><b><u>no done activities</u></b></td></tr>
                          <tr><td>'.$row["nodoneact"].'</td></tr>
                          <tr><td align="center"><b><u>no planned activities</u></b></td></tr>
                          <tr><td>'.$row["noplanact"].'</td></tr>
                          <tr><td align="center"><b><u>problems</u></b></td></tr>
                          <tr><td>'.$row["prob"].'</td></tr>
                          <tr><td align="center"><b><u>suggestions</u></b></td></tr>
                          <tr><td>'.$row["sugg"].'</td></tr>
                          <tr><td align="center"><b><u>observation</u></b></td></tr>
                          <tr><td>'.$row["observ"].'</td></tr>
                          <tr><td align="center"><b><u>done by:</u></b></td></tr>
                          <tr><td align="center">'.$row["worker"].'</td></tr>
                          <tr><td align="center"><b><u>post</u></b></td></tr>
                          <tr><td align="center">'.$row["post"].'</td></tr>
                          <tr><td align="center"><b><u>comments</u></b></td></tr>
                          <tr><td>'.$row["comment"].'</td></tr>';
                          
                   
                   // echo  '<td align="center"><p><button class="btn btn-primary">Edit</button><a href="delete3.php?del='.$row["rid"].'" class="btn btn-danger">Delete</a></p>
                     
				   
				   
					  

}


echo"</table>";

						}




 ?>




    </div>
    <div id="donotprintdiv">
        
    </div>
    <center><input type="button" value="Print" onclick="javascript:printDiv('printablediv')" /><br>
  <a href='dispwreport.php'>back</a>
    </form>
</body>
</html>