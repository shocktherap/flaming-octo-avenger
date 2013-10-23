<?php
 $n = 2;
 $data1 = array();
 $data2 = array();

$data1[] = 1;
$data1[] = 2;

$data2[] = 0.5;
$data2[] = 1;


 print_r($data1);
 print_r($data2);

	$data5 = array();
      $data5[] = ($data1[0]*$data1[0])+($data1[1]*$data2[0]);
      $data5[] = ($data1[0]*$data1[1])+($data1[1]*$data2[1]);

      $data6 = array();
      $data6[] = ($data2[0]*$data1[0])+($data2[1]*$data2[0]);
      $data6[] = ($data2[0]*$data1[1])+($data2[1]*$data2[1]);
	
print_r($data5);
print_r($data6);

      // menghitung total data matrik kedua
      $totaldata1 = $data5[0]+$data5[1];
      // menghitung total data matrik ketiga
      $totaldata2 = $data6[0]+$data6[1];
      // menghitung total ketiga matrik
      $sumtotal = $totaldata1+$totaldata2;

      $eigenvector1 = $totaldata1/$sumtotal;
      // eigenvector kedua
      $eigenvector2 = $totaldata2/$sumtotal;
      // Total eigenvector, total haruslah 1
      $totaleigenvector1 = $eigenvector1+$eigenvector2;

      $data9 = array();
      $data9[] = ($data5[0]*$data5[0])+($data5[1]*$data6[0]);
      $data9[] = ($data5[0]*$data5[1])+($data5[1]*$data6[1]);

      $data10 = array();
      $data10[] = ($data6[0]*$data5[0])+($data6[1]*$data6[0]);
      $data10[] = ($data6[0]*$data5[1])+($data6[1]*$data6[1]);

      $totaldata5 = $data9[0]+$data9[1];
      // menghitung total data matrik kedua
      $totaldata6 = $data10[0]+$data10[1];
      // menghitung total data matrik ketiga
      // menghitung total ketiga matrik
      $sumtotal2 = $totaldata5+$totaldata6;
      
      // eigenvector pertama
      $eigenvector5 = $totaldata5/$sumtotal2;
      // eigenvector pertama
      $eigenvector6 = $totaldata6/$sumtotal2;
      // eigenvector pertama
      // Total eigenvector, total haruslah 1
      $totaleigenvector2 = $eigenvector5+$eigenvector6;
      
      // // perbedaan eigenvector, jika perubahan yang terjadi kecil maka nilai eigenvector 1 telah tepat.
      $hasil1 = $eigenvector5-$eigenvector1;
      $hasil2 = $eigenvector6-$eigenvector2;

      $dataeigenvector[0]=$eigenvector1; 
      $dataeigenvector[1]=$eigenvector2; 

      $prioritas = array();
      define ("n", 2);
      $A = array($eigenvector1,$eigenvector2);
      // echo "<h1>Sebelum di-sort</h1>";
      for ($I=0; $I <= n-1; $I++)
       echo "$A[$I] ";
      $K=0;
      while($K<=n-2)
      {
       $I=0;
       while($I<=n-2 - $K)
       {
        if ($A[$I] < $A[$I+1])
        {
         $X = $A[$I];
         $A[$I] = $A[$I+1];
         $A[$I+1] = $X;
        }
        $I++;
       }
       $K++;
      }
      // echo "<h1>Sesudah di-sort</h1>";
      for ($I=0; $I<= n-1; $I++){
      $prioritas[] = $A[$I];
      // echo "$A[$I]</br>";
      }
?>

      <table border="3">
            <?php             
            for ($i=0; $i < $n; $i++) { ?>
            <tr>
                  <td><?="prioritas ".($i+1);?>
                  </td>
                  <td><?=$prioritas[$i];?>
                  </td>
            </tr>
            <?php }?>
      </table>
      <?php
      $vektorsum1 = array();
      $vektorsum1[] = $eigenvector1*$data1[0];
      $vektorsum1[] = $eigenvector2*$data1[1];

      $vektorsum2 = array();
      $vektorsum2[] = $eigenvector1*$data2[0];
      $vektorsum2[] = $eigenvector2*$data2[1];


      $jumlahvektorsum1 = $vektorsum1[0]+$vektorsum1[1];
      $jumlahvektorsum2 = $vektorsum2[0]+$vektorsum2[1];

      $vk1 = $jumlahvektorsum1/$eigenvector1;
      $vk2 = $jumlahvektorsum2/$eigenvector2;

      echo "lambda : ".$lambda = ($vk1+$vk2)/$n;
      echo "IK : ".$indekskonsistensi = ($lambda - $n)/($n-1);
      // 4. perhitungan Rasio Konsistensi

      $ir = $this->ahp->indeksrandom($n);
      echo "rasio konsistensi : ".$rasiokonsistensi = $indekskonsistensi/$ir;
      $persenrasiokonsistensi = $rasiokonsistensi*100;
      if ($persenrasiokonsistensi <= 10) {
            echo "penilaian konsistensi Benar";
      } else {
           echo "penilaian Konsistensi salah";
      }
      ?>