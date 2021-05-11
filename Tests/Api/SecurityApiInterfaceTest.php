<?php
/**
 * SecurityApiInterfaceTest
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a href=\"https://api.elasticemail.com/public/help\">here</a>.
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace ElasticEmail\Tests\Api;

use ElasticEmail\Configuration;
use ElasticEmail\ApiClient;
use ElasticEmail\ApiException;
use ElasticEmail\ObjectSerializer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * SecurityApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */
class SecurityApiInterfaceTest extends WebTestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for securityApikeysByNameDelete
     *
     * Delete ApiKey.
     *
     */
    public function testSecurityApikeysByNameDelete()
    {
        $client = static::createClient();

        $path = '/security/apikeys/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for securityApikeysByNameGet
     *
     * Load ApiKey.
     *
     */
    public function testSecurityApikeysByNameGet()
    {
        $client = static::createClient();

        $path = '/security/apikeys/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for securityApikeysByNamePut
     *
     * Update ApiKey.
     *
     */
    public function testSecurityApikeysByNamePut()
    {
        $client = static::createClient();

        $path = '/security/apikeys/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    /**
     * Test case for securityApikeysGet
     *
     * List ApiKeys.
     *
     */
    public function testSecurityApikeysGet()
    {
        $client = static::createClient();

        $path = '/security/apikeys';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for securityApikeysPost
     *
     * Add ApiKey.
     *
     */
    public function testSecurityApikeysPost()
    {
        $client = static::createClient();

        $path = '/security/apikeys';

        $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    /**
     * Test case for securitySmtpByNameDelete
     *
     * Delete SMTP Credential.
     *
     */
    public function testSecuritySmtpByNameDelete()
    {
        $client = static::createClient();

        $path = '/security/smtp/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for securitySmtpByNameGet
     *
     * Load SMTP Credential.
     *
     */
    public function testSecuritySmtpByNameGet()
    {
        $client = static::createClient();

        $path = '/security/smtp/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for securitySmtpByNamePut
     *
     * Update SMTP Credential.
     *
     */
    public function testSecuritySmtpByNamePut()
    {
        $client = static::createClient();

        $path = '/security/smtp/{name}';
        $pattern = '{name}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    /**
     * Test case for securitySmtpGet
     *
     * List SMTP Credentials.
     *
     */
    public function testSecuritySmtpGet()
    {
        $client = static::createClient();

        $path = '/security/smtp';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for securitySmtpPost
     *
     * Add SMTP Credential.
     *
     */
    public function testSecuritySmtpPost()
    {
        $client = static::createClient();

        $path = '/security/smtp';

        $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    protected function genTestData($regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast); 
    }
}
