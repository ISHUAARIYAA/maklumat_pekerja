<?php
include "conn.php";
?>
<div>
  <div class="mb-5" ><h1 class="ROW1">ANISHOLDINGS.SDN.BHD</h1></div>

    <a class="p-3" href="tambahpekerja.php">Add</a>
    <a href="index.php" class="btn btn-success btn-sm">Logout</a>
	<link rel="stylesheet" href="style.css">
</div>
<center><h3 class="text-white">SENARAI PEKERJA</h3></center>
<div class="table ">
  <div class=" table">
        <table border=2>
          <thead>
            <tr>
              <th scope="col">
                ID
              </th>
              <th scope="col">
              NAMA PEKERJA
              </th>
              <th scope="col" >
                NO KP
              </th>
              <th scope="col" >
                NO HP
              </th>
              <th scope="col">
                JANTINA
              </th><br><br>
             
            </tr>
          </thead>
          <tbody>
            <?php
            $data = mysqli_query($con, "SELECT * FROM info_pekerja");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr>
              <td>
                <?php echo $info["id"]; ?>
              </td>
              <td>
                <?php echo $info["nama_pekerja"]; ?>
              </td>
              <td>
              <?php echo $info["no_kp"]; ?>
              </td>
              <td>
              <?php echo $info["no_hp"]; ?>
              </td>
              <td>
                <?php echo $info["jantina"]; ?>
              <br></td><br>
              <td>
              <div>
           
                <button type="button"><a href="kemaskinipekerja.php?update_id=<?php echo $info["id"]; ?>">UPDATE</a></button>
    <div>
                <button type="button"><a href="padampekerja.php?delete_id=<?php echo $info["id"]; ?>">DELETE</a></button><br><br>
            </div>
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
<?php } ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>