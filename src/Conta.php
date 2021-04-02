<?php


namespace CodePhix\Asaas;


class Conta
{
    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }
    public function sendAccountData(array $accountData){
        return $this->http->post('/bankAccounts/mainAccount', $accountData);
    }
}
