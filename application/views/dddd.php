<?php
 $n = 7;
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $data5 = array();
 $data6 = array();
 $data7 = array();


$data1[] = 1;
$data1[] = 9;
$data1[] = 5;
$data1[] = 2;
$data1[] = 1;
$data1[] = 1;
$data1[] = 1/2;

$data2[] = 1/9;
$data2[] = 1;
$data2[] = 1/3;
$data2[] = 1/9;
$data2[] = 1/9;
$data2[] = 1/9;
$data2[] = 1/9;

$data3[] = 1/5;
$data3[] = 2;
$data3[] = 1;
$data3[] = 1/3;
$data3[] = 1/4;
$data3[] = 1/3;
$data3[] = 1/9;

$data4[] = 1/2;
$data4[] = 9;
$data4[] = 3;
$data4[] = 1;
$data4[] = 1/2;
$data4[] = 1;
$data4[] = 1/3;

$data5[] = 1;
$data5[] = 9;
$data5[] = 4;
$data5[] = 2;
$data5[] = 1;
$data5[] = 2;
$data5[] = 1/2;

$data6[] = 1;
$data6[] = 9;
$data6[] = 3;
$data6[] = 1;
$data6[] = 1/2;
$data6[] = 1;
$data6[] = 1/3;

$data7[] = 2;
$data7[] = 9;
$data7[] = 9;
$data7[] = 3;
$data7[] = 2;
$data7[] = 3;
$data7[] = 1;

 print_r($data1);
 echo "</br>";
 print_r($data2);
 echo "</br>";
 print_r($data3);
 echo "</br>";
 print_r($data4);
 echo "</br>";
 print_r($data5);
 echo "</br>";
 print_r($data6);
 echo "</br>";
 print_r($data7);
 echo "</br>";

      $data8 = array();
      $data8[] = ($data1[0]*$data1[0])+($data1[1]*$data2[0])+($data1[2]*$data3[0])+($data1[3]*$data4[0])+($data1[4]*$data5[0])+($data1[5]*$data6[0])+($data1[6]*$data7[0]);
      $data8[] = ($data1[0]*$data1[1])+($data1[1]*$data2[1])+($data1[2]*$data3[1])+($data1[3]*$data4[1])+($data1[4]*$data5[1])+($data1[5]*$data6[1])+($data1[6]*$data7[1]);
      $data8[] = ($data1[0]*$data1[2])+($data1[1]*$data2[2])+($data1[2]*$data3[2])+($data1[3]*$data4[2])+($data1[4]*$data5[2])+($data1[5]*$data6[2])+($data1[6]*$data7[2]);
      $data8[] = ($data1[0]*$data1[3])+($data1[1]*$data2[3])+($data1[2]*$data3[3])+($data1[3]*$data4[3])+($data1[4]*$data5[3])+($data1[5]*$data6[3])+($data1[6]*$data7[3]);
      $data8[] = ($data1[0]*$data1[4])+($data1[1]*$data2[4])+($data1[2]*$data3[4])+($data1[3]*$data4[4])+($data1[4]*$data5[4])+($data1[5]*$data6[4])+($data1[6]*$data7[4]);
      $data8[] = ($data1[0]*$data1[5])+($data1[1]*$data2[5])+($data1[2]*$data3[5])+($data1[3]*$data4[5])+($data1[4]*$data5[5])+($data1[5]*$data6[5])+($data1[6]*$data7[5]);
      $data8[] = ($data1[0]*$data1[6])+($data1[1]*$data2[6])+($data1[2]*$data3[6])+($data1[3]*$data4[6])+($data1[4]*$data5[6])+($data1[5]*$data6[6])+($data1[6]*$data7[6]);

      $data9 = array();
      $data9[] = ($data2[0]*$data1[0])+($data2[1]*$data2[0])+($data2[2]*$data3[0])+($data2[3]*$data4[0])+($data2[4]*$data5[0])+($data2[5]*$data6[0])+($data2[6]*$data7[0]);
      $data9[] = ($data2[0]*$data1[1])+($data2[1]*$data2[1])+($data2[2]*$data3[1])+($data2[3]*$data4[1])+($data2[4]*$data5[1])+($data2[5]*$data6[1])+($data2[6]*$data7[1]);
      $data9[] = ($data2[0]*$data1[2])+($data2[1]*$data2[2])+($data2[2]*$data3[2])+($data2[3]*$data4[2])+($data2[4]*$data5[2])+($data2[5]*$data6[2])+($data2[6]*$data7[2]);
      $data9[] = ($data2[0]*$data1[3])+($data2[1]*$data2[3])+($data2[2]*$data3[3])+($data2[3]*$data4[3])+($data2[4]*$data5[3])+($data2[5]*$data6[3])+($data2[6]*$data7[3]);
      $data9[] = ($data2[0]*$data1[4])+($data2[1]*$data2[4])+($data2[2]*$data3[4])+($data2[3]*$data4[4])+($data2[4]*$data5[4])+($data2[5]*$data6[4])+($data2[6]*$data7[4]);
      $data9[] = ($data2[0]*$data1[5])+($data2[1]*$data2[5])+($data2[2]*$data3[5])+($data2[3]*$data4[5])+($data2[4]*$data5[5])+($data2[5]*$data6[5])+($data2[6]*$data7[5]);
      $data9[] = ($data2[0]*$data1[6])+($data2[1]*$data2[6])+($data2[2]*$data3[6])+($data2[3]*$data4[6])+($data2[4]*$data5[6])+($data2[5]*$data6[6])+($data2[6]*$data7[6]);
      

      $data10 = array();
      $data10[] = ($data3[0]*$data1[0])+($data3[1]*$data2[0])+($data3[2]*$data3[0])+($data3[3]*$data4[0])+($data3[4]*$data5[0])+($data3[5]*$data6[0])+($data3[6]*$data7[0]);
      $data10[] = ($data3[0]*$data1[1])+($data3[1]*$data2[1])+($data3[2]*$data3[1])+($data3[3]*$data4[1])+($data3[4]*$data5[1])+($data3[5]*$data6[1])+($data3[6]*$data7[1]);
      $data10[] = ($data3[0]*$data1[2])+($data3[1]*$data2[2])+($data3[2]*$data3[2])+($data3[3]*$data4[2])+($data3[4]*$data5[2])+($data3[5]*$data6[2])+($data3[6]*$data7[2]);
      $data10[] = ($data3[0]*$data1[3])+($data3[1]*$data2[3])+($data3[2]*$data3[3])+($data3[3]*$data4[3])+($data3[4]*$data5[3])+($data3[5]*$data6[3])+($data3[6]*$data7[3]);
      $data10[] = ($data3[0]*$data1[4])+($data3[1]*$data2[4])+($data3[2]*$data3[4])+($data3[3]*$data4[4])+($data3[4]*$data5[4])+($data3[5]*$data6[4])+($data3[6]*$data7[4]);
      $data10[] = ($data3[0]*$data1[5])+($data3[1]*$data2[5])+($data3[2]*$data3[5])+($data3[3]*$data4[5])+($data3[4]*$data5[5])+($data3[5]*$data6[5])+($data3[6]*$data7[5]);
      $data10[] = ($data3[0]*$data1[6])+($data3[1]*$data2[6])+($data3[2]*$data3[6])+($data3[3]*$data4[6])+($data3[4]*$data5[6])+($data3[5]*$data6[6])+($data3[6]*$data7[6]);

      $data11 = array();
      $data11[] = ($data4[0]*$data1[0])+($data4[1]*$data2[0])+($data4[2]*$data3[0])+($data4[3]*$data4[0])+($data4[4]*$data5[0])+($data4[5]*$data6[0])+($data4[6]*$data7[0]);
      $data11[] = ($data4[0]*$data1[1])+($data4[1]*$data2[1])+($data4[2]*$data3[1])+($data4[3]*$data4[1])+($data4[4]*$data5[1])+($data4[5]*$data6[1])+($data4[6]*$data7[1]);
      $data11[] = ($data4[0]*$data1[2])+($data4[1]*$data2[2])+($data4[2]*$data3[2])+($data4[3]*$data4[2])+($data4[4]*$data5[2])+($data4[5]*$data6[2])+($data4[6]*$data7[2]);
      $data11[] = ($data4[0]*$data1[3])+($data4[1]*$data2[3])+($data4[2]*$data3[3])+($data4[3]*$data4[3])+($data4[4]*$data5[3])+($data4[5]*$data6[3])+($data4[6]*$data7[3]);
      $data11[] = ($data4[0]*$data1[4])+($data4[1]*$data2[4])+($data4[2]*$data3[4])+($data4[3]*$data4[4])+($data4[4]*$data5[4])+($data4[5]*$data6[4])+($data4[6]*$data7[4]);
      $data11[] = ($data4[0]*$data1[5])+($data4[1]*$data2[5])+($data4[2]*$data3[5])+($data4[3]*$data4[5])+($data4[4]*$data5[5])+($data4[5]*$data6[5])+($data4[6]*$data7[5]);
      $data11[] = ($data4[0]*$data1[6])+($data4[1]*$data2[6])+($data4[2]*$data3[6])+($data4[3]*$data4[6])+($data4[4]*$data5[6])+($data4[5]*$data6[6])+($data4[6]*$data7[6]);
      
      $data12 = array();
      $data12[] = ($data5[0]*$data1[0])+($data5[1]*$data2[0])+($data5[2]*$data3[0])+($data5[3]*$data4[0])+($data5[4]*$data5[0])+($data5[5]*$data6[0])+($data5[6]*$data7[0]);
      $data12[] = ($data5[0]*$data1[1])+($data5[1]*$data2[1])+($data5[2]*$data3[1])+($data5[3]*$data4[1])+($data5[4]*$data5[1])+($data5[5]*$data6[1])+($data5[6]*$data7[1]);
      $data12[] = ($data5[0]*$data1[2])+($data5[1]*$data2[2])+($data5[2]*$data3[2])+($data5[3]*$data4[2])+($data5[4]*$data5[2])+($data5[5]*$data6[2])+($data5[6]*$data7[2]);
      $data12[] = ($data5[0]*$data1[3])+($data5[1]*$data2[3])+($data5[2]*$data3[3])+($data5[3]*$data4[3])+($data5[4]*$data5[3])+($data5[5]*$data6[3])+($data5[6]*$data7[3]);
      $data12[] = ($data5[0]*$data1[4])+($data5[1]*$data2[4])+($data5[2]*$data3[4])+($data5[3]*$data4[4])+($data5[4]*$data5[4])+($data5[5]*$data6[4])+($data5[6]*$data7[4]);
      $data12[] = ($data5[0]*$data1[5])+($data5[1]*$data2[5])+($data5[2]*$data3[5])+($data5[3]*$data4[5])+($data5[4]*$data5[5])+($data5[5]*$data6[5])+($data5[6]*$data7[5]);
      $data12[] = ($data5[0]*$data1[6])+($data5[1]*$data2[6])+($data5[2]*$data3[6])+($data5[3]*$data4[6])+($data5[4]*$data5[6])+($data5[5]*$data6[6])+($data5[6]*$data7[6]);

      $data13 = array();
      $data13[] = ($data6[0]*$data1[0])+($data6[1]*$data2[0])+($data6[2]*$data3[0])+($data6[3]*$data4[0])+($data6[4]*$data5[0])+($data6[5]*$data6[0])+($data6[6]*$data7[0]);
      $data13[] = ($data6[0]*$data1[1])+($data6[1]*$data2[1])+($data6[2]*$data3[1])+($data6[3]*$data4[1])+($data6[4]*$data5[1])+($data6[5]*$data6[1])+($data6[6]*$data7[1]);
      $data13[] = ($data6[0]*$data1[2])+($data6[1]*$data2[2])+($data6[2]*$data3[2])+($data6[3]*$data4[2])+($data6[4]*$data5[2])+($data6[5]*$data6[2])+($data6[6]*$data7[2]);
      $data13[] = ($data6[0]*$data1[3])+($data6[1]*$data2[3])+($data6[2]*$data3[3])+($data6[3]*$data4[3])+($data6[4]*$data5[3])+($data6[5]*$data6[3])+($data6[6]*$data7[3]);
      $data13[] = ($data6[0]*$data1[4])+($data6[1]*$data2[4])+($data6[2]*$data3[4])+($data6[3]*$data4[4])+($data6[4]*$data5[4])+($data6[5]*$data6[4])+($data6[6]*$data7[4]);
      $data13[] = ($data6[0]*$data1[5])+($data6[1]*$data2[5])+($data6[2]*$data3[5])+($data6[3]*$data4[5])+($data6[4]*$data5[5])+($data6[5]*$data6[5])+($data6[6]*$data7[5]);
      $data13[] = ($data6[0]*$data1[6])+($data6[1]*$data2[6])+($data6[2]*$data3[6])+($data6[3]*$data4[6])+($data6[4]*$data5[6])+($data6[5]*$data6[6])+($data6[6]*$data7[6]);

      $data14 = array();
      $data14[] = ($data7[0]*$data1[0])+($data7[1]*$data2[0])+($data7[2]*$data3[0])+($data7[3]*$data4[0])+($data7[4]*$data5[0])+($data7[5]*$data6[0])+($data7[6]*$data7[0]);
      $data14[] = ($data7[0]*$data1[1])+($data7[1]*$data2[1])+($data7[2]*$data3[1])+($data7[3]*$data4[1])+($data7[4]*$data5[1])+($data7[5]*$data6[1])+($data7[6]*$data7[1]);
      $data14[] = ($data7[0]*$data1[2])+($data7[1]*$data2[2])+($data7[2]*$data3[2])+($data7[3]*$data4[2])+($data7[4]*$data5[2])+($data7[5]*$data6[2])+($data7[6]*$data7[2]);
      $data14[] = ($data7[0]*$data1[3])+($data7[1]*$data2[3])+($data7[2]*$data3[3])+($data7[3]*$data4[3])+($data7[4]*$data5[3])+($data7[5]*$data6[3])+($data7[6]*$data7[3]);
      $data14[] = ($data7[0]*$data1[4])+($data7[1]*$data2[4])+($data7[2]*$data3[4])+($data7[3]*$data4[4])+($data7[4]*$data5[4])+($data7[5]*$data6[4])+($data7[6]*$data7[4]);
      $data14[] = ($data7[0]*$data1[5])+($data7[1]*$data2[5])+($data7[2]*$data3[5])+($data7[3]*$data4[5])+($data7[4]*$data5[5])+($data7[5]*$data6[5])+($data7[6]*$data7[5]);
      $data14[] = ($data7[0]*$data1[6])+($data7[1]*$data2[6])+($data7[2]*$data3[6])+($data7[3]*$data4[6])+($data7[4]*$data5[6])+($data7[5]*$data6[6])+($data7[6]*$data7[6]);

      // print_r($data8);
      // print_r($data9);
      // print_r($data10);
      // print_r($data11);
      // print_r($data12);
      // print_r($data13);
      // print_r($data14);

      $totaldata1 = $data8[0]+$data8[1]+$data8[2]+$data8[3]+$data8[4]+$data8[5]+$data8[6];
      // menghitung total data matrik ketiga
      $totaldata2 = $data9[0]+$data9[1]+$data9[2]+$data9[3]+$data9[4]+$data9[5]+$data9[6];
      $totaldata3 = $data10[0]+$data10[1]+$data10[2]+$data10[3]+$data10[4]+$data10[5]+$data10[6];
      $totaldata4 = $data11[0]+$data11[1]+$data11[2]+$data11[3]+$data11[4]+$data11[5]+$data11[6];
      $totaldata5 = $data12[0]+$data12[1]+$data12[2]+$data12[3]+$data12[4]+$data12[5]+$data12[6];
      $totaldata6 = $data13[0]+$data13[1]+$data13[2]+$data13[3]+$data13[4]+$data13[5]+$data13[6];
      $totaldata7 = $data14[0]+$data14[1]+$data14[2]+$data14[3]+$data14[4]+$data14[5]+$data14[6];
      $sumtotal = $totaldata1+$totaldata2+$totaldata3+$totaldata4+$totaldata5+$totaldata6+$totaldata7;

      $eigenvector1 = $totaldata1/$sumtotal;
      // eigenvector kedua
      $eigenvector2 = $totaldata2/$sumtotal;
      // eigenvector ketiga
      $eigenvector3 = $totaldata3/$sumtotal;
      $eigenvector4 = $totaldata4/$sumtotal;
      $eigenvector5 = $totaldata5/$sumtotal;
      // eigenvector ketiga
      $eigenvector6 = $totaldata6/$sumtotal;
      $eigenvector7 = $totaldata7/$sumtotal;
      // Total eigenvector, total haruslah 1
      $totaleigenvector1 = $eigenvector1+$eigenvector2+$eigenvector3+$eigenvector4+$eigenvector5+$eigenvector6+$eigenvector7;

      $data15 = array();
      $data15[] = ($data8[0]*$data8[0])+($data8[1]*$data9[0])+($data8[2]*$data10[0])+($data8[3]*$data11[0])+($data8[4]*$data12[0])+($data8[5]*$data13[0])+($data8[6]*$data14[0]);
      $data15[] = ($data8[0]*$data8[1])+($data8[1]*$data9[1])+($data8[2]*$data10[1])+($data8[3]*$data11[1])+($data8[4]*$data12[1])+($data8[5]*$data13[1])+($data8[6]*$data14[1]);
      $data15[] = ($data8[0]*$data8[2])+($data8[1]*$data9[2])+($data8[2]*$data10[2])+($data8[3]*$data11[2])+($data8[4]*$data12[2])+($data8[5]*$data13[2])+($data8[6]*$data14[2]);
      $data15[] = ($data8[0]*$data8[3])+($data8[1]*$data9[3])+($data8[2]*$data10[3])+($data8[3]*$data11[3])+($data8[4]*$data12[3])+($data8[5]*$data13[3])+($data8[6]*$data14[3]);
      $data15[] = ($data8[0]*$data8[4])+($data8[1]*$data9[4])+($data8[2]*$data10[4])+($data8[3]*$data11[4])+($data8[4]*$data12[4])+($data8[5]*$data13[4])+($data8[6]*$data14[4]);
      $data15[] = ($data8[0]*$data8[5])+($data8[1]*$data9[5])+($data8[2]*$data10[5])+($data8[3]*$data11[5])+($data8[4]*$data12[5])+($data8[5]*$data13[5])+($data8[6]*$data14[5]);
      $data15[] = ($data8[0]*$data8[6])+($data8[1]*$data9[6])+($data8[2]*$data10[6])+($data8[3]*$data11[6])+($data8[4]*$data12[6])+($data8[5]*$data13[6])+($data8[6]*$data14[6]);

      $data16 = array();
      $data16[] = ($data9[0]*$data8[0])+($data9[1]*$data9[0])+($data9[2]*$data10[0])+($data9[3]*$data11[0])+($data9[4]*$data12[0])+($data9[5]*$data13[0])+($data9[6]*$data14[0]);
      $data16[] = ($data9[0]*$data8[1])+($data9[1]*$data9[1])+($data9[2]*$data10[1])+($data9[3]*$data11[1])+($data9[4]*$data12[1])+($data9[5]*$data13[1])+($data9[6]*$data14[1]);
      $data16[] = ($data9[0]*$data8[2])+($data9[1]*$data9[2])+($data9[2]*$data10[2])+($data9[3]*$data11[2])+($data9[4]*$data12[2])+($data9[5]*$data13[2])+($data9[6]*$data14[2]);
      $data16[] = ($data9[0]*$data8[3])+($data9[1]*$data9[3])+($data9[2]*$data10[3])+($data9[3]*$data11[3])+($data9[4]*$data12[3])+($data9[5]*$data13[3])+($data9[6]*$data14[3]);
      $data16[] = ($data9[0]*$data8[4])+($data9[1]*$data9[4])+($data9[2]*$data10[4])+($data9[3]*$data11[4])+($data9[4]*$data12[4])+($data9[5]*$data13[4])+($data9[6]*$data14[4]);
      $data16[] = ($data9[0]*$data8[5])+($data9[1]*$data9[5])+($data9[2]*$data10[5])+($data9[3]*$data11[5])+($data9[4]*$data12[5])+($data9[5]*$data13[5])+($data9[6]*$data14[5]);
      $data16[] = ($data9[0]*$data8[6])+($data9[1]*$data9[6])+($data9[2]*$data10[6])+($data9[3]*$data11[6])+($data9[4]*$data12[6])+($data9[5]*$data13[6])+($data9[6]*$data14[6]);


      $data17 = array();
      $data17[] = ($data10[0]*$data8[0])+($data10[1]*$data9[0])+($data10[2]*$data10[0])+($data10[3]*$data11[0])+($data10[4]*$data12[0])+($data10[5]*$data13[0])+($data10[6]*$data14[0]);
      $data17[] = ($data10[0]*$data8[1])+($data10[1]*$data9[1])+($data10[2]*$data10[1])+($data10[3]*$data11[1])+($data10[4]*$data12[1])+($data10[5]*$data13[1])+($data10[6]*$data14[1]);
      $data17[] = ($data10[0]*$data8[2])+($data10[1]*$data9[2])+($data10[2]*$data10[2])+($data10[3]*$data11[2])+($data10[4]*$data12[2])+($data10[5]*$data13[2])+($data10[6]*$data14[2]);
      $data17[] = ($data10[0]*$data8[3])+($data10[1]*$data9[3])+($data10[2]*$data10[3])+($data10[3]*$data11[3])+($data10[4]*$data12[3])+($data10[5]*$data13[3])+($data10[6]*$data14[3]);
      $data17[] = ($data10[0]*$data8[4])+($data10[1]*$data9[4])+($data10[2]*$data10[4])+($data10[3]*$data11[4])+($data10[4]*$data12[4])+($data10[5]*$data13[4])+($data10[6]*$data14[4]);
      $data17[] = ($data10[0]*$data8[5])+($data10[1]*$data9[5])+($data10[2]*$data10[5])+($data10[3]*$data11[5])+($data10[4]*$data12[5])+($data10[5]*$data13[5])+($data10[6]*$data14[5]);
      $data17[] = ($data10[0]*$data8[6])+($data10[1]*$data9[6])+($data10[2]*$data10[6])+($data10[3]*$data11[6])+($data10[4]*$data12[6])+($data10[5]*$data13[6])+($data10[6]*$data14[6]);
      

      $data18 = array();
      $data18[] = ($data11[0]*$data8[0])+($data11[1]*$data9[0])+($data11[2]*$data10[0])+($data11[3]*$data11[0])+($data11[4]*$data12[0])+($data11[5]*$data13[0])+($data11[6]*$data14[0]);
      $data18[] = ($data11[0]*$data8[1])+($data11[1]*$data9[1])+($data11[2]*$data10[1])+($data11[3]*$data11[1])+($data11[4]*$data12[1])+($data11[5]*$data13[1])+($data11[6]*$data14[1]);
      $data18[] = ($data11[0]*$data8[2])+($data11[1]*$data9[2])+($data11[2]*$data10[2])+($data11[3]*$data11[2])+($data11[4]*$data12[2])+($data11[5]*$data13[2])+($data11[6]*$data14[2]);
      $data18[] = ($data11[0]*$data8[3])+($data11[1]*$data9[3])+($data11[2]*$data10[3])+($data11[3]*$data11[3])+($data11[4]*$data12[3])+($data11[5]*$data13[3])+($data11[6]*$data14[3]);
      $data18[] = ($data11[0]*$data8[4])+($data11[1]*$data9[4])+($data11[2]*$data10[4])+($data11[3]*$data11[4])+($data11[4]*$data12[4])+($data11[5]*$data13[4])+($data11[6]*$data14[4]);
      $data18[] = ($data11[0]*$data8[5])+($data11[1]*$data9[5])+($data11[2]*$data10[5])+($data11[3]*$data11[5])+($data11[4]*$data12[5])+($data11[5]*$data13[5])+($data11[6]*$data14[5]);
      $data18[] = ($data11[0]*$data8[6])+($data11[1]*$data9[6])+($data11[2]*$data10[6])+($data11[3]*$data11[6])+($data11[4]*$data12[6])+($data11[5]*$data13[6])+($data11[6]*$data14[6]);

      $data19 = array();
      $data19[] = ($data12[0]*$data8[0])+($data12[1]*$data9[0])+($data12[2]*$data10[0])+($data12[3]*$data11[0])+($data12[4]*$data12[0])+($data12[5]*$data13[0])+($data12[6]*$data14[0]);
      $data19[] = ($data12[0]*$data8[1])+($data12[1]*$data9[1])+($data12[2]*$data10[1])+($data12[3]*$data11[1])+($data12[4]*$data12[1])+($data12[5]*$data13[1])+($data12[6]*$data14[1]);
      $data19[] = ($data12[0]*$data8[2])+($data12[1]*$data9[2])+($data12[2]*$data10[2])+($data12[3]*$data11[2])+($data12[4]*$data12[2])+($data12[5]*$data13[2])+($data12[6]*$data14[2]);
      $data19[] = ($data12[0]*$data8[3])+($data12[1]*$data9[3])+($data12[2]*$data10[3])+($data12[3]*$data11[3])+($data12[4]*$data12[3])+($data12[5]*$data13[3])+($data12[6]*$data14[3]);
      $data19[] = ($data12[0]*$data8[4])+($data12[1]*$data9[4])+($data12[2]*$data10[4])+($data12[3]*$data11[4])+($data12[4]*$data12[4])+($data12[5]*$data13[4])+($data12[6]*$data14[4]);
      $data19[] = ($data12[0]*$data8[5])+($data12[1]*$data9[5])+($data12[2]*$data10[5])+($data12[3]*$data11[5])+($data12[4]*$data12[5])+($data12[5]*$data13[5])+($data12[6]*$data14[5]);
      $data19[] = ($data12[0]*$data8[6])+($data12[1]*$data9[6])+($data12[2]*$data10[6])+($data12[3]*$data11[6])+($data12[4]*$data12[6])+($data12[5]*$data13[6])+($data12[6]*$data14[6]);

      $data20 = array();
      $data20[] = ($data13[0]*$data8[0])+($data13[1]*$data9[0])+($data13[2]*$data10[0])+($data13[3]*$data11[0])+($data13[4]*$data12[0])+($data13[5]*$data13[0])+($data13[6]*$data14[0]);
      $data20[] = ($data13[0]*$data8[1])+($data13[1]*$data9[1])+($data13[2]*$data10[1])+($data13[3]*$data11[1])+($data13[4]*$data12[1])+($data13[5]*$data13[1])+($data13[6]*$data14[1]);
      $data20[] = ($data13[0]*$data8[2])+($data13[1]*$data9[2])+($data13[2]*$data10[2])+($data13[3]*$data11[2])+($data13[4]*$data12[2])+($data13[5]*$data13[2])+($data13[6]*$data14[2]);
      $data20[] = ($data13[0]*$data8[3])+($data13[1]*$data9[3])+($data13[2]*$data10[3])+($data13[3]*$data11[3])+($data13[4]*$data12[3])+($data13[5]*$data13[3])+($data13[6]*$data14[3]);
      $data20[] = ($data13[0]*$data8[4])+($data13[1]*$data9[4])+($data13[2]*$data10[4])+($data13[3]*$data11[4])+($data13[4]*$data12[4])+($data13[5]*$data13[4])+($data13[6]*$data14[4]);
      $data20[] = ($data13[0]*$data8[5])+($data13[1]*$data9[5])+($data13[2]*$data10[5])+($data13[3]*$data11[5])+($data13[4]*$data12[5])+($data13[5]*$data13[5])+($data13[6]*$data14[5]);
      $data20[] = ($data13[0]*$data8[6])+($data13[1]*$data9[6])+($data13[2]*$data10[6])+($data13[3]*$data11[6])+($data13[4]*$data12[6])+($data13[5]*$data13[6])+($data13[6]*$data14[6]);

      $data21 = array();
      $data21[] = ($data14[0]*$data8[0])+($data14[1]*$data9[0])+($data14[2]*$data10[0])+($data14[3]*$data11[0])+($data14[4]*$data12[0])+($data14[5]*$data13[0])+($data14[6]*$data14[0]);
      $data21[] = ($data14[0]*$data8[1])+($data14[1]*$data9[1])+($data14[2]*$data10[1])+($data14[3]*$data11[1])+($data14[4]*$data12[1])+($data14[5]*$data13[1])+($data14[6]*$data14[1]);
      $data21[] = ($data14[0]*$data8[2])+($data14[1]*$data9[2])+($data14[2]*$data10[2])+($data14[3]*$data11[2])+($data14[4]*$data12[2])+($data14[5]*$data13[2])+($data14[6]*$data14[2]);
      $data21[] = ($data14[0]*$data8[3])+($data14[1]*$data9[3])+($data14[2]*$data10[3])+($data14[3]*$data11[3])+($data14[4]*$data12[3])+($data14[5]*$data13[3])+($data14[6]*$data14[3]);
      $data21[] = ($data14[0]*$data8[4])+($data14[1]*$data9[4])+($data14[2]*$data10[4])+($data14[3]*$data11[4])+($data14[4]*$data12[4])+($data14[5]*$data13[4])+($data14[6]*$data14[4]);
      $data21[] = ($data14[0]*$data8[5])+($data14[1]*$data9[5])+($data14[2]*$data10[5])+($data14[3]*$data11[5])+($data14[4]*$data12[5])+($data14[5]*$data13[5])+($data14[6]*$data14[5]);
      $data21[] = ($data14[0]*$data8[6])+($data14[1]*$data9[6])+($data14[2]*$data10[6])+($data14[3]*$data11[6])+($data14[4]*$data12[6])+($data14[5]*$data13[6])+($data14[6]*$data14[6]);

       $totaldata8 = $data15[0]+$data15[1]+$data15[2]+$data15[3]+$data15[4]+$data15[5]+$data15[6];
      // menghitung total data matrik kedua
      $totaldata9 = $data16[0]+$data16[1]+$data16[2]+$data16[3]+$data16[4]+$data16[5]+$data16[6];
      $totaldata10 = $data17[0]+$data17[1]+$data17[2]+$data17[3]+$data17[4]+$data17[5]+$data17[6];
      $totaldata11 = $data18[0]+$data18[1]+$data18[2]+$data18[3]+$data18[4]+$data18[5]+$data18[6];
      $totaldata12 = $data19[0]+$data19[1]+$data19[2]+$data19[3]+$data19[4]+$data19[5]+$data19[6];
      $totaldata13 = $data20[0]+$data20[1]+$data20[2]+$data20[3]+$data20[4]+$data20[5]+$data20[6];
      $totaldata14 = $data21[0]+$data21[1]+$data21[2]+$data21[3]+$data21[4]+$data21[5]+$data21[6];
      // menghitung total ketiga matrik
      $sumtotal2 = $totaldata8+$totaldata9+$totaldata10+$totaldata11+$totaldata12+$totaldata13+$totaldata14;
      
      // eigenvector pertama
      $eigenvector8 = $totaldata8/$sumtotal2;
      // eigenvector pertama
      $eigenvector9 = $totaldata9/$sumtotal2;
      $eigenvector10 = $totaldata10/$sumtotal2;
      $eigenvector11 = $totaldata11/$sumtotal2;
      $eigenvector12 = $totaldata12/$sumtotal2;
      $eigenvector13 = $totaldata13/$sumtotal2;
      $eigenvector14 = $totaldata14/$sumtotal2;
      // eigenvector pertama
      // Total eigenvector, total haruslah 1
      $totaleigenvector2 = $eigenvector8+$eigenvector9+$eigenvector10+$eigenvector11+$eigenvector12+$eigenvector13+$eigenvector14;

      $hasil1 = $eigenvector8-$eigenvector1;
      $hasil2 = $eigenvector9-$eigenvector2;
      $hasil3 = $eigenvector10-$eigenvector3;
      $hasil4 = $eigenvector11-$eigenvector4;
      $hasil5 = $eigenvector12-$eigenvector5;
      $hasil6 = $eigenvector13-$eigenvector6;
      $hasil7 = $eigenvector14-$eigenvector7;

      $dataeigenvector[0]=$eigenvector1; 
      $dataeigenvector[1]=$eigenvector2; 
      $dataeigenvector[2]=$eigenvector3;
      $dataeigenvector[3]=$eigenvector4;
      $dataeigenvector[4]=$eigenvector5;
      $dataeigenvector[5]=$eigenvector6;
      $dataeigenvector[6]=$eigenvector7;

      $prioritas = array();
      define ("n", 7);
      $A = array($eigenvector1,$eigenvector2,$eigenvector3, $eigenvector4,$eigenvector5,$eigenvector6, $eigenvector7);
      print_r($A);
      // echo "<h1>Sebelum di-sort</h1>";
      for ($I=0; $I <= n-1; $I++)
       // echo "$A[$I] ";
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
      $vektorsum1[] = $eigenvector3*$data1[2];
      $vektorsum1[] = $eigenvector4*$data1[3];
      $vektorsum1[] = $eigenvector5*$data1[3];
      $vektorsum1[] = $eigenvector6*$data1[3];
      $vektorsum1[] = $eigenvector7*$data1[3];

      $vektorsum2 = array();
      $vektorsum2[] = $eigenvector1*$data2[0];
      $vektorsum2[] = $eigenvector2*$data2[1];
      $vektorsum2[] = $eigenvector3*$data2[2];
      $vektorsum2[] = $eigenvector4*$data2[3];
      $vektorsum2[] = $eigenvector5*$data2[3];
      $vektorsum2[] = $eigenvector6*$data2[3];
      $vektorsum2[] = $eigenvector7*$data2[3];

      $vektorsum3 = array();
      $vektorsum3[] = $eigenvector1*$data3[0];
      $vektorsum3[] = $eigenvector2*$data3[1];
      $vektorsum3[] = $eigenvector3*$data3[2];
      $vektorsum3[] = $eigenvector4*$data3[3];
      $vektorsum3[] = $eigenvector5*$data3[3];
      $vektorsum3[] = $eigenvector6*$data3[3];
      $vektorsum3[] = $eigenvector7*$data3[3];

      $vektorsum4 = array();
      $vektorsum4[] = $eigenvector1*$data4[0];
      $vektorsum4[] = $eigenvector2*$data4[1];
      $vektorsum4[] = $eigenvector3*$data4[2];
      $vektorsum4[] = $eigenvector4*$data4[3];
      $vektorsum4[] = $eigenvector5*$data4[3];
      $vektorsum4[] = $eigenvector6*$data4[3];
      $vektorsum4[] = $eigenvector7*$data4[3];

      $vektorsum5 = array();
      $vektorsum5[] = $eigenvector1*$data5[0];
      $vektorsum5[] = $eigenvector2*$data5[1];
      $vektorsum5[] = $eigenvector3*$data5[2];
      $vektorsum5[] = $eigenvector4*$data5[3];
      $vektorsum5[] = $eigenvector5*$data5[3];
      $vektorsum5[] = $eigenvector6*$data5[3];
      $vektorsum5[] = $eigenvector7*$data5[3];

      $vektorsum6 = array();
      $vektorsum6[] = $eigenvector1*$data6[0];
      $vektorsum6[] = $eigenvector2*$data6[1];
      $vektorsum6[] = $eigenvector3*$data6[2];
      $vektorsum6[] = $eigenvector4*$data6[3];
      $vektorsum6[] = $eigenvector5*$data6[3];
      $vektorsum6[] = $eigenvector6*$data6[3];
      $vektorsum6[] = $eigenvector7*$data6[3];

      $vektorsum7 = array();
      $vektorsum7[] = $eigenvector1*$data7[0];
      $vektorsum7[] = $eigenvector2*$data7[1];
      $vektorsum7[] = $eigenvector3*$data7[2];
      $vektorsum7[] = $eigenvector4*$data7[3];
      $vektorsum7[] = $eigenvector5*$data7[3];
      $vektorsum7[] = $eigenvector6*$data7[3];
      $vektorsum7[] = $eigenvector7*$data7[3];

      $jumlahvektorsum1 = $vektorsum1[0]+$vektorsum1[1]+$vektorsum1[2]+$vektorsum1[3]+$vektorsum1[4]+$vektorsum1[5]+$vektorsum1[6];
      $jumlahvektorsum2 = $vektorsum2[0]+$vektorsum2[1]+$vektorsum2[2]+$vektorsum2[3]+$vektorsum2[4]+$vektorsum2[5]+$vektorsum2[6];
      $jumlahvektorsum3 = $vektorsum3[0]+$vektorsum3[1]+$vektorsum3[2]+$vektorsum3[3]+$vektorsum3[4]+$vektorsum3[5]+$vektorsum3[6];
      $jumlahvektorsum4 = $vektorsum4[0]+$vektorsum4[1]+$vektorsum4[2]+$vektorsum4[3]+$vektorsum4[4]+$vektorsum4[5]+$vektorsum4[6];
      $jumlahvektorsum5 = $vektorsum5[0]+$vektorsum5[1]+$vektorsum5[2]+$vektorsum5[3]+$vektorsum5[4]+$vektorsum5[5]+$vektorsum5[6];
      $jumlahvektorsum6 = $vektorsum6[0]+$vektorsum6[1]+$vektorsum6[2]+$vektorsum6[3]+$vektorsum6[4]+$vektorsum6[5]+$vektorsum6[6];
      $jumlahvektorsum7 = $vektorsum7[0]+$vektorsum7[1]+$vektorsum7[2]+$vektorsum7[3]+$vektorsum7[4]+$vektorsum7[5]+$vektorsum7[6];

      $vk1 = $jumlahvektorsum1/$eigenvector1;
      $vk2 = $jumlahvektorsum2/$eigenvector2;
      $vk3 = $jumlahvektorsum3/$eigenvector3;
      $vk4 = $jumlahvektorsum4/$eigenvector4;
      $vk5 = $jumlahvektorsum5/$eigenvector5;
      $vk6 = $jumlahvektorsum6/$eigenvector6;
      $vk7 = $jumlahvektorsum7/$eigenvector7;

      $lambda = ($vk1+$vk2+$vk3+$vk4+$vk5+$vk6+$vk7)/$n;
      $indekskonsistensi = ($lambda - $n)/($n-1);
      // 4. perhitungan Rasio Konsistensi

      $ir = $this->ahp->indeksrandom($n);
      echo $rasiokonsistensi = $indekskonsistensi/$ir;
      $persenrasiokonsistensi = $rasiokonsistensi*100;
      if ($persenrasiokonsistensi <= 10) {
            echo "penilaian konsistensi Benar";
      } else {
           echo "penilaian Konsistensi salah";
      }
      ?>