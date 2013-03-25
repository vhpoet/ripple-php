<?php

/**
 * Class Transaction
 */
class Transaction
{
  /**
   * @var
   */
  protected $affectedNodes;
  /**
   * @var
   */
  protected $transactionIndex;
  /**
   * @var
   */
  protected $transactionResult;
  /**
   * @var
   */
  protected $account;
  /**
   * @var
   */
  protected $amount;
  /**
   * @var
   */
  protected $destination;
  /**
   * @var
   */
  protected $fee;
  /**
   * @var
   */
  protected $flags;
  /**
   * @var
   */
  protected $sequence;
  /**
   * @var
   */
  protected $signingPubKey;
  /**
   * @var
   */
  protected $transactionType;
  /**
   * @var
   */
  protected $txnSignature;
  /**
   * @var
   */
  protected $date;
  /**
   * @var
   */
  protected $hash;
  /**
   * @var
   */
  protected $inLedger;
  /**
   * @var
   */
  protected $status;
  /**
   * @var
   */
  protected $validated;

  /**
   * @param $data
   */
  public function __construct($data)
  {
    // meta
    // affected nodes
    $this->setAffectedNodes($data['meta']['AffectedNodes']);

    // tx index
    $this->setTransactionIndex($data['meta']['TransactionIndex']);

    // tx result
    $this->setTransactionResult($data['meta']['TransactionResult']);

    // tx
    foreach($data['tx'] as $key => $value) {
      if (method_exists($this,'set'.$key)) {
        call_user_func(array($this, 'set'.$key),$value);
      }
    }

    // validated
    $this->setValidated($data['validated']);
  }

  /**
   * @param $account
   */
  public function setAccount($account)
  {
    $this->account = $account;
  }

  /**
   * @return mixed
   */
  public function getAccount()
  {
    return $this->account;
  }

  /**
   * @param $affectedNodes
   */
  public function setAffectedNodes($affectedNodes)
  {
    $this->affectedNodes = $affectedNodes;
  }

  /**
   * @return mixed
   */
  public function getAffectedNodes()
  {
    return $this->affectedNodes;
  }

  /**
   * @param $amount
   */
  public function setAmount($amount)
  {
    $this->amount = $amount;
  }

  /**
   * @return mixed
   */
  public function getAmount()
  {
    return $this->amount;
  }

  /**
   * @param $date
   */
  public function setDate($date)
  {
    $this->date = $date;
  }

  /**
   * @return mixed
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * @param $destination
   */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  /**
   * @return mixed
   */
  public function getDestination()
  {
    return $this->destination;
  }

  /**
   * @param $fee
   */
  public function setFee($fee)
  {
    $this->fee = $fee;
  }

  /**
   * @return mixed
   */
  public function getFee()
  {
    return $this->fee;
  }

  /**
   * @param $flags
   */
  public function setFlags($flags)
  {
    $this->flags = $flags;
  }

  /**
   * @return mixed
   */
  public function getFlags()
  {
    return $this->flags;
  }

  /**
   * @param $hash
   */
  public function setHash($hash)
  {
    $this->hash = $hash;
  }

  /**
   * @return mixed
   */
  public function getHash()
  {
    return $this->hash;
  }

  /**
   * @param $inLedger
   */
  public function setInLedger($inLedger)
  {
    $this->inLedger = $inLedger;
  }

  /**
   * @return mixed
   */
  public function getInLedger()
  {
    return $this->inLedger;
  }

  /**
   * @param $sequence
   */
  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }

  /**
   * @return mixed
   */
  public function getSequence()
  {
    return $this->sequence;
  }

  /**
   * @param $signingPubKey
   */
  public function setSigningPubKey($signingPubKey)
  {
    $this->signingPubKey = $signingPubKey;
  }

  /**
   * @return mixed
   */
  public function getSigningPubKey()
  {
    return $this->signingPubKey;
  }

  /**
   * @param $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }

  /**
   * @return mixed
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * @param $transactionIndex
   */
  public function setTransactionIndex($transactionIndex)
  {
    $this->transactionIndex = $transactionIndex;
  }

  /**
   * @return mixed
   */
  public function getTransactionIndex()
  {
    return $this->transactionIndex;
  }

  /**
   * @param $transactionResult
   */
  public function setTransactionResult($transactionResult)
  {
    $this->transactionResult = $transactionResult;
  }

  /**
   * @return mixed
   */
  public function getTransactionResult()
  {
    return $this->transactionResult;
  }

  /**
   * @param $transactionType
   */
  public function setTransactionType($transactionType)
  {
    $this->transactionType = $transactionType;
  }

  /**
   * @return mixed
   */
  public function getTransactionType()
  {
    return $this->transactionType;
  }

  /**
   * @param $txnSignature
   */
  public function setTxnSignature($txnSignature)
  {
    $this->txnSignature = $txnSignature;
  }

  /**
   * @return mixed
   */
  public function getTxnSignature()
  {
    return $this->txnSignature;
  }

  /**
   * @param $validated
   */
  public function setValidated($validated)
  {
    $this->validated = $validated;
  }

  /**
   * @return mixed
   */
  public function getValidated()
  {
    return $this->validated;
  }
}