<?php
include('conection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="temp.php">
          <div class="modal-body">
        <label for="name">name</label>
        <input type="text" id="nedit">
        </div>
        <div>
            <label for="">address</label>
            <input type="text" id="aedit">
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
    </div>
  </div>
</div>
    <div>
        <table class="table" id="myTable">

            <tr>
                <th>sno</th>
                <th>name</th>
                <th>address</th>
                <th>Action</th>
            </tr>
            <?php
//$sql="select * from test";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    ?>
    </div><br>
    <nav>
        <tr>
            <th><?php echo $row['sno'];?></th>
            <th><?php echo $row['name'];?></th>
            <th><?php echo $row['address'];?></th>
            <th><button>edit</button></th>
        </tr>
    </nav>
    <?php } ?>
    </table>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            
    });
  </script>
    <script>
        edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        address = tr.getElementsByTagName("td")[1].innerText;
        console.log(name, address);
        nedit.value = title;
        aedit.value = address;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
    </script>
</body>
</html>