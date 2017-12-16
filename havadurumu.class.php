<?php

  /**
  *
  * User: yalçın uzun
  * Date: 16.12.2017
  * Time: 17:18
  *
  */


  class HavaDurumu
  {

    private $saatlikUrl = "https://servis.mgm.gov.tr/api/tahminler/saatlik?istno=";
    private $gunlukUrl = "https://servis.mgm.gov.tr/api/tahminler/gunluk?istno=";
    private $anlikUrl = "https://servis.mgm.gov.tr/api/sondurumlar?merkezid=";
    private $ilceUrl = "https://servis.mgm.gov.tr/api/merkezler/ililcesi?il=";
    private $ilUrl = "https://servis.mgm.gov.tr/api/merkezler/iller";

    public function convertUrl($url)
    {
      $urlConvert = file_get_contents($url);
      return json_decode($urlConvert , true);
    }

    public function illistesi()
    {
      $ilListesi = $this->convertUrl($this->ilUrl);
      foreach ($ilListesi as $ilListesi) {
        $plaka = $ilListesi["ilPlaka"];
        foreach ($ilListesi as $key => $value) {
          $data[$plaka][$key] = $value;
        }
      }
      ksort($data);
      return $data;
    }

    public function ilcelistesi($il)
    {
      $ilceListesi = $this->convertUrl($this->ilceUrl.$il);
      return $ilceListesi;
    }

    public function gunlukHava($istId)
    {
      $gunlukHava = $this->convertUrl($this->gunlukUrl.$istId);
      return $gunlukHava[0];
    }

    public function anlikHava($istId)
    {
      $anlikHava = $this->convertUrl($this->anlikUrl.$istId);
      return $anlikHava[0];
    }

    public function saatlikHava($istId)
    {
      $saatlikHava = $this->convertUrl($this->saatlikUrl.$istId);
      return $saatlikHava[0];
    }

  }

  $havaDurumu = new HavaDurumu();
  $illistesi = $havaDurumu->illistesi();
  $ilcelistesi = $havaDurumu->ilcelistesi("istanbul");
  $gunlukHava = $havaDurumu->gunlukHava("90101");
  $anlikHava = $havaDurumu->anlikHava("90101");
  $saatlikHava = $havaDurumu->saatlikHava("17056");

?>
