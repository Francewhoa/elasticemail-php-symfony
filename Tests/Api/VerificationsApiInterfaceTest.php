<?php
/**
 * VerificationsApiInterfaceTest
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
 * VerificationsApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */
class VerificationsApiInterfaceTest extends WebTestCase
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
     * Test case for verificationsByEmailDelete
     *
     * Delete Email Verification Result.
     *
     */
    public function testVerificationsByEmailDelete()
    {
        $client = static::createClient();

        $path = '/verifications/{email}';
        $pattern = '{email}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for verificationsByEmailGet
     *
     * Get Email Verification Result.
     *
     */
    public function testVerificationsByEmailGet()
    {
        $client = static::createClient();

        $path = '/verifications/{email}';
        $pattern = '{email}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for verificationsByEmailPost
     *
     * Verify Email.
     *
     */
    public function testVerificationsByEmailPost()
    {
        $client = static::createClient();

        $path = '/verifications/{email}';
        $pattern = '{email}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('POST', $path);
    }

    /**
     * Test case for verificationsFilesByIdDelete
     *
     * Delete File Verification Result.
     *
     */
    public function testVerificationsFilesByIdDelete()
    {
        $client = static::createClient();

        $path = '/verifications/files/{id}';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for verificationsFilesByIdResultDownloadGet
     *
     * Download File Verification Result.
     *
     */
    public function testVerificationsFilesByIdResultDownloadGet()
    {
        $client = static::createClient();

        $path = '/verifications/files/{id}/result/download';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for verificationsFilesByIdResultGet
     *
     * Get Detailed File Verification Result.
     *
     */
    public function testVerificationsFilesByIdResultGet()
    {
        $client = static::createClient();

        $path = '/verifications/files/{id}/result';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for verificationsFilesPost
     *
     * Verify From File.
     *
     */
    public function testVerificationsFilesPost()
    {
        $client = static::createClient();

        $path = '/verifications/files';

        $crawler = $client->request('POST', $path);
    }

    /**
     * Test case for verificationsFilesResultGet
     *
     * Get Simple Files Verification Results.
     *
     */
    public function testVerificationsFilesResultGet()
    {
        $client = static::createClient();

        $path = '/verifications/files/result';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for verificationsGet
     *
     * Get Emails Verification Results.
     *
     */
    public function testVerificationsGet()
    {
        $client = static::createClient();

        $path = '/verifications';

        $crawler = $client->request('GET', $path);
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
