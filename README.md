# Türkiye İl ve İlçe Hava Durumu
Türkiye il ve ilçe hava durumu. Günlük , haftalık ve saatlik olarak listeleme.


## Kullanımı

```
$havaDurumu = new HavaDurumu();
```

### İl Listesi İçin;

``` 
$havaDurumu->illistesi();
```

Çıktısı : 
```
  [1] => Array
      (
          [alternatifHadiseIstNo] => 
          [boylam] => 35.298
          [enlem] => 36.9838
          [gunlukTahminIstNo] => 90101 // Hava durumunu öğrenmek için gereken ID
          [il] => Adana
          [ilPlaka] => 1
          [ilce] => Seyhan
          [merkezId] => 90101
          [oncelik] => 1
          [saatlikTahminIstNo] => 17352 // Saatlik hava durumu için gereken ID
          [sondurumIstNo] => 17352
          [yukseklik] => 20
          [aciklama] => 
      )
```
### İlçe Listesi İçin;

```
$havaDurumu->ilcelistesi("istanbul"); // İl Adı ufak harflerle
```

Çıktısı :
```
  [0] => Array
      (
          [alternatifHadiseIstNo] => 
          [boylam] => 28.9489
          [enlem] => 40.9328
          [gunlukTahminIstNo] => 93439 // Hava durumunu öğrenmek için gereken ID
          [il] => İstanbul
          [ilPlaka] => 34
          [ilce] => Adalar
          [merkezId] => 93439
          [oncelik] => 0
          [saatlikTahminIstNo] => 17060 // Saatlik hava durumu için gereken ID
          [sondurumIstNo] => 17389
          [yukseklik] => 0
          [aciklama] => 
      )
```

### İl ve İlçe 5 Günlük Hava Durumu;

```
$havaDurumu->gunlukHava("90101"); // il yada ilçe "gunlukTahminIstNo" ID'si
```
Çıktısı : 

```
Array
(
    [enDusukGun1] => 8
    [enDusukGun2] => 8
    [enDusukGun3] => 7
    [enDusukGun4] => 8
    [enDusukGun5] => 7
    [enDusukNemGun1] => 67
    [enDusukNemGun2] => 49
    [enDusukNemGun3] => 62
    [enDusukNemGun4] => 47
    [enDusukNemGun5] => 31
    [enYuksekGun1] => 20
    [enYuksekGun2] => 21
    [enYuksekGun3] => 19
    [enYuksekGun4] => 20
    [enYuksekGun5] => 19
    [enYuksekNemGun1] => 95
    [enYuksekNemGun2] => 80
    [enYuksekNemGun3] => 75
    [enYuksekNemGun4] => 64
    [enYuksekNemGun5] => 73
    [hadiseGun1] => CB
    [hadiseGun2] => PB
    [hadiseGun3] => CB
    [hadiseGun4] => CB
    [hadiseGun5] => PB
    [istNo] => 90101
    [ruzgarHizGun1] => 9
    [ruzgarHizGun2] => 10
    [ruzgarHizGun3] => 11
    [ruzgarHizGun4] => 13
    [ruzgarHizGun5] => 25
    [ruzgarYonGun1] => 28
    [ruzgarYonGun2] => 29
    [ruzgarYonGun3] => 27
    [ruzgarYonGun4] => 23
    [ruzgarYonGun5] => 6
    [tarihGun1] => 2017-12-17T00:00:00.000Z
    [tarihGun2] => 2017-12-18T00:00:00.000Z
    [tarihGun3] => 2017-12-19T00:00:00.000Z
    [tarihGun4] => 2017-12-20T00:00:00.000Z
    [tarihGun5] => 2017-12-21T00:00:00.000Z
)        
```

### İl ve İlçe Anlık Hava Durumu;

```
$havaDurumu->anlikHava("90101"); // il yada ilçe "gunlukTahminIstNo" ID'si
```

Çıktısı : 
```
Array
(
    [aktuelBasinc] => 1019.1
    [denizSicaklik] => -9999
    [denizeIndirgenmisBasinc] => 1021.5
    [gorus] => 3300
    [hadiseKodu] => PUS
    [istNo] => 17352
    [kapalilik] => 5
    [karYukseklik] => -9999
    [nem] => 80
    [rasatMetar] => LTAF 161520Z 09003KT 3300 1600SW BR NSC 15/12 Q1021 NOSIG RMK RWY23 09003KT =
    [rasatSinoptik] => -9999
    [rasatTaf] => -9999
    [ruzgarHiz] => 5.556
    [ruzgarYon] => 90
    [sicaklik] => 15
    [veriZamani] => 2017-12-16T15:20:00.000Z
    [yagis00Now] => -9999
    [yagis10Dk] => -9999
    [yagis12Saat] => -9999
    [yagis1Saat] => -9999
    [yagis24Saat] => -9999
    [yagis6Saat] => -9999
    [denizVeriZamani] => 2017-12-16T06:00:00.000Z
)
```
### İl ve İlçe Saatlik Hava Durumu;

```
$havaDurumu->saatlikHava("17056"); // il yada ilçe "saatlikTahminIstNo" ID'si
```

Çıktısı :

```
Array
(
    [baslangicZamani] => 2017-12-16T12:00:00.000Z
    [istNo] => 17056
    [merkez] => TEKIRDAG
    [tahmin] => Array
        (
            [0] => Array
                (
                    [tarih] => 2017-12-16T18:00:00.000Z
                    [hadise] => SY
                    [sicaklik] => 15
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [1] => Array
                (
                    [tarih] => 2017-12-16T21:00:00.000Z
                    [hadise] => SY
                    [sicaklik] => 12
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [2] => Array
                (
                    [tarih] => 2017-12-17T00:00:00.000Z
                    [hadise] => SY
                    [sicaklik] => 11
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [3] => Array
                (
                    [tarih] => 2017-12-17T03:00:00.000Z
                    [hadise] => SY
                    [sicaklik] => 10
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [4] => Array
                (
                    [tarih] => 2017-12-17T06:00:00.000Z
                    [hadise] => SY
                    [sicaklik] => 12
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [5] => Array
                (
                    [tarih] => 2017-12-17T09:00:00.000Z
                    [hadise] => KY
                    [sicaklik] => 14
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [6] => Array
                (
                    [tarih] => 2017-12-17T12:00:00.000Z
                    [hadise] => KY
                    [sicaklik] => 15
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [7] => Array
                (
                    [tarih] => 2017-12-17T15:00:00.000Z
                    [hadise] => KY
                    [sicaklik] => 14
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [8] => Array
                (
                    [tarih] => 2017-12-17T18:00:00.000Z
                    [hadise] => KY
                    [sicaklik] => 13
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

            [9] => Array
                (
                    [tarih] => 2017-12-17T21:00:00.000Z
                    [hadise] => KY
                    [sicaklik] => 12
                    [hissedilenSicaklik] => -9999
                    [nem] => -9999
                    [ruzgarYonu] => -9999
                    [ruzgarHizi] => -9999
                    [maksimumRuzgarHizi] => -9999
                )

        )

)
```
