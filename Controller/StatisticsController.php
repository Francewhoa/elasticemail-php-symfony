<?php

/**
 * StatisticsController
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail\Controller
 * @author   OpenAPI Generator team
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
 * Do not edit the class manually.
 */

namespace ElasticEmail\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use ElasticEmail\Api\StatisticsApiInterface;
use ElasticEmail\Model\ChannelLogStatusSummary;
use ElasticEmail\Model\LogStatusSummary;

/**
 * StatisticsController Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class StatisticsController extends Controller
{

    /**
     * Operation statisticsCampaignsByNameGet
     *
     * Load Campaign Stats
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function statisticsCampaignsByNameGetAction(Request $request, $name)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $name = $this->deserialize($name, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->statisticsCampaignsByNameGet($name, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation statisticsCampaignsGet
     *
     * Load Campaigns Stats
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function statisticsCampaignsGetAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $limit = $request->query->get('limit');
        $offset = $request->query->get('offset');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $limit = $this->deserialize($limit, 'int', 'string');
            $offset = $this->deserialize($offset, 'int', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($limit, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($offset, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->statisticsCampaignsGet($limit, $offset, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation statisticsChannelsByNameGet
     *
     * Load Channel Stats
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function statisticsChannelsByNameGetAction(Request $request, $name)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $name = $this->deserialize($name, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->statisticsChannelsByNameGet($name, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation statisticsChannelsGet
     *
     * Load Channels Stats
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function statisticsChannelsGetAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $limit = $request->query->get('limit');
        $offset = $request->query->get('offset');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $limit = $this->deserialize($limit, 'int', 'string');
            $offset = $this->deserialize($offset, 'int', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($limit, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($offset, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->statisticsChannelsGet($limit, $offset, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation statisticsGet
     *
     * Load Statistics
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function statisticsGetAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'apikey' required
        // Set key with prefix in header
        $securityapikey = $request->headers->get('X-ElasticEmail-ApiKey');

        // Read out all input parameter values into variables
        $from = $request->query->get('from');
        $to = $request->query->get('to');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $from = $this->deserialize($from, '\DateTime', 'string');
            $to = $this->deserialize($to, '\DateTime', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\DateTime();
        $response = $this->validate($from, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\DateTime();
        $response = $this->validate($to, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'apikey'
            $handler->setapikey($securityapikey);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->statisticsGet($from, $to, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return StatisticsApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('statistics');
    }
}
