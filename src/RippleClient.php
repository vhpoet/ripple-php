<?php

require_once(dirname(__FILE__) . "/lib/jsonRPCClient.php");
require_once(dirname(__FILE__) . "/Transaction.php");

/**
 * Ripple client class for access to a Ripple server via JSON-RPC-HTTP[S]
 */
class RippleClient extends jsonRPCClient
{
  public function __construct($address = "http://s1.ripple.com", $port = "51234")
  {
    $url = $port ? $address.':'.$port : $address;

    parent::__construct($url);
  }

  public function getAccountTx($account)
  {
    $tx = parent::account_tx(array(
      'account' => $account,
      'ledger_min' => 1,
      'ledger_max' => 9999999,
      'descending' => false
    ));

    $txList = array();

    foreach($tx['transactions'] as $transaction) {
      array_push($txList,new Transaction($transaction));
    }

    return $txList;
  }
}