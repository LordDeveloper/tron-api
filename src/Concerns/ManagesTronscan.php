<?php
namespace IEXBase\TronAPI\Concerns;


use IEXBase\TronAPI\Exception\TronException;

trait ManagesTronscan
{
    /**
     * Transactions from explorer
     *
     * @param array $options
     * @return array
     * @throws TronException
     */
    public function getTransactionByAddress($options = [])
    {
        if(empty($options)) {
            throw new TronException('Parameters must not be empty.');
        }

        return $this->manager->request('api/transaction', $options);
    }

    /**
     * Filter transactions from explorer
     *
     * @param array $options
     * @return array
     * @throws TronException
     */
    public function filterTransactions($options = [])
    {
        if(empty($options)) {
            throw new TronException('Parameters must not be empty.');
        }

        return $this->manager->request('api/multi/search', $options);
    }
}
