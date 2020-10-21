<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Lacak ekspedisi semua ekspedisi">
  <meta name="keywords" content="lacak resi,JNE,JNT,J&T,POS,TIKI,NINJA">
  <meta name="author" content="Hafis Rabbani">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Resi Tracking</title>
</head>

<body style="background-color: rgba(242,242,242,0.5);">
  <h1 class="text-center mb-5 mt-5">Resi Tracking</h1>
  <div class="container" style="background-color: white; height: auto; box-shadow: 0 50px 10px rgba(38,38,38 0.5) !important; border-radius: 20px;">
    <div class="row justify-content-center">
      <div class="col-10">
        <form action="" method="get">
          <div class="form-group pt-5">
            <label for="exampleFormControlInput1">Nomor Resi</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex : JBxxxxxxxxxx" name="resi">
          </div>
          <div class="form-group pt-3">
            <label for="exampleFormControlSelect1">Kurir</label>
            <select class="form-control" id="exampleFormControlSelect1" name="kurir">
              <option hidden>&mdash; Pilih Kurir &mdash;</option>
              <option value="jnt">J&T</option>
              <option value="pos">TIKI</option>
              <option value="wahana">Wahana</option>
              <option value="rpx">RPX</option>
              <option value="sap">SICEPAT</option>
              <option value="pcp">PCP</option>
              <option value="jet">JET</option>
              <option value="dst">DST</option>
              <option value="first">FIRST</option>
              <option value="ninja">Ninja</option>
              <option value="lion">Lion</option>
              <option value="rex">REX</option>
              <option value="idl">IDL</option>
            </select>
          </div>
          <div class="form-group pt-3">
            <button type="submit" class="btn btn-primary" name="submit" id="lacak">Lacak!</button>
          </div>
        </form>
        <?php if (isset($_GET['submit'])) : ?>
          <?php include 'load.php'; ?>
        <?php else : ?>

        <?php endif; ?>
      </div>
    </div>
  </div>
  </div>
  <div class="text-center" style="background-color: rgba(38,38,38 0.5); height:75px;">
    <p class="pt-3">Made by Ade Hafis Rabbani | <a href="https://hafisrabbani.my.id">hafisrabbani.my.id</a></p>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>

  </script>
</body>

</html>