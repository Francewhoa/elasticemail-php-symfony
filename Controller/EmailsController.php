<?php

/**
 * EmailsController
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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
use ElasticEmail\Api\EmailsApiInterface;
use ElasticEmail\Model\EmailData;
use ElasticEmail\Model\EmailMessageData;
use ElasticEmail\Model\EmailSend;
use ElasticEmail\Model\EmailTransactionalMessageData;
use ElasticEmail\Model\MergeEmailPayload;

/**
 * EmailsController Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class EmailsController extends Controller
{

    /**
     * Operation emailsByMsgidViewGet
     *
     * View Email
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function emailsByMsgidViewGetAction(Request $request, $msgid)
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
            $msgid = $this->deserialize($msgid, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($msgid, $asserts);
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
            $result = $handler->emailsByMsgidViewGet($msgid, $responseCode, $responseHeaders);

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
     * Operation emailsMergefilePost
     *
     * Send Bulk Emails CSV
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function emailsMergefilePostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

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
        $mergeEmailPayload = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $inputFormat = $request->getMimeType($request->getContentType());
            $mergeEmailPayload = $this->deserialize($mergeEmailPayload, 'ElasticEmail\Model\MergeEmailPayload', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("ElasticEmail\Model\MergeEmailPayload");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($mergeEmailPayload, $asserts);
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
            $result = $handler->emailsMergefilePost($mergeEmailPayload, $responseCode, $responseHeaders);

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
     * Operation emailsPost
     *
     * Send Bulk Emails
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function emailsPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

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
        $emailMessageData = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $inputFormat = $request->getMimeType($request->getContentType());
            $emailMessageData = $this->deserialize($emailMessageData, 'ElasticEmail\Model\EmailMessageData', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("ElasticEmail\Model\EmailMessageData");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($emailMessageData, $asserts);
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
            $result = $handler->emailsPost($emailMessageData, $responseCode, $responseHeaders);

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
     * Operation emailsTransactionalPost
     *
     * Send Transactional Email
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function emailsTransactionalPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

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
        $emailTransactionalMessageData = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $inputFormat = $request->getMimeType($request->getContentType());
            $emailTransactionalMessageData = $this->deserialize($emailTransactionalMessageData, 'ElasticEmail\Model\EmailTransactionalMessageData', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("ElasticEmail\Model\EmailTransactionalMessageData");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($emailTransactionalMessageData, $asserts);
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
            $result = $handler->emailsTransactionalPost($emailTransactionalMessageData, $responseCode, $responseHeaders);

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
     * @return EmailsApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('emails');
    }
}
