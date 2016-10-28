<?php
use Solarium\QueryBuilder\QueryBuilder;
use Solarium\QueryType\Select\Query\Query;

require(__DIR__.'/init.php');

htmlHeader();

// create a client instance
$client = new Solarium\Client();

// Parse query string into query object
parse_str('q=price:[12 TO *]&fl=id,name,price,score&sort=price+ASC&wt=json&start=2&rows=20&fq=inStock:true', $params);
$request = new \Solarium\Core\Client\Request(array('param' => $params));

$query = new Query();
$queryBuilder = new QueryBuilder();
$queryBuilder->build($query, $request);

// Modify query using API
$query->setStart(4);

echo $client->createRequest($query);

htmlFooter();
