<?php
class AlipayZdatafrontDatatransferedFileuploadRequest { private $columns; private $file; private $fileDescription; private $fileDigest; private $fileType; private $primaryKey; private $records; private $typeId; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setColumns($sp929550) { $this->columns = $sp929550; $this->apiParas['columns'] = $sp929550; } public function getColumns() { return $this->columns; } public function setFile($sp81e22c) { $this->file = $sp81e22c; $this->apiParas['file'] = $sp81e22c; } public function getFile() { return $this->file; } public function setFileDescription($spc62c59) { $this->fileDescription = $spc62c59; $this->apiParas['file_description'] = $spc62c59; } public function getFileDescription() { return $this->fileDescription; } public function setFileDigest($sp7958e2) { $this->fileDigest = $sp7958e2; $this->apiParas['file_digest'] = $sp7958e2; } public function getFileDigest() { return $this->fileDigest; } public function setFileType($sp002fb4) { $this->fileType = $sp002fb4; $this->apiParas['file_type'] = $sp002fb4; } public function getFileType() { return $this->fileType; } public function setPrimaryKey($sped0843) { $this->primaryKey = $sped0843; $this->apiParas['primary_key'] = $sped0843; } public function getPrimaryKey() { return $this->primaryKey; } public function setRecords($spb752e3) { $this->records = $spb752e3; $this->apiParas['records'] = $spb752e3; } public function getRecords() { return $this->records; } public function setTypeId($spaaee1f) { $this->typeId = $spaaee1f; $this->apiParas['type_id'] = $spaaee1f; } public function getTypeId() { return $this->typeId; } public function getApiMethodName() { return 'alipay.zdatafront.datatransfered.fileupload'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }