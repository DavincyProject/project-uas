<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title> Cetak Tiket </title>
   <meta name="robots" content="noindex,nofollow" />
   <meta name="viewport" content="width=device-width; initial-scale=1.0;" />
   <!-- Header -->
   <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
      <tbody>
         <tr>
            <td>
               <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                  <tbody>
                     <tr>
                        <td style="font-size: 25px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                           <span style="font-size: 25px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">E-tiket</span>
                           <br>
                           <br>Tick.ID
                        </td>
                     </tr>
                     <tr>
                        <p style="font-size: 15px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                           Halo, <?= $user->nama_users ?>!
                           <br>Berikut Detail E-Tiket anda.
                        </p>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- Detail Wisata-->
   <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
      <tbody>
         <tr>
            <th style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;" width="52%" align="left">
               Destinasi Wisata
            </th>
            <th style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
               <small>Keberangkatan</small>
            </th>
            <th style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="center">
               Kedatangan
            </th>
         </tr>
         <tr>
            <td height="1" style="background: #bebebe;" colspan="4"></td>
         </tr>
         <tr>
            <td height="10" colspan="4"></td>
         </tr>
         <tr>
            <td style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
               <?= $pesan->nama_wisata ?>
            </td>
            <td style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
               <small><?= $pesan->tgl_berangkat ?></small>
            </td>
            <td style="font-size: 18px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center">
               <?= $pesan->tgl_datang ?>
            </td>
         </tr>
         <tr>
            <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
         </tr>
      </tbody>
   </table>
   <!-- Tabel tiket -->
   <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
      <tbody>
         <br>
         <tr>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
               Tiket Anak - Anak :
            </td>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
               <?= $pesan->qty_anak ?>
            </td>
         </tr>
         <tr>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
               Tiket Dewasa :
            </td>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
               <?= $pesan->qty_dewasa ?>
            </td>
         </tr>
         <tr>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
               <strong>Total Harga : </strong>
            </td>
            <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
               <strong>Rp. <?= number_format($pesan->total, 0, ',', '.'); ?></strong>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- /Footer -->
   <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
      <tbody>
         <tr>
            <td style="font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
               <br>
               <b>TIDAK PERLU DICETAK.</b>
               <br> <em>Silahkan cetak tiket ini bila diperlukan,
                  kurangi pencetakan tiket untuk membantu melestarikan hutan.
                  Tunjukkan e-tiket saat penukaran atau di pintu masuk via pemesanan di Tick.ID.</em>
            </td>
         </tr>
      </tbody>
   </table>
   </body>

</html>