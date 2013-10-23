<?php
 $n = 4;
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();

$data1[] = 1;
$data1[] = 2.36;
$data1[] = 2.91;
$data1[] = 3.71;

$data2[] = 0.42;
$data2[] = 1;
$data2[] = 2.4;
$data2[] = 2.28;

$data3[] = 0.34;
$data3[] = 0.41;
$data3[] = 1;
$data3[] = 0.51;

$data4[] = 0.26;
$data4[] = 0.43;
$data4[] = 1.92;
$data4[] = 1;

 print_r($data1);
 print_r($data2);
 print_r($data3);
 print_r($data4);

	$data5 = array();
      $data5[] = ($data1[0]*$data1[0])+($data1[1]*$data2[0])+($data1[2]*$data3[0])+($data1[3]*$data4[0]);
      $data5[] = ($data1[0]*$data1[1])+($data1[1]*$data2[1])+($data1[2]*$data3[1])+($data1[3]*$data4[1]);
      $data5[] = ($data1[0]*$data1[2])+($data1[1]*$data2[2])+($data1[2]*$data3[2])+($data1[3]*$data4[2]);
      $data5[] = ($data1[0]*$data1[2])+($data1[1]*$data2[2])+($data1[2]*$data3[2])+($data1[3]*$data4[3]);

      $data6 = array();
      $data6[] = ($data2[0]*$data1[0])+($data2[1]*$data2[0])+($data2[2]*$data3[0])+($data2[3]*$data4[0]);
      $data6[] = ($data2[0]*$data1[1])+($data2[1]*$data2[1])+($data2[2]*$data3[1])+($data2[3]*$data4[1]);
      $data6[] = ($data2[0]*$data1[2])+($data2[1]*$data2[2])+($data2[2]*$data3[2])+($data2[3]*$data4[2]);
      $data6[] = ($data2[0]*$data1[2])+($data2[1]*$data2[2])+($data2[2]*$data3[2])+($data2[3]*$data4[3]);

      $data7 = array();
      $data7[] = ($data3[0]*$data1[0])+($data3[1]*$data2[0])+($data3[2]*$data3[0])+($data3[3]*$data4[0]);
      $data7[] = ($data3[0]*$data1[1])+($data3[1]*$data2[1])+($data3[2]*$data3[1])+($data3[3]*$data4[1]);
      $data7[] = ($data3[0]*$data1[2])+($data3[1]*$data2[2])+($data3[2]*$data3[2])+($data3[3]*$data4[2]);
      $data7[] = ($data3[0]*$data1[2])+($data3[1]*$data2[2])+($data3[2]*$data3[2])+($data3[3]*$data4[3]);

      $data8 = array();
      $data8[] = ($data4[0]*$data1[0])+($data4[1]*$data2[0])+($data4[2]*$data3[0])+($data4[3]*$data4[0]);
      $data8[] = ($data4[0]*$data1[1])+($data4[1]*$data2[1])+($data4[2]*$data3[1])+($data4[3]*$data4[1]);
      $data8[] = ($data4[0]*$data1[2])+($data4[1]*$data2[2])+($data4[2]*$data3[2])+($data4[3]*$data4[2]);
      $data8[] = ($data4[0]*$data1[2])+($data4[1]*$data2[2])+($data4[2]*$data3[2])+($data4[3]*$data4[3]);
	
print_r($data5);
print_r($data6);
print_r($data7);
print_r($data8);

      // menghitung total data matrik kedua
      $totaldata1 = $data5[0]+$data5[1]+$data5[2]+$data5[3];
      // menghitung total data matrik ketiga
      $totaldata2 = $data6[0]+$data6[1]+$data6[2]+$data6[3];
      // menghitung total ketiga matrik
      $totaldata3 = $data7[0]+$data7[1]+$data7[2]+$data7[3];
      $totaldata4 = $data8[0]+$data8[1]+$data8[2]+$data8[3];
      $sumtotal = $totaldata1+$totaldata2+$totaldata3+$totaldata4;

      $eigenvector1 = $totaldata1/$sumtotal;
      $eigenvector2 = $totaldata2/$sumtotal;
      $eigenvector3 = $totaldata3/$sumtotal;
      $eigenvector4 = $totaldata4/$sumtotal;
      
      // Total eigenvector, total haruslah 1
      $totaleigenvector1 = $eigenvector1+$eigenvector2+$eigenvector3+$eigenvector4;

      $data9 = array();
      $data9[] = ($data5[0]*$data5[0])+($data5[1]*$data6[0])+($data5[2]*$data7[0])+($data5[3]*$data8[0]);
      $data9[] = ($data5[0]*$data5[1])+($data5[1]*$data6[1])+($data5[2]*$data7[1])+($data5[3]*$data8[1]);
      $data9[] = ($data5[0]*$data5[2])+($data5[1]*$data6[2])+($data5[2]*$data7[2])+($data5[3]*$data8[2]);
      $data9[] = ($data5[0]*$data5[2])+($data5[1]*$data6[2])+($data5[2]*$data7[2])+($data5[3]*$data8[3]);

      $data10 = array();
      $data10[] = ($data6[0]*$data5[0])+($data6[1]*$data6[0])+($data6[2]*$data7[0])+($data6[3]*$data8[0]);
      $data10[] = ($data6[0]*$data5[1])+($data6[1]*$data6[1])+($data6[2]*$data7[1])+($data6[3]*$data8[1]);
      $data10[] = ($data6[0]*$data5[2])+($data6[1]*$data6[2])+($data6[2]*$data7[2])+($data6[3]*$data8[2]);
      $data10[] = ($data6[0]*$data5[2])+($data6[1]*$data6[2])+($data6[2]*$data7[2])+($data6[3]*$data8[3]);

      $data11 = array();
      $data11[] = ($data7[0]*$data5[0])+($data7[1]*$data6[0])+($data7[2]*$data7[0])+($data7[3]*$data8[0]);
      $data11[] = ($data7[0]*$data5[1])+($data7[1]*$data6[1])+($data7[2]*$data7[1])+($data7[3]*$data8[1]);
      $data11[] = ($data7[0]*$data5[2])+($data7[1]*$data6[2])+($data7[2]*$data7[2])+($data7[3]*$data8[2]);
      $data11[] = ($data7[0]*$data5[2])+($data7[1]*$data6[2])+($data7[2]*$data7[2])+($data7[3]*$data8[3]);

      $data12 = array();
      $data12[] = ($data8[0]*$data5[0])+($data8[1]*$data6[0])+($data8[2]*$data7[0])+($data8[3]*$data8[0]);
      $data12[] = ($data8[0]*$data5[1])+($data8[1]*$data6[1])+($data8[2]*$data7[1])+($data8[3]*$data8[1]);
      $data12[] = ($data8[0]*$data5[2])+($data8[1]*$data6[2])+($data8[2]*$data7[2])+($data8[3]*$data8[2]);
      $data12[] = ($data8[0]*$data5[2])+($data8[1]*$data6[2])+($data8[2]*$data7[2])+($data8[3]*$data8[3]);

      $totaldata5 = $data9[0]+$data9[1]+$data9[2]+$data9[3];
      // menghitung total data matrik kedua
      $totaldata6 = $data10[0]+$data10[1]+$data10[2]+$data10[3];
      // menghitung total data matrik ketiga
      $totaldata7 = $data11[0]+$data10[1]+$data11[2]+$data11[3];
      $totaldata8 = $data12[0]+$data10[1]+$data12[2]+$data12[3];
      // menghitung total ketiga matrik
      $sumtotal2 = $totaldata5+$totaldata6+$totaldata7+$totaldata8;
      
      // eigenvector pertama
      $eigenvector5 = $totaldata5/$sumtotal2;
      // eigenvector pertama
      $eigenvector6 = $totaldata6/$sumtotal2;
      // eigenvector pertama
      $eigenvector7 = $totaldata7/$sumtotal2;
      $eigenvector8 = $totaldata8/$sumtotal2;
      // Total eigenvector, total haruslah 1
      $totaleigenvector2 = $eigenvector5+$eigenvector6+$eigenvector7+$eigenvector8;
      
      // // perbedaan eigenvector, jika perubahan yang terjadi kecil maka nilai eigenvector 1 telah tepat.
      $hasil1 = $eigenvector5-$eigenvector1;
      $hasil2 = $eigenvector6-$eigenvector2;
      $hasil3 = $eigenvector7-$eigenvector3;
      $hasil3 = $eigenvector8-$eigenvector4;

      $dataeigenvector[0]=$eigenvector1; 
      $dataeigenvector[1]=$eigenvector2; 
      $dataeigenvector[2]=$eigenvector3;
      $dataeigenvector[3]=$eigenvector4;

      $prioritas = array();
      define ("n", 4);
      $A = array($eigenvector1,$eigenvector2,$eigenvector3, $eigenvector4);
      // echo "<h1>Sebelum di-sort</h1>";
      for ($I=0; $I <= n-1; $I++)
       echo "</br>$A[$I]</br>";
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
                  <td>
                  </td>
            </tr>
            <?php }?>
      </table>
      <?php
      $vektorsum1 = array();
      $vektorsum1[] = $eigenvector1*$data1[0];
      $vektorsum1[] = $eigenvector2*$data1[1];
      $vektorsum1[] = $eigenvector3*$data1[2];
      $vektorsum1[] = $eigenvector4*$data1[3];

      $vektorsum2 = array();
      $vektorsum2[] = $eigenvector1*$data2[0];
      $vektorsum2[] = $eigenvector2*$data2[1];
      $vektorsum2[] = $eigenvector3*$data2[2];
      $vektorsum2[] = $eigenvector4*$data2[3];

      $vektorsum3 = array();
      $vektorsum3[] = $eigenvector1*$data3[0];
      $vektorsum3[] = $eigenvector2*$data3[1];
      $vektorsum3[] = $eigenvector3*$data3[2];
      $vektorsum3[] = $eigenvector4*$data3[3];

      $vektorsum4 = array();
      $vektorsum4[] = $eigenvector1*$data4[0];
      $vektorsum4[] = $eigenvector2*$data4[1];
      $vektorsum4[] = $eigenvector3*$data4[2];
      $vektorsum4[] = $eigenvector4*$data4[3];

      $jumlahvektorsum1 = $vektorsum1[0]+$vektorsum1[1]+$vektorsum1[2]+$vektorsum1[3];
      $jumlahvektorsum2 = $vektorsum2[0]+$vektorsum2[1]+$vektorsum2[2]+$vektorsum2[3];
      $jumlahvektorsum3 = $vektorsum3[0]+$vektorsum3[1]+$vektorsum3[2]+$vektorsum3[3];
      $jumlahvektorsum4 = $vektorsum4[0]+$vektorsum4[1]+$vektorsum4[2]+$vektorsum4[3];

      $vk1 = $jumlahvektorsum1/$eigenvector1;
      $vk2 = $jumlahvektorsum2/$eigenvector2;
      $vk3 = $jumlahvektorsum3/$eigenvector3;
      $vk4 = $jumlahvektorsum4/$eigenvector4;

      echo $lambda = ($vk1+$vk2+$vk3+$vk4)/$n;
      $indekskonsistensi = ($lambda - $n)/($n-1);
      // 4. perhitungan Rasio Konsistensi

      $ir = $this->ahp->indeksrandom($n);
      $rasiokonsistensi = $indekskonsistensi/$ir;
      $persenrasiokonsistensi = $rasiokonsistensi*100;
      if ($persenrasiokonsistensi <= 10) {
            echo "penilaian konsistensi Benar";
      } else {
           echo "penilaian Konsistensi salah";
      }
      ?>