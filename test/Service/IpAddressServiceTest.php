<?php
namespace KwCountryFinder\Test\Service;

use KwCountryFinder\Repository\IpAddressRepository;
use KwCountryFinder\Service\IpAddressService;
use PHPUnit_Framework_TestCase;

class IpAddressServiceTest extends PHPUnit_Framework_TestCase
{
    public function test_getCountryByIpAddress_manyIps_countryCode()
    {
        $ipAddressRepository = $this->prophesize(IpAddressRepository::class);
        $ipAddressRepository->findCountryCodeByIp(1299402798)->willReturn("PL");

        $service = new IpAddressService($ipAddressRepository->reveal());

        $country = $service->getCountryByIpAddress("77.115.80.46,76.115.80.46");

        $this->assertEquals('PL', $country);
    }

    public function test_getCountryByIpAddress_oneIp_countryCode()
    {
        $ipAddressRepository = $this->prophesize(IpAddressRepository::class);
        $ipAddressRepository->findCountryCodeByIp(1299402798)->willReturn("PL");

        $service = new IpAddressService($ipAddressRepository->reveal());

        $country = $service->getCountryByIpAddress("77.115.80.46");

        $this->assertEquals('PL', $country);
    }
} 