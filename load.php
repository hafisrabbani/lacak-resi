<?php
$resi = $_GET['resi'];
$kurir = $_GET['kurir'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.i-tech.id/tools/resi?key=GfXP7a-GN6LPV-jOMwxN-04w9uE-PUVrVo&kurir=$kurir&resi=$resi");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$key = json_decode($output, true);
$informasi_resi = $key['query'];
$informasi_kurir = $key['result']['summary'];
$status_resi = $key['status']['code'];
$jejak = $key['result']['manifest'];
?>



<?php if ($status_resi == 200) : ?>
  <div class="hasil pt-5 pb-5" style="border: 2px solid #eaeaea; border-radius: 15px;">
    <div class="container">
      <p class="h4">Hasil : </p>
      <div class="pt-4">
        <p><strong>Nomor Resi : </strong><?= $informasi_resi['waybill']; ?></p>
        <p><strong>Kurir : </strong><?= $informasi_kurir['courier_name']; ?></p>
        <?php foreach ($jejak as $jejaks) : ?>
          <div class="pb-4">
            <p class="text-center" style="font-weight:bold;"><?= $jejaks['manifest_description']; ?></p>
            <p class="text-center"><?= $jejaks['manifest_date']; ?></p>
            <p class="text-center"><?= $jejaks['manifest_time']; ?></p>
            <p class="text-center"><?= $jejaks['city_name']; ?></p>
            <hr style="width: 80%; border: 1px solid #aeaeae;">
          </div>
        <?php endforeach;  ?>
      </div>
    </div>
  <?php else : ?>
    <p>Resi Tidak Ditemukan</p>
  <?php endif; ?>