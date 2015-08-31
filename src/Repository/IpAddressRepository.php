<?php
namespace KwCountryFinder\Repository;


use PDO;

class IpAddressRepository
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findCountryCodeByIp($ipNumber)
    {
        $q = "SELECT countryCode FROM `ip_addresses` WHERE :ipNumber BETWEEN(beginipnumber) AND (endipnumber) LIMIT 1";
        $stmt = $this->pdo->prepare($q);
        $stmt->execute(['ipNumber' => $ipNumber]);
        if (!$row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return null;
        }
    }
}