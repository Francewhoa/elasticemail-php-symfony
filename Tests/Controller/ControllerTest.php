<?php
/**
 * ControllerTest
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail\Tests\Controller
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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

namespace ElasticEmail\Tests\Controller;

use ElasticEmail\Controller\Controller;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * ControllerTest Class Doc Comment
 *
 * @category           Class
 * @package            ElasticEmail\Tests\Controller
 * @author             openapi-generator contributors
 * @link               https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \ElasticEmail\Controller\Controller
 */
class ControllerTest extends TestCase
{

    /**
     * Tests isContentTypeAllowed static method.
     *
     * @param string $contentType
     * @param array  $consumes
     * @param bool   $expectedReturn
     *
     * @covers ::isContentTypeAllowed
     * @dataProvider provideArgumentsForIsContentTypeAllowed
     */
    public function testIsContentTypeAllowed($contentType, array $consumes, $expectedReturn)
    {
        $request = new Request();
        $request->headers->set('CONTENT_TYPE', $contentType, true);// last one argument overrides header
        $this->assertSame(
            $expectedReturn,
            Controller::isContentTypeAllowed($request, $consumes),
            sprintf(
                'Failed assertion that "Content-Type: %s" %s by [%s] consumes array.',
                $contentType,
                ($expectedReturn) ? 'is allowed' : 'is forbidden',
                implode(', ', $consumes)
            )
        );
    }

    public function provideArgumentsForIsContentTypeAllowed()
    {
        return [
            'usual JSON content type' => [
                'application/json',
                ['application/json'],
                true,
            ],
            'extended content type from PR #6078' => [
                'application/json; charset=utf-8',
                ['application/json'],
                true,
            ],
            'more than one content types' => [
                'application/json',
                ['application/xml', 'application/json; charset=utf-8'],
                true,
            ],
            'empty consumes array' => [
                'application/json',
                [],
                true,
            ],
            'empty consumes and content type' => [
                null,
                [],
                true,
            ],
            'consumes everything' => [
                'application/json',
                ['*/*'],
                true,
            ],
            'fancy custom content type' => [
                'foobar/foobaz',
                ['application/xml', 'foobar/foobaz; charset=utf-8'],
                true,
            ],
            'empty content type' => [
                null,
                ['application/xml', 'application/json; charset=utf-8'],
                false,
            ],
            'content type out of consumes' => [
                'text/html',
                ['application/xml', 'application/json; charset=utf-8'],
                false,
            ],
        ];
    }
}
