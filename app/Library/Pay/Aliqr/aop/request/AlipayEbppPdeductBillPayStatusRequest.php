<?php
class AlipayEbppPdeductBillPayStatusRequest { private $agreementId; private $outOrderNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAgreementId($sp81d0a5) { $this->agreementId = $sp81d0a5; $this->apiParas['agreement_id'] = $sp81d0a5; } public function getAgreementId() { return $this->agreementId; } public function setOutOrderNo($spa9bc27) { $this->outOrderNo = $spa9bc27; $this->apiParas['out_order_no'] = $spa9bc27; } public function getOutOrderNo() { return $this->outOrderNo; } public function getApiMethodName() { return 'alipay.ebpp.pdeduct.bill.pay.status'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }