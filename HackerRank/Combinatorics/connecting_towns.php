<?php

$inputFile = fopen("connecting_towns.txt", "r") or die("Unable to open file!");

$data = array();
while (!feof($inputFile)) {
    $data[] = fgets($inputFile);
}
fclose($inputFile);

for ($i = 1; $i <= $data[0]*2; $i++) {
    if ($i % 2 == 0) {
        echo connecting_town(explode(" ", trim($data[$i]))), "\n";
    }
}

function connecting_town($input) {
    $result = 0;
    foreach ($input as $value) {
        if ($result == 0) {
            $result = $value;
        } else {
            $result = ($result*$value) % 1234567;
        }
    }
    return $result;
}

//868553
//129779
//1121283
//548419
//193733
//167952
//1031468
//1158067
//465316
//93472
//1009777
//59
//235772
//812927
//1203613
//395392
//667365
//357124
//196863
//808482
//62635
//1187704
//95885
//201218
//158680
//1074478
//1228852
//584708
//161275
//565915
//3597
//1022239
//1166614
//1094867
//483590
//1196094
//1125514
//763524
//290719
//237401
//1123569
//129217
//889127
//647017
//538361
//181577
//422598
//926
//282232
//1081024
//965676
//1084969
//279654
//242767
//422462
//201616
//1071245
//588427
//349123
//969265
//97150
//10668
//1092034
//1044956
//1058240
//377952
//631113
//297153
//601345
//578517
//78740
//340772
//274320
//418289
//806610
//1181227
//493266
//94119
//449534
//774319
//934050
//1154998
//226520
//1167260
//41529
//144272
//1000125
//497840
//686816
//906859
//251420
//1227600
//735696
//95629
//540385
//631959
//1096264
//527737
//768372
//313817
//688803
//732581
//326888
//547735
//751967
//699332
//725271
//573986
//803402
//1010840
//787218
//913333
//117079
//395986
//172593
//729724
//745617
//279019
//100060
//277368
//227955
//972829
//281148
//913411
//1144397
//588201
//707898
//193302
//91042
//208499
//1175524
//558295
//198426
//1071876
//945515
//1051892
//793062
//359791
//747241
//399724
//1077215
//935028
//936498
//1093470
//1169890
//549011
//511204
//1011682
//836640
//1027242
//746379
//722053
//464820
//40090
//1054227
//1085736
//55553
//576374
//251474
//1192431
//643543
//547116
//751005
//849470
//1180862
//321500
//651857
//734187
//600400
//1180268
//761365
//503658
//179151
//978442
//173342
//846795
//995208
//768731
//1048425
//134493
//897161
//1026268
//259443
//124772
//638985
//504662
//113127
//571597
//295402
//272161
//574771
//1194485
//204470
//521508
//337820
//140780
//952869
//401099
//795101
//250317
//433324
//437134
//452857
//635381
//1116493
//1176663
//406604
//1159284
//739889
//169164
//870446
//529209
//50605
//319659
//437769
//492499
//760404
//1069190
//402881
//704289
//1043042
//220034
//109474
//980694
//624774
//569849
//342265
//321441
//1196897
//497840
//118745
//1088619
//616712
//753364
//607441
//394653
//1226568
//142633
//432689
//172358
//36788
//1035191
//917321
//154949
//933034
//108791
//1162529
//994791
//1179625
//1046681
//1105027
//741240
//934783
//1109084
//675509
//607294
//134358
//737002
//835279
//431546
//401899
//406400
//1199795
//167899
//555117
//184
//1102147
//490390
//1191895
//146685
//609502
//891137
//11557
//80391
//154952
//49911
//617855
//1185037
//693053
//141986
//1174183
//586275
//1138428
//37463
//995794
//751596
//973455
//1036526
//802513
//520095
//608901
//259923
//88707
//111252
//906820
//722249
//668531
//220885
//37592
//387487
//926973
//627634
//329737
//501796
//1006221
//508937
//578148
//1194410
//356854
//197883
//817753
//666432
//971409
//1231642
//443107
//726096
//69284
//23164
//1134237
//603938
//801116
//251529
//360169
//245481
//789769
//482406
//383726
//173737
//580009
//1091057
//440090
//307216
//326145
//775462
//446355
//1143623
//814921
//1213358
//292541
//473221
//129032
//785241
//1039368
//977265
//531745
//1165379
//895204
//772718
//845546
//1125749
//627819
//511698
//4699
//1145117
//182753
//490993
//174535
//277774
//390734
//1057289
//1044448
//596081
//312928
//111086
//520573
//679785
//625363
//1042119
//1096629
//698981
//683671
//444483
//605663
//207272
//762134
//373761
//262404
//639529
//239903
//648732
//350299
//78486
//346924
//709653
//367550
//344995
//941616
//485657
//472059
//893445
//180862
//1161838
//790728
//10220
//887430
//311401
//786523
//330581
//1119632
//88268
//652025
//527939
//892518
//137470
//1134687
//882269
//171330
//1008738
//112522
//1009213
//84852
//485794
//650738
//819150
//755441
//1028827
//86487
//89662
//311062
//879957
//738386
//1153287
//381061
//574127
//39624
//156905
//1096189
//597012
//900842
//156483
//1203165
//186041
//1173134
//1038160
//922550
//1163066
//897781
//792512
//625162
//1063153
//439426
//346073
//1021210
//1025625
//115938
//953845
//453414
//1105315
//492849
//451485
//496253
//1084486
//105664
//42138
//325691
//1178845
//1060090
//1059660
//609600
//130192
//120015
//967957
//273269
//1081532
//645138
//20221
//1118929
//170893
//97917
//427297
//1144755
//21209
//877536
//156753
//554370
//208329
//1193684
//434672
//279818
//980821
//490574
//474599
//398272
//1055122
//330616
//231634
//1022917
//150435
//556249
//289052
//123070
//139640
//598793
//627005
//966403
//240792
//640907
//952779
//762623
//27955
//607695
//613755
//776795
//521495
//1017651
//330989
//1166613
//1208780
//808078
//735052
//461584
//207102
//364987
//296251
//481125
//876566
//813807
//316799
//320770
//862711
//554961
//88311
//232927
//1020814
//871773
//412274
//975868
//812165
//687705
//214376
//783666
//1127528
//591543
//1074217
//974852
//352044
//368262
//328796
//677923
//92075
//697738
//1027703
//25146
//1231673
//422132
//1031875
//482473
//657619
//88023
//984089
//481584
//1174496
//827217
//1148080
//1061930
//151638
//980142
//1226693
//667004
//793877
//328549
//405359
//747078
//197895
//28191
//680124
//1208003
//309802
//748170
//518154
//1057832
//1164982
//609981
//74422
//506658
//439594
//242378
//45720
//195707
//123360
//205359
//371172
//421402
//442849
//949320
//1189478
//901562
//968629
//966719
//889381
//1018008
//625978
//948944
//686937
//482781
//730962
//1136701
//1062863
//1118236
//217467
//273050
//89009
//353936
//158049
//194183
//712969
//453136
//1030487
//962433
//769552
//306019
//113904
//137661
//678050
//627857
//1131831
//695706
//1168669
//859842
//711704
//94348
//930503
//404504
//351399
//147955
//1120880
//1199470
//407497
//939316
//1146483
//704077
//728498
//1013600
//118999
//934331
//926331
//554482
//425521
//1169502
//1000125
//980186
//593253
//974090
//1160087
//354143
//8890
//204243
//1042924
//199614
//971894
//750498
//1015134
//1072732
//1138757
//915035
//260858
//63754
//1051876
//1151776
//1222248
//427923
//1169289
//852331
//760934
//673989
//1227743
//748157
//288631
//293850
//906018
//426505
//748661
//880358
//573851
//791337