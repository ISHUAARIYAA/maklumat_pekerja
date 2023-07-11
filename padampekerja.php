<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="add.php" method="post">


        <h2 class="btn">DELETE</h2>
        <?php if  (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <br>

<?php
include "conn.php";
$id = $_GET['delete_id'];
$result = mysqli_query($con,"DELETE FROM info_pekerja WHERE ID='$id'");
if($result==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>
<br>


<button class="btn1"><a href="add.php"></a> BACK</button>

</form>
</body>
</html>
