<?php
      // a/a = 1/1
      // b/a = 1/4
      // c/a = 1/2

      // a/b = 4/1
      // b/b = 1/1
      // c/b = 3/1

      // a/c = 2/1
      // b/c = 1/3
      // c/c = 1/1
      // 0/0 0/1 0/2
      // 0/1 1/1 1/2
      // 0/2 1/2 2/2

      // penghitungan AHP dari http://id.scribd.com/doc/2908406/Modul-6-Analytic-Hierarchy-Process
      // penentuan nilai
      // array pertama
      
      $data1 = array();
      $data1[] = 1/0;
      $data1[] = 1/2;
      $data1[] = 3/1;
      print_r($data1);
      echo "</br>";
      // array kedua
      $data2 = array();
      $data2[] = 2/1;
      $data2[] = 0/1;
      $data2[] = 4/1;
      print_r($data2);
      echo "</br>";
      // array ketiga
      $data3 = array();
      $data3[] = 1/3;
      $data3[] = 1/4;
      $data3[] = 1/0;
      print_r($data3);
      echo "</br>";
      // pengkuadratan matriks pertama      
      $data4 = array();
      $data4[] = ($data1[0]*$data1[0])+($data1[1]*$data2[0])+($data1[2]*$data3[0]);
      $data4[] = ($data1[0]*$data1[1])+($data1[1]*$data2[1])+($data1[2]*$data3[1]);
      $data4[] = ($data1[0]*$data1[2])+($data1[1]*$data2[2])+($data1[2]*$data3[2]);
      // pengkuadratan matriks kedua
      $data5 = array();
      $data5[] = ($data2[0]*$data1[0])+($data2[1]*$data2[0])+($data2[2]*$data3[0]);
      $data5[] = ($data2[0]*$data1[1])+($data2[1]*$data2[1])+($data2[2]*$data3[1]);
      $data5[] = ($data2[0]*$data1[2])+($data2[1]*$data2[2])+($data2[2]*$data3[2]);
      // pengkuadratan matriks ketiga
      $data6 = array();
      $data6[] = ($data3[0]*$data1[0])+($data3[1]*$data2[0])+($data3[2]*$data3[0]);
      $data6[] = ($data3[0]*$data1[1])+($data3[1]*$data2[1])+($data3[2]*$data3[1]);
      $data6[] = ($data3[0]*$data1[2])+($data3[1]*$data2[2])+($data3[2]*$data3[2]);
      
      // menghitung total data matrik pertama
      $totaldata4 = $data4[0]+$data4[1]+$data4[2];
      // menghitung total data matrik kedua
      $totaldata5 = $data5[0]+$data5[1]+$data5[2];
      // menghitung total data matrik ketiga
      $totaldata6 = $data6[0]+$data6[1]+$data6[2];
      // menghitung total ketiga matrik
      $sumtotal = $totaldata4+$totaldata5+$totaldata6;
      
      // eigenvector pertama
      $eigenvector1 = $totaldata4/$sumtotal;
      // eigenvector kedua
      $eigenvector2 = $totaldata5/$sumtotal;
      // eigenvector ketiga
      $eigenvector3 = $totaldata6/$sumtotal;
      // Total eigenvector, total haruslah 1
      $totaleigenvector1 = $eigenvector1+$eigenvector2+$eigenvector3;
      
      ?>
      </br>
      <!-- perhitungan dari matriks pertama -->
      Perhitungan Pertama :
      <table border="1">
            <thead>
                  <tr>
                        <td></td>
                        <td>Array 1</td>
                        <td>Array 2</td>
                        <td>Array 3</td>
                        <td>Jumlah Matriks</td>
                        <td>eigenvector</td>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>Array 1</td>
                        <td><?=$data4[0];?></td>
                        <td><?=$data4[1];?></td>
                        <td><?=$data4[2];?></td>
                        <td><?=$totaldata4;?></td>
                        <td><?=$eigenvector1;?></td>
                  </tr>
                  <tr>
                        <td>Array 2</td>
                        <td><?=$data5[0];?></td>
                        <td><?=$data5[1];?></td>
                        <td><?=$data5[2];?></td>
                        <td><?=$totaldata5;?></td>
                        <td><?=$eigenvector2;?></td>
                  </tr>
                  <tr>
                        <td>Array 3</td>
                        <td><?=$data6[0];?></td>
                        <td><?=$data6[1];?></td>
                        <td><?=$data6[2];?></td>
                        <td><?=$totaldata6;?></td>
                        <td><?=$eigenvector3;?></td>
                  </tr>
                  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total data : <?=$sumtotal;?></td>
                        <td>Total Eigenvector : <?=$totaleigenvector1;?></td>
                  </tr>
            </tbody>
      </table>
      <?php
      // pengkuadratan matriks pertama      
      $data7 = array();
      $data7[] = ($data4[0]*$data4[0])+($data4[1]*$data5[0])+($data4[2]*$data6[0]);
      $data7[] = ($data4[0]*$data4[1])+($data4[1]*$data5[1])+($data4[2]*$data6[1]);
      $data7[] = ($data4[0]*$data4[2])+($data4[1]*$data5[2])+($data4[2]*$data6[2]);
      // pengkuadratan matriks kedua      
      $data8 = array();
      $data8[] = ($data5[0]*$data4[0])+($data5[1]*$data5[0])+($data5[2]*$data6[0]);
      $data8[] = ($data5[0]*$data4[1])+($data5[1]*$data5[1])+($data5[2]*$data6[1]);
      $data8[] = ($data5[0]*$data4[2])+($data5[1]*$data5[2])+($data5[2]*$data6[2]);
      // pengkuadratan matriks ketiga
      $data9 = array();
      $data9[] = ($data6[0]*$data4[0])+($data6[1]*$data5[0])+($data6[2]*$data6[0]);
      $data9[] = ($data6[0]*$data4[1])+($data6[1]*$data5[1])+($data6[2]*$data6[1]);
      $data9[] = ($data6[0]*$data4[2])+($data6[1]*$data5[2])+($data6[2]*$data6[2]);
      
      // menghitung total data matrik pertama
      $totaldata7 = $data7[0]+$data7[1]+$data7[2];
      // menghitung total data matrik kedua
      $totaldata8 = $data8[0]+$data8[1]+$data8[2];
      // menghitung total data matrik ketiga
      $totaldata9 = $data9[0]+$data9[1]+$data9[2];
      // menghitung total ketiga matrik
      $sumtotal2 = $totaldata7+$totaldata8+$totaldata9;
      
      // eigenvector pertama
      $eigenvector4 = $totaldata7/$sumtotal2;
      // eigenvector pertama
      $eigenvector5 = $totaldata8/$sumtotal2;
      // eigenvector pertama
      $eigenvector6 = $totaldata9/$sumtotal2;
      // Total eigenvector, total haruslah 1
      $totaleigenvector2 = $eigenvector4+$eigenvector5+$eigenvector6;
      
      // perbedaan eigenvector, jika perubahan yang terjadi kecil maka nilai eigenvector 1 telah tepat.
      $hasil1 = $eigenvector1-$eigenvector4;
      $hasil2 = $eigenvector2-$eigenvector5;
      $hasil3 = $eigenvector3-$eigenvector6;

      ?>
      </br>
      Perhitungan Kedua :
      <table border="1">
            <thead>
                  <tr>
                        <td></td>
                        <td>Array 4</td>
                        <td>Array 5</td>
                        <td>Array 6</td>
                        <td>Jumlah Matriks</td>
                        <td>eigenvector</td>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>Array 4</td>
                        <td><?=$data7[0];?></td>
                        <td><?=$data7[1];?></td>
                        <td><?=$data7[2];?></td>
                        <td><?=$totaldata7;?></td>
                        <td><?=$eigenvector4;?></td>
                  </tr>
                  <tr>
                        <td>Array 5</td>
                        <td><?=$data8[0];?></td>
                        <td><?=$data8[1];?></td>
                        <td><?=$data8[2];?></td>
                        <td><?=$totaldata8;?></td>
                        <td><?=$eigenvector5;?></td>
                  </tr>
                  <tr>
                        <td>Array 6</td>
                        <td><?=$data9[0];?></td>
                        <td><?=$data9[1];?></td>
                        <td><?=$data9[2];?></td>
                        <td><?=$totaldata9;?></td>
                        <td><?=$eigenvector6;?></td>
                  </tr>
                  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total data : <?=$sumtotal2;?></td>
                        <td>Total Eigenvector : <?=$totaleigenvector2;?></td>
                  </tr>
            </tbody>
      </table>
      </br>
      Hasil :</br>
      Hasil Perhitungan Eigenvector1 - Eigenvector4 : <?=$hasil1;?>
      </br>
      Hasil Perhitungan Eigenvector2 - Eigenvector5 : <?=$hasil2;?>
      </br>
      Hasil Perhitungan Eigenvector3 - Eigenvector6 : <?=$hasil3;?>
      </br>
      <p>Hasil perbedaan kedua eigenvector menunjukkan perubahan yang kecil, sehingga nilai eigenvector (1) sudah tepat. Dengan demikian, peringkat kriteria dapat ditentukan berdasarkan nilai eigenvector , sebagai berikut:</p>
      </br>
      <table border="2">
            <tr>
                  <td>Variabel 1</td>
                  <td>Variabel 2</td>
                  <td>Variabel 3</td>
            </tr>
            <tr>
                  <td><?=$eigenvector1;?></td>
                  <td><?=$eigenvector2;?></td>
                  <td><?=$eigenvector3;?></td>
            </tr>
      </table>

      <?php
      $data[0]=$eigenvector1; 
      $data[1]=$eigenvector2; 
      $data[2]=$eigenvector3;
      
      //Sorting bubble ascending
      $prioritas = array();
      define ("n", 3);
      $A = array($eigenvector1,$eigenvector2,$eigenvector3);
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
            $n = 3;
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
      // pembuktian AHP
      // 1. Menentukan vektor jumlah tertimbang (weighted sum vector)
      $vektorsum1 = array();
      $vektorsum1[] = $eigenvector1*$data1[0];
      $vektorsum1[] = $eigenvector2*$data1[1];
      $vektorsum1[] = $eigenvector3*$data1[2];

      $vektorsum2 = array();
      $vektorsum2[] = $eigenvector1*$data2[0];
      $vektorsum2[] = $eigenvector2*$data2[1];
      $vektorsum2[] = $eigenvector3*$data2[2];

      $vektorsum3 = array();
      $vektorsum3[] = $eigenvector1*$data3[0];
      $vektorsum3[] = $eigenvector2*$data3[1];
      $vektorsum3[] = $eigenvector3*$data3[2];

      $jumlahvektorsum1 = $vektorsum1[0]+$vektorsum1[1]+$vektorsum1[2];
      $jumlahvektorsum2 = $vektorsum2[0]+$vektorsum2[1]+$vektorsum2[2];
      $jumlahvektorsum3 = $vektorsum3[0]+$vektorsum3[1]+$vektorsum3[2];

      // 2. Menghitung Vektor Konsistensi (VK)
      $vk1 = $jumlahvektorsum1/$eigenvector1;
      $vk2 = $jumlahvektorsum2/$eigenvector2;
      $vk3 = $jumlahvektorsum3/$eigenvector3;

      //  3. Menghitung Lambda dan Indeks Konsistensi
      $lambda = ($vk1+$vk2+$vk3)/3;
      $indekskonsistensi = ($lambda - 3)/(3-1);
      // 4. perhitungan Rasio Konsistensi
      $n = 3;
      $ir = $this->ahp->indeksrandom($n);
      $rasiokonsistensi = $indekskonsistensi/$ir;
      $persenrasiokonsistensi = $rasiokonsistensi*100;
      if ($persenrasiokonsistensi <= 10) {
            echo "penilaian konsistensi Benar";
      } else {
           echo "penilaian Konsistensi salah";
      }
      // print_r($data1);
      // echo "</br>";
      // print_r($data2);
      // echo "</br>";
      // print_r($data3);
      // echo "</br>";
      // print_r($data4);
      // for ($i=0; $i < 4; $i++) { 
      //   if ($data2[$i] == 0) {
      //      unset($data2);

      //   }
      // }
      // echo "++++++++++++++++++++++++";
      // echo "</br>";
      // print_r($data1);
      // echo "</br>";
      // if ($data2 == null) {
      //   echo "kosong data2";
      // }
      // echo "</br>";
      // print_r($data3);
      // echo "</br>";
      // print_r($data4);

      ?>