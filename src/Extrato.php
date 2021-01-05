<?php

namespace CodePhix\Asaas;


class Extrato {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }

    public function getAll($parameters = array())
    {
        return $this->http->get(
            sprintf('/financialTransactions?%s', http_build_query(
                [
                    'startDate' => $parameters['startDate'] ?? '',
                    'finishDate' => $parameters['finishDate'] ?? '',
                    'offset' => $parameters['offset'] ?? 0,
                    'limit' => $parameters['limit'] ?? 10,
                ]
            ))
        );
    }

}
