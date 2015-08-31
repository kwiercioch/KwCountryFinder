<?php
namespace KwCountryFinder\Service;


use KwCountryFinder\Repository\IpAddressRepository;

class IpAddressService
{
    /**
     * @var IpAddressRepository
     */
    private $ipAddressRepository;

    public function __construct(IpAddressRepository $ipAddressRepository)
    {
        $this->ipAddressRepository = $ipAddressRepository;
    }

    public function getCountryByIpAddress($ipAddress)
    {
        $ipList = explode(',', $ipAddress);
        if (isset($ipList[0])) {
            $ipAddress = trim($ipList[0]);
        }

        $ipNumber = (int)ip2long($ipAddress);
        return $this->ipAddressRepository->findCountryCodeByIp($ipNumber);
    }
} 